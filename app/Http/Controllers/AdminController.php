<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
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

    public function post_page()
    {
        return view('admin.post_page');
    }

    public function add_post(Request $request)
    {
        $user=Auth()->user();
        $userid = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        self::$post= new Post();
        self::$post->title = $request->title;
        self::$post->description = $request->description;
        self::$post->post_status = 'active';
        self::$post->user_id = $userid;
        self::$post->name = $name;
        self::$post->usertype = $usertype;
        self::$post->image     = self::getImageUrl($request);
        self::$post->save();

        return redirect()->back()->with('message','Post Added Successfully!');
    }

    public function show_post()
    {
        $posts = Post::all();
        return view('admin.show_post', compact('posts'));
    }

    public function delete_post($id)
    {
        self::$post = Post::find($id);
        if(file_exists(self::$post->image))
        {
            unlink(self::$post->image);
        }
        self::$post->delete();

        return redirect()->back()->with('message','Post deleted Successfully!');
    }

    public function edit_post($id)
    {
        $post= Post::find($id);
        return view('admin.edit_post',compact('post'));

    }

    public function update_post(Request $request, $id)
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

        return redirect()->back()->with('message','Post Updated Successfully!');
    }

    public function accept_post($id)
    {
        $post = Post::find($id);
        $post->post_status = 'active';
        $post->save();

        Alert::success('Congrats','You Have Post Status Changed to Active Successfully!');

        return redirect()->back()->with('message');
    }


    public function reject_post($id)
    {
        $post = Post::find($id);
        $post->post_status = 'Rejected';
        $post->save();

        Alert::success('Congrats','You Have Post Status Changed to Rejected Successfully!');

        return redirect()->back()->with('message');
    }
}
