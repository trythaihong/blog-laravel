<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Contact;
use App\Models\About;
class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            $post =post::where('post_status','=','active')->get();
            if($usertype=='user'){
                $about=about::all();
                return view('home.homepage',compact('post','about'));
            }
            elseif($usertype=='admin'){
                $about=about::all()->count();
                $user=user::all()->count();
                $contact=contact::all()->count();
                $post=post::all()->count();
                return view('admin.adminhome',compact('about','user','contact','post'));
            }else{
                return redirect()->back();
            }
        }
        return ; 
    }
    public function homepage(){
        $about=about::all();
        $post =post::where('post_status','=','active')->get();
        return view('home.homepage',compact('post','about')); 
    }
    public function aboutpage(){
        $about=about::all();
        return view('home.aboutpage',compact('about')); 
    }
    public function blog(){
        return view('home.blog'); 
    }
    public function contact(){
        return view('home.contact'); 
    }
    public function servicepage(){
        $post= post::all();
        return view('home.servicepage',compact('post')); 
    }
    public function post_detail($id){
        $post=Post::find($id);
        return view('home.post_detail',compact('post')); 
    }
    public function create_post(){
        return view('home.create_post'); 
    }
    public function user_post(Request $request){
        $user=Auth()->user();
        $userid=$user->id;
        $username=$user->name;
        $usertype=$user->usertype;
        
        $post =new post;
        $post->title=$request->title;
        $post->des=$request->des;
        $post->user_id=$userid;
        $post->name=$username;
        $post->usertype=$usertype;
        $post->post_status='pending';
        
        $image=$request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);  // Fixed typo 'posstimage' to 'postimage'
            $post->image = $imagename;
        }
        
        $post->save();
        return redirect()->back()->with('message','post sucessfully');
    }
    public function my_post(){
        $user=Auth()->user();
        $userid=$user->id;
       $data=post::where('user_id','=',$userid)->get();
        return view('home.my_post',compact('data')); 
    }
    public function delete_post_user($id){
        $data=post::find($id);
        $data->delete();
        return redirect()->back()->with('message','delete sucessfully');
    }
    public function update_post_user($id){
        $data=post::find($id);
       return view('home.update_post_user',compact('data'));
    }
    public function update_post_data(Request $request,$id){
        $data=post::find($id);
        $data->title=$request->title;
        $data->des=$request->des;
         $image=$request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);  // Fixed typo 'posstimage' to 'postimage'
            $data->image = $imagename;
        }
        
        $data->save();
        return redirect()->back()->with('message','edit sucessfully');
    }
    public function send_message(Request $request)
    {
        // Redirect guest users before processing the request
        if (!Auth::check()) {
            return redirect('login')->with('error', 'You must be logged in to send a message.');
        }

        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|digits_between:8,15',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Save message in database
        $message = new Contact(); // Correct model name
        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Message sent successfully!');
    }
}
