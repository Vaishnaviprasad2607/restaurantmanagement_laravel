<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Food;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function cust()
    {
        $data=user::all();
        return view("admin.cust",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $data=food::all();
        return view("admin.foodmenu",compact("data"));
    }
    public function updatemenu($id){
        $data=food::find($id);
        return view("admin.updatemenu",compact("data"));
    }
    public function editmenu( Request $request, $id)
    {
        $food=food::find($id);
        $food->Title=$request->title;
        $food->Price=$request->price;
        $food->Description=$request->des;
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('foodimage',$imagename);
        $food->image=$imagename;
        }
        $food->save();
        return redirect()->back()->with('message',"Menu updated Successfully");
        
    }
    public function uploadfood(Request $request)
    {
        
        $data=new food;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->Title=$request->title;
        $data->Price=$request->price;
        $data->Description=$request->des;
        $data->save();
        return redirect()->back();
    }
    public function deletemenu($id)
    {
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function reservation(Request $request)
    {
        
        $data=new reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->msg=$request->message;
        $data->save();
        return redirect()->back();
    }
    public function viewres()
    {
        $data=reservation::all();
        return view("admin.adres",compact("data"));
    }
  
}
