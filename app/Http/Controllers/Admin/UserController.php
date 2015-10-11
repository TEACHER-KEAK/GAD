<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::paginate(15);
        return View('admin.users.user')->with('users', $users);
    }
    
    public function json(Request $requests){
        $limit = $requests->input('limit') ? $requests->input('limit') : 15;
        if($limit>100 || $limit<=0){
            $limit = 15;
        }
        $users = User::where('lastname', 'like','%'.$requests->input('search').'%')
                        ->orWhere('firstname', 'like','%'.$requests->input('search').'%')
                        ->orWhere('email', 'like','%'.$requests->input('search').'%')
                        ->orWhere('status', 'like','%'.$requests->input('search').'%')
                        ->orWhere('created_at', 'like','%'.$requests->input('search').'%')
                        ->orWhere('id', 'like','%'.$requests->input('search').'%')
                        ->paginate($limit);
        $data = View('admin.users.user_template')->with('users', $users)->render();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('admin.users.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    
    public function changePassword(){
        return View('admin.users.change_password_user');
    }
}
