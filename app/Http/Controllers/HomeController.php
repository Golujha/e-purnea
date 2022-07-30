<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category,Business};


class HomeController extends Controller
{
    //
    public function homepage(){
        $data['business']=Business::paginate(20);
        $data['category']=Category::all();
        $data['title'] = "Features";
        return view("home",$data);
    }

    public function search(Request $req){
        $data['business']=Business::where('title','like',"%$req->search%")->paginate(20);
        $data['category']=Category::all();
        $data['title'] = "Features";
        return view("home",$data);
    }

    public function add_biz(){
        $data['categories']  = Category::all();
        return view("add-biz",$data);
    }

    public function category($cat_id=Null){

        if($cat_id == null){
            return redirect()->route("homepage");
        }
        $category = Category::find($cat_id);
        $data['title'] = $category->cat_title;
        $data['category']=Category::all();
        $data['business'] = Business::where('category_id',$cat_id)->paginate(20);
        return view("home",$data);
    }

    public function viewBiz($id){
        $data['biz']=Business::find($id);
        $cat_id = $data['biz']->category_id;
        $data['category']=Category::all();
        $data['business'] = Business::where('id','<>',$id)->where("category_id",$cat_id)->paginate(6);
        return view("viewBiz",$data);


    }
}
