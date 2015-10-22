<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use App\CategoryTranslation;
use DB;
use Auth;
use Session;

class CategoryController extends Controller
{
    public function __construct(){
        /*$this->middleware('auth');*/
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(15);
        return View('admin.categories.category')->with('categories', $categories);
    }
    
    public function json(Request $requests){
        $limit = $requests->input('limit') ? $requests->input('limit') : 15;
        if($limit>100 || $limit<=0){
            $limit = 15;
        }
        $categories = Category::where('title', 'like','%'.$requests->input('search').'%')->paginate($limit);
        $data = View('admin.categories.category_template')->with('categories', $categories)->render();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.categories.create_category')->with([
            'categories' => Category::where('status', 1)
                                    ->get()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         DB::transaction(function () use ($request){
            //1. Validation 
            $this->validate($request, [
                'title' => 'required|unique:category_translations',
                'status' => 'required'
            ]);
            
            //2. GET ALL REQUESTS AND CREATE MENU OBJECT
            $input = $request->all();
            if($request->input('parent_id')==''){
                $input = $request->except('parent_id');
            }
            $category = new Category($input);
    
            //3. SET CREATED USER TO THE MENU
            $category->createdby()->associate(Auth::user());
            $category->updatedBy()->associate(Auth::user());
            
            $category->thumb_image = $request->input('image');
            $category->thumb_image = str_replace('source','thumbs',$category->thumb_image);
    
            //4. SAVE MENU
            $category->save();
            
            //$categoryTranslation = new CategoryTranslation($request->all());
            
            //$category->categoryTranslation()->save($categoryTranslation);
    
            //5. FLASH MESSAGE BACK
            Session::flash('flash_message', 'Category successfully added!');
            
            //6. REDIRECT BACK
        });
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return View('admin.categories.translate_category')->with([
            'languages' => \App\Language::where([
                                            'status' => 1,
                                            'is_default' => false])->get(),
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return View('admin.categories.update_category')->with([
            'categories' => \App\Category::where('status', 1)
                                         ->where('id','<>',$id)
                                         ->get(),
            'category' => $category
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function updateCategory(Request $request){
        $this->validate($request, [
            'title' => 'required',
            //'description' => 'required',
            'id' => 'required|numeric',
            'status' => 'required',
            'parent_id' => 'numeric'
        ]);
        $category = Category::findOrFail($request->input('id'));
        $input = $request->all();
        if($request->input('parent_id')==''){
            $input = $request->except('parent_id');
            $input['parent_id'] = NULL;
        }
        $category->updatedBy()->associate(Auth::user());
        $category->update($input);
        
        $category->thumb_image = $request->input('image');
        $category->thumb_image = str_replace('source','thumbs',$category->thumb_image);
        
        Session::flash('flash_message', 'Category successfully updated!');
        
        return redirect()->back();
    }
    
    public function translate(Request $request){
        $validation = $this->validate($request, [
            'category_id' => 'required|numeric',
            'language_id' => 'required|max:2',
        ]);
        $categoryTranslation = CategoryTranslation::firstOrNew($request->all());
        if($categoryTranslation->exists){
            return response()->json([
               'DATA' => $categoryTranslation
            ]);
        }else{
            return response()->json([
                'DATA' => null
            ]);
        }
    }
    
    
    public function translation(Request $request){
        //1. Validation 
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required|numeric',
            'parent_id' => 'numeric',
            //'description' => 'required',
        ]);
        //2. Find menu by id
        $category = Category::firstOrNew([
            'id'=> $request->input('category_id')
        ]);
        
        try{
            if($category->exists){
                $categoryTranslation = CategoryTranslation::firstOrNew($request->only('category_id','language_id'));
                if(!$categoryTranslation->exists){
                    $categoryTranslation = new CategoryTranslation($request->all());
                    $categoryTranslation->save();
                    //5. FLASH MESSAGE BACK
                    Session::flash('flash_message', 'Category successfully translated!');
                }else{
                    $categoryTranslation::where('category_id', $request->input('category_id'))
                                        ->where('language_id', $request->input('language_id'))
                                        ->update($request->only('description','title'));
                    //5. FLASH MESSAGE BACK
                    Session::flash('flash_message', 'Category successfully translate updated!');
                }
            }else{
                //5. FLASH MESSAGE BACK
                Session::flash('flash_message', 'Category not found!!!');
            }
        }catch(Exception $e){
            
        }

        //6. REDIRECT BACK
        return redirect()->back();
    }
}
