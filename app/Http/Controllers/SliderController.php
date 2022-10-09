<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\File;
class SliderController extends Controller
{
    public function slider(){
        $slides=slide::all();

        return view('admin.slider.index',compact('slides'));
    }
    public function create(){
        
        return view('admin.slider.create');
    }
    public function store(Request $request){
      $slider=new Slide;
      $slider->heading=$request->input('heading');
      $slider->description=$request->input('description');
      $slider->link=$request->input('link');
      $slider->link_name=$request->input('link_name');
      if($request->hasfile('image'))
      {
        $file=$request->file('image');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
    $file->move('uploads/slider/',$filename)    ;
$slider->image=$filename;  }
$slider->status = $request->input('status') ==true ? '1':'0';
$slider->save();
return redirect()->back()->with('status','Slider added Successfully');

    }

    public function edit($id){
     $slide=Slide::find($id);
        return view('admin.slider.edit',compact('slide'));
    }
    public function update(Request $request,$id){
        $slider=Slide::find($id);
        $slider->heading=$request->input('heading');
        $slider->description=$request->input('description');
        $slider->link=$request->input('link');
        $slider->link_name=$request->input('link_name');
        if($request->hasfile('image'))
        {
            $dest ='uploads/slider/'.$slider->image;
            if(File::exists($dest)){
                File::delete($dest);
            }

          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=time().'.'.$extension;
      $file->move('uploads/slider/',$filename)    ;
  $slider->image=$filename;  }
  $slider->status = $request->input('status') ==true ? '1':'0';
  $slider->save();
  return redirect()->back()->with('status','Slider update Successfully');
  
      }

}

