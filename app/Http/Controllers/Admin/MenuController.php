<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use App\MenuTranslation;
use App\Category;
use Auth;
use DB;
use Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('admin.menus.menu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.menus.create_menu')->with([
            'menus' => Menu::where('status',1)->get(),
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
        //1. Validation 
        $this->validate($request, [
            'title' => 'required',
            'position' => 'required',
            'type' => 'required',
            'status' => 'required'
        ]);
        
        //2. GET ALL REQUESTS AND CREATE MENU OBJECT
        $input = $request->all();
        if($request->input('parent_id')==''){
            $input = $request->except('parent_id');
        }
        $menu = new Menu($input);

        //3. SET CREATED USER TO THE MENU
        $menu->createdby()->associate(Auth::user());

        //4. SAVE MENU
        $menu->save();
        
        $menuTranslations = new MenuTranslation($request->all());
        
        $menu->menuTranslation()->save($menuTranslations);

        
        //3. INSERT INTO MENUS TABLE
        //Menu::create($input);
        //Menu::fill($input)->save();
        
        //5. FLASH MESSAGE BACK
        Session::flash('flash_message', 'Menu successfully added!');
        
        //6. REDIRECT BACK
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
        $menu = Menu::find($id);
        if($menu==null){
            abort(404);
        }
        return View('admin.menus.translate_menu')->with([
            'languages' => \App\Language::where('status',1)->get(),
            'menu' => $menu
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
        $menu = Menu::find($id);
        if($menu==null){
            abort(404);
        }
        return View('admin.menus.update_menu')->with([
            'menus' => Menu::where('status',1)->get(),
            'categories' => Category::where('status',1)->get(),
            'menu' => $menu
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
        
    }
    public function updateMenu(Request $request, $id)
    {
        //1. CHECKING VALIDATION
        $this->validate($request, [
            'title' => 'required',
            'position' => 'required',
            'type' => 'required',
            'status' => 'required',
            'menu_id' => 'required'
        ]);
        
        //2. GET ALL REQUESTS AND CREATE MENU OBJECT
        $input = $request->except('_token','menu_id');
        if($request->input('parent_id')==''){
            $input = $request->except('parent_id','_token','menu_id');
        }

        //3. GET MENU
        $menu = Menu::where([
            'id'=> $request->input('menu_id'),
            'status' => 1
        ]);
        
        //4. CHECK MENU
        if($menu!=null){
            //5. GET MENU TRANSLATION
            $menuTranslations = MenuTranslation::where([
                    'menu_id' => $request->input('menu_id'),
                    'language_id' => 'en'
                ]);
            //6. CHECK MENU TRANSLATION
            if($menuTranslations==null){
                
            }else{
                //7. SET UPDATED USER TO THE MENU
                $input['updated_by'] = Auth::user()->id;
                //8. UPDATE MENU
                $menu->update($input);
                //9. UPDATE MENUTRANSLATIONS
                $menuTranslations->update($request->only('title','content'));
            }
            //10. FLASH MESSAGE BACK
            Session::flash('flash_message', 'Menu successfully updated!');
        }else{
            //11. FLASH MESSAGE BACK
            Session::flash('flash_message', 'Menu not found!!!');
        }
        //12. REDIRECT BACK
        return redirect()->back();
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
    
    public function translate($id){
        return View('admin.menus.translate_menu')->with([
            'languages' => \App\Language::where('status',1)->get()
        ]);
    }
    
    public function translation(Request $request){
        //1. Validation 
        $this->validate($request, [
            'title' => 'required',
            'menu_id' => 'required|numeric',
            'language_id' => 'required|max:2',
        ]);
        //2. Find menu by id
        $menu = Menu::where([
            'id'=> $request->input('menu_id'),
            'status' => 1
        ]);
        
        if($menu!=null){
            $menuTranslations = MenuTranslation::where($request->only('menu_id','language_id'));
            if($menuTranslations==null){
                $menuTranslations = new MenuTranslation($request->all());
                $menu->menuTranslation()->save($menuTranslations);
            }else{
                $menuTranslations->update($request->except('_token'));
            }
            //5. FLASH MESSAGE BACK
            Session::flash('flash_message', 'Menu successfully translated!');
        }else{
            //5. FLASH MESSAGE BACK
            Session::flash('flash_message', 'Menu not found!!!');
        }

        //6. REDIRECT BACK
        return redirect()->back();
    }
}
