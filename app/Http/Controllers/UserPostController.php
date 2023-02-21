<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class UserPostController extends Controller
{
    public function index()
    {
        return view('user.dashboard.index', [
            'posts' => Post::latest('updated_at')->where('user_id', auth()->user()->id)->paginate(10)
        ]);
    }

        public function create()
    {
        return view('user.posts.create');
    }

    public function store()
    {
        Post::create(array_merge($this->valdiatePost(), [
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('user.posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = $this->valdiatePost($post);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted!');
    }

    protected function valdiatePost(?Post $post = null): array
    {
        $post ??= new Post();

        return request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }
}
