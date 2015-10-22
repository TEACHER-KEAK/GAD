<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slider;
use Auth;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at','desc')->paginate(15);
        return View('admin.sliders.slider')->with('sliders',$sliders);
    }
    
    public function json(Request $requests){
        $limit = $requests->input('limit') ? $requests->input('limit') : 15;
        if($limit>100 || $limit<=0){
            $limit = 15;
        }
        $sliders = Slider::where('title', 'like','%'.$requests->input('search').'%')
                           ->orderBy('created_at','desc')
                           ->paginate($limit);
        $data = View('admin.sliders.slider_template')->with('sliders', $sliders)->render();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.sliders.create_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
            'ordering' => 'required|numeric'
        ]);
        
        $slider = new Slider($request->all());
        
        $slider->createdBy()->associate(Auth::user());
        $slider->updatedBy()->associate(Auth::user());
        $slider->thumb_image = $request->input('image');
        $slider->thumb_image = str_replace('source','thumbs',$slider->thumb_image);
        
        $slider->save();
        
        Session::flash('flash_message', 'Slider successfully added!');
        
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
        $slider = Slider::findOrFail($id);
        return View('admin.sliders.update_slider')->with([
            'slider' => $slider
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
    }
    
    public function updateSlider(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
            'ordering' => 'required|numeric'
        ]);
        
        $slider = Slider::findOrFail($request->input('id'));
        
        $slider->updatedBy()->associate(Auth::user());
        $slider->thumb_image = $request->input('image');
        $slider->thumb_image = str_replace('source','thumbs',$slider->thumb_image);
        
        $slider->update($request->all());
        
        Session::flash('flash_message', 'Slider successfully updated!');
        
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
}
