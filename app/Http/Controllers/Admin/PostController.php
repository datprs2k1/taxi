<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::query();

        // Search
        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filter by type
        if ($request->has('type') && $request->type) {
            $query->where('type', $request->type);
        }

        $posts = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('pages.admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('pages.admin.post.create');
    }

    public function store(PostStoreRequest $request)
    {
        $data = $request->validated();

        // Handle featured checkbox
        $data['featured'] = $request->has('featured') && $request->featured == '1';

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/posts', $imageName);
            $data['image'] = 'posts/' . $imageName;
        }

        // Ensure slug
        $baseSlug = Str::slug($data['title']);
        $slug = $baseSlug;
        $i = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }
        $data['slug'] = $slug;

        Post::create($data);

        return redirect()->route('admin.post.index')->with('success', 'Thêm bài viết thành công');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.admin.post.edit', compact('post'));
    }

    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->validated();

        // Handle featured checkbox
        $data['featured'] = $request->has('featured') && $request->featured == '1';

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($post->image) {
                Storage::delete('public/' . $post->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/posts', $imageName);
            $data['image'] = 'posts/' . $imageName;
        }

        // Update slug if title changed and no custom slug provided
        $baseSlug = Str::slug($data['title']);
        if (!$post->slug || $post->title !== $data['title']) {
            $slug = $baseSlug;
            $i = 1;
            while (Post::where('slug', $slug)->where('id', '!=', $post->id)->exists()) {
                $slug = $baseSlug . '-' . $i;
                $i++;
            }
            $data['slug'] = $slug;
        }

        $post->update($data);

        return redirect()->route('admin.post.index')->with('success', 'Cập nhật bài viết thành công');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Delete image if exists
        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }

        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Xóa bài viết thành công');
    }
}
