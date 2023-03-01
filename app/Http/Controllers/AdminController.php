<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Khabar;

class AdminController extends Controller
{
    public function user()
    {
      $data=user::all();
        return view("admin.user",compact("data"));
    
    }
    public function delete($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
      return view("admin.foodmenu");
    }

    public function uploadfood(Request $request)
    {

      $data= new khabar;
      $image=$request->image;
      $imagename=time().'.'.$image->getClientoriginalExtension();
      $request->image->move('foodimage',$imagename);
      
      $data->image=$imagename;
      $data->title=$request->title;
      $data->price=$request->price;
      $data->description=$request->desc;
      $data->save();
      return redirect()->back();



     
    }
}
