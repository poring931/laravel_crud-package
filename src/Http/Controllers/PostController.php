<?php

namespace Poring931\Posts\Http\Controllers;

use Illuminate\Http\Request;

use Poring931\Posts\Models\Post;

class PostController extends Controller
{

    /**
     * Отображает список ресурсов
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        // return view('posts::posts.index', compact('posts'));
        // $posts = Post::all();
        // return view('posts::posts.index', [
        //     'posts' => $posts,
        // ]);
        return view('posts::posts.index')->with('posts', $posts);

    }

    /**
     * Выводит форму для создания нового ресурса
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts::posts.create');
    }

    /**
     * Помещает созданный ресурс в хранилище
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Отображает указанный ресурс.
     *
     * @param  \Poring931\Posts\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('posts::posts.show')->with('post', $post);
    }

    /**
     * Выводит форму для редактирования указанного ресурса
     *
     * @param  \Poring931\Posts\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('posts::posts.edit')->with('post', $post);
    }

    /**
     * Обновляет указанный ресурс в хранилище
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Poring931\Posts\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = post::find($id);
        $post->title       = $request->input('title');
        $post->description      = $request->input('description');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Удаляет указанный ресурс из хранилища
     *
     * @param  \Poring931\Posts\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();

        return redirect()->route('posts.index')
        ->with('success', 'post deleted successfully');
    }
}
