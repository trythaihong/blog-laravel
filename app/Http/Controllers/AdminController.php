<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Contact;
use App\Models\About;
class AdminController extends Controller
{
   public function post_page(){
    return view('admin.post_page');
   }
   public function add_post(Request $request){
      $user = Auth()->user();
      $userid = $user->id;  // Access id as a property, not a method
      $name = $user->name;
      $usertype = $user->usertype;
      
      $post = new Post;
      $post->title = $request->title;
      $post->des = $request->des;
      
      $post->post_status = 'active';
      $post->user_id = $userid;
      $post->name = $name;
      $post->usertype = $usertype;
      
      $image = $request->image;
      if ($image) {
          $imagename = time() . '.' . $image->getClientOriginalExtension();
          $request->image->move('postimage', $imagename);  // Fixed typo 'posstimage' to 'postimage'
          $post->image = $imagename;
      }
      
      $post->save();
      return redirect()->back()->with('message','post sucessfully');
  }
  public function show_post(){
      $post= post::all();
      return view('admin.show_post',compact('post'));
  }
  public function delete_post($id){
      $post= post::find($id);
      $post->delete();
      return redirect()->back()->with('message','delete sucessfully');
    }
    public function update_post($id){
        $post= post::find($id);
        return view('admin.update_post',compact('post'));
    }
    public function edit_post(Request $request,$id){
        $data= post::find($id);
        $data->title=$request->title;
        $data->des=$request->des;
        $image=$request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);  // Fixed typo 'posstimage' to 'postimage'
            $data->image = $imagename;
        }
        
        $data->save();
        return redirect()->back()->with('message','update sucessfully');
      
  }
    public function accept_post($id){
        $data= post::find($id);
        $data->post_status="active";
        $data->save();

        return redirect()->back()->with('message','post status change sucessfully');
    }
    public function reject_post($id){
        $data= post::find($id);
        $data->post_status="reject";
        $data->save();

        return redirect()->back()->with('message','post status change sucessfully');
    }
    public function show_message(){
        $data= contact::all();
        

        return view('admin.show_message',compact('data'));
    }
    public function delete_message($id){
        $data= contact::find($id);
        $data->delete();
        return redirect()->back()->with('message','update sucessfully');
        
        
    }
    public function userpage(){
        $data=user::all();
        return view('admin.userpage',compact('data'));
        
        
        
    }
    public function delete_user($id){
        $data= user::find($id);
        $data->delete();
        return redirect()->back()->with('message','user delete sucessfully');
        
        
    }
    public function update_user($id){
        $data= user::find($id);
        
        return view('admin.update_user',compact('data'));
        
        
    }
    public function edit_userid(Request $request,$id){
        $data= user::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->usertype=$request->usertype;
       
        
        $data->save();
        return redirect('userpage')->with('message','user update sucessfully');
      
  }
  public function about_post(){
    
    
    return view('admin.about_post');
    
    
}
public function post_about(Request $request){
    $data= new about;
    $data->title=$request->title;
    $data->des=$request->des;
    $image=$request->image;
    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('aboutimage', $imagename);  // Fixed typo 'posstimage' to 'postimage'
        $data->image = $imagename;
    }
    
    $data->save();
    return redirect()->back()->with('message','create post sucessfully');
  
}
public function show_about(){
    $data=about::all();
    return view('admin.show_about',compact('data'));    
}
public function delete_about($id){
    $data= about::find($id);
    $data->delete();
    return redirect()->back()->with('message','about delete sucessfully');
    
    
}
public function update_about($id){
    $data=about::find($id);
    return view('admin.update_about',compact('data'));    
}
public function edit_about(Request $request,$id){
    $data=  about::find($id);
    $data->title=$request->title;
    $data->des=$request->des;
    $image=$request->image;
    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('aboutimage', $imagename);  // Fixed typo 'posstimage' to 'postimage'
        $data->image = $imagename;
    }
    
    $data->save();
    return redirect('show_about')->with('message','about update sucessfully');
  
}
}
