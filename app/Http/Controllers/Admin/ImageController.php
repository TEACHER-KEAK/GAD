<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'image' => 'image|required',
        );
 
        $validation = Validator::make($input, $rules);
 
        if ($validation->fails()) {
            return response()->json($validation->errors->first(), 400);
        }
        $filename = $this->uploadImage($request);
        return response()->json([
            'IMAGE' => url().'/images/source/'.$filename,
            'STATUS' => TRUE
        ]);
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
    
    private function uploadImage($request){
        $filename ='';
        if ($request->hasFile('image')) {
            if(!file_exists('images/uploads')){
                mkdir('images/uploads/originals/','777', true);
            }
            $image = $request->file('image');
            $filename = uniqid() . $image->getClientOriginalName();

            $image->move('images/uploads/original/', $filename);
            
            $thumb = Image::make('images/uploads/original/'.$filename)
                          ->resize(240,160)
                          ->save('images/uploads/thumb/'.$filename,50);
            
        }
        return $filename;
    }
}
