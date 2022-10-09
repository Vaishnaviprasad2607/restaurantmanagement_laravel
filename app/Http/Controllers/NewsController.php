<?php

namespace App\Http\Controllers;
use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {$news=news::all();
        return view('admin.news.index',compact('news'));
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function store(Request $request){
        $news= new news;
        $news->description=$request->input('description');
        $news->save();
        return redirect()->back()->with('message','Announcement Added successfully');
    }
    public function edit($id){
        $news=news::find($id);
        return view('admin.news.edit',compact('news'));
    }
    public function update(Request $request,$id){
        $news= news::find($id);
        $news->description=$request->input('description');
        $news->save();
        return redirect()->back()->with('message','Announcement updated successfully');
    }
    public function delete($id)
    {
        $news=news::find($id);
        $news->delete();
        return redirect()->back();
    }
}
