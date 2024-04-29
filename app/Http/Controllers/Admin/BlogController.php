<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BlogDatatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Models\Blog;
use FFI\Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\View\ViewException;


class BlogController extends Controller
{

    public function index(BlogDatatable $blogDatatable)
    {
        return $blogDatatable->render('admin.blog.index', [$blogDatatable]);

    }
    public function create(): View
    {
        return view('admin.blog.create');
    }
    public function store(StoreBlogRequest $storeBlogRequest): RedirectResponse
    {
        try {
            $blog = Blog::create($storeBlogRequest->validated());
            if (isset($storeBlogRequest->image)) {
                $blog->addMedia(storage_path('tmp/uploads/' . $storeBlogRequest->image))->toMediaCollection('blog.image');
            }
            if ($blog) {
                return redirect()->route('blog.index')
                    ->withSuccess('Blog successfully created');
            } else {
                return back()->withError('Something Went Wrong');
            }
        } catch (Exception $ex) {
            return back()->withErrors('Something Wnt Wrong ');
        }
    }
    public function edit(Blog $blog): View
    {
        return view('admin.blog.edit', compact('blog'));
    }
    public function update(UpdateBlogRequest $updateBlogRequest, Blog $blog): RedirectResponse
    {

        try {
            $blog->update($updateBlogRequest->validated);
            if (isset($updateBlogRequest['image']) == null) {
                $blog->clearMediaCollection('blog.image');
            } else {
                if (!file_exists(storage_path('tmp/uploads/' . $updateBlogRequest['image']))) {
                    return redirect()->route('blog.index')->withSuccess('Blog successfully Updated');

                }
                $blog->media()->delete();
                $blog->addMedia(storage_path('tmp/uploads/' . $updateBlogRequest['image']))->toMediaCollection('blog.image');
            }
            if ($blog) {
                return redirect()->route('blog.index')->withSuccess('Blog successfully Updated');
            }
        } catch (Exception $ex) {
            return back()->withError('Something Went Wrong');
        }
    }

     public function destroy(Blog $blog): RedirectResponse
     {
        try{
            $blog->media()->delete();
            $blog->delete();
            return redirect()->route('blog.index')->withSuccess('Blog successfully deleted');
         }catch(Exception $ex){
             return back()->withError('Something Went Wrong');

        }
     }
}




