<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;




class HomeController extends Controller
{
    private static $post, $image, $imageName, $directory, $imageUrl;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if(self::$image)
        {
            self::$imageName = rand().'.'.self::$image->getClientOriginalName();
            self::$directory = 'uploads/post-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }else
        {
            return '';
        }
    }

    public function index()
    {
        $posts = Post::where('post_status','=','active')->get();

        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('home.homepage',compact('posts'));
            }
            else if($usertype=='admin')
            {
                return view('admin.adminhome');
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function homepage()
    {
        $posts = Post::where('post_status','=','active')->get();
        return view('home.homepage',compact('posts'));
    }

    public function post_details($id)
    {
        $post= Post::find($id);
        return view('home.post_details',compact('post'));
    }

    public function blog_post()
    {
        $posts = Post::all();
        return view('home.blog_post',compact('posts'));
    }

    public function create_post()
    {
        return view('home.create_post');
    }


    public function user_post(Request $request)
    {
        $user=Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        self::$post= new Post();
        self::$post->title = $request->title;
        self::$post->description = $request->description;
        self::$post->post_status = 'pending';
        self::$post->user_id = $userid;
        self::$post->name = $name;
        self::$post->usertype = $usertype;
        self::$post->image     = self::getImageUrl($request);
        self::$post->save();


        Alert::success('Congrats','You Have Added the data Successfully!');

        return redirect()->back()->with('message','Post Added Successfully!');
    }

    public function my_post()
    {

        $user=Auth::user();

        $userid=$user->id;

        $posts= Post::where('user_id','=',$userid)->get();

        return view('home.my_post',compact('posts'));
    }

    public function my_post_del($id)
    {

        self::$post = Post::find($id);
        if(file_exists(self::$post->image))
        {
            unlink(self::$post->image);
        }
        self::$post->delete();

        Alert::success('Congrats','You have delete the data Successfully!');

        return redirect()->back()->with('message','Post deleted Successfully!');
    }

    public function update_post_page($id)
    {
        $post = Post::find($id);
        return view('home.update_post_page', compact('post'));
    }

    public function update_post_data(Request $request, $id)
    {
        self::$post= Post::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$post->image))
            {
                unlink(self::$post->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$post->image;
        }

        self::$post->title = $request->title;
        self::$post->description = $request->description;
        self::$post->image = self::$imageUrl;
        self::$post->save();


        Alert::success('Congrats','You Have Updated the data Successfully!');

        return redirect()->back()->with('message','Post Updated Successfully!');
    }
}
