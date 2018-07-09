<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\createPostRequest;
use App\Post;
use App\movies;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = movies::all();

        return view('Movie.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
//        $this->validate($request,[
//            'title'=>'required',
//            'content'=>'required'
//        ]);
//

//            movies ::create($request->all());
            $input = $request->all();

            if($file = $request->file('file')){
                $name = $file->getClientOriginalName();
                $file->move('images',$name);
                $input['path'] = $name;
            }
       // return $input;
            movies::create($input);

            return redirect('/posts');

//        $input = $request->all();
//        $input['itile'] = $request->title;
//        Post :: create($request->all());


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = movies::findOrFail($id);
        return view('Movie.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = movies::findOrFail($id);
        return view('Movie.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = movies::findOrFail($id);
        $post->update($request->all());

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $post = movies::whereId($id)->delete();
        $post = movies::findOrFail($id);
        $post->delete();

        return redirect('posts');
    }
}
