<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Models\post\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postData=post::all();
        return view('post.index',compact('postData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        post::create($request->all());
        $msg=   "New Post Created Successful! ";
        return redirect('post')->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postData=  post::find($id);
        return view('post.show', compact('postData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postData=  post::find($id);
        return view('post.edit',compact('postData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $post = post::find($id);
       $post->name = $request->name;
       $post->detail = $request->detail;
       $post->save();
        $msg = "Post Update Successful!";
        return redirect('post')->with('msg',$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::destroy($id);
        $msg    =   "Post Delete Sucessful! ";
        return redirect('post')->with('msg',$msg);
    }
}
