<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Image;
use File;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $find=Post::orderby('id','asc')->get();
         return view('backend.pages.post.managepost',compact('find'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.post.add_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $auth =Auth::user();
       $posts= new Post();
       $posts->cat_id = $request->cat_id;
       $posts->title = $request->title;
       $posts->content = $request->content;
       $posts->user_id = $auth->id;
       $posts->slug = Str::slug($request->title);
       $posts->status = $request->status;
       if ($request->pic) {
        $image = $request->file('pic');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('backend/postimage/' . $imageName);
        Image::make($image)->save($location);
        $posts->pic = $imageName;
        // $product->save();
        // return redirect()->route('dashboard');
    }
    $posts->save();
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postedit=Post::find($id);
        return view('backend.pages.post.edit_post', compact('postedit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $postupdate=Post::find($id);
        
        $postupdate->cat_id = $request->cat_id;
        $postupdate->title = $request->title;
        $postupdate->content = $request->content;
        $postupdate->status = $request->status;

        if(!empty($request->pic)){
            if(File::exists('backend/postimage/'.$postupdate->pic)){
                File::delete('backend/postimage/'.$postupdate->pic);
            }
            $image = $request->file('pic');
            $nameCustom=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/postimage/'.$nameCustom);
            $check=Image::make($image)->save($location);
            $postupdate->pic=$nameCustom;
        }
        $postupdate->update();
        return redirect()->route('postmanage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postdelete=Post::find($id);
        File::delete('backend/postimage/'.$postdelete->pic);
        $postdelete->delete();
        return redirect()->route('postmanage');   
    }
}
