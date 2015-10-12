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
            'categories' => Category::where('status',1)->get()
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
    
            //4. SAVE MENU
            $category->save();
            
            $categoryTranslation = new CategoryTranslation($request->all());
            
            $category->categoryTranslation()->save($categoryTranslation);
    
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
