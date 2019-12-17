<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Blog\BlogAddRequest;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Repositories\Admin\BlogEloquentRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct(BlogEloquentRepository $blogEloquentRepository)
    {
        $this->blogEloquentRepository = $blogEloquentRepository;
    }

    public function index()
    {
        $blogs = $this->blogEloquentRepository->getAll();

        $data = compact(
            'blogs'
        );

        return view('admin.blog.index', $data);
    }

    public function add()
    {
        return view('admin.blog.add');
    }

    public function edit($id_blog)
    {
        $blog = $this->blogEloquentRepository->find($id_blog);

        $data = compact(
            'blog'
        );

        return view('admin.blog.edit', $data);
    }

    public function create(BlogAddRequest $request)
    {
        $data = $request->except('_token');
        $data['short_tag'] = sluggify($data['name'], 96);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = upload($request->thumbnail, 1);
        }

        $result = $this->blogEloquentRepository->create($data);

        if ($result) {
            $request->session()->flash('success', 'Thành công');
        } else {
            $request->session()->flash('error', 'Thất bại');
        }

        return redirect(route('admin.blog.index'));
    }

    public function update(BlogUpdateRequest $request, $id_blog)
    {
        $data = $request->except('_token');

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = upload($request->thumbnail, 1);
        }

        $result = $this->blogEloquentRepository->update($id_blog, $data);

        if ($result) {
            $request->session()->flash('success', 'Thành công');
        } else {
            $request->session()->flash('error', 'Thất bại');
        }

        return redirect(route('admin.blog.index'));
    }

    public function delete(Request $request, $id_blog)
    {
        $result = $this->blogEloquentRepository->delete($id_blog);

        if ($result) {
            $request->session()->flash('success', 'Thành công');
        } else {
            $request->session()->flash('error', 'Thất bại');
        }

        return redirect()->back();
    }
}
