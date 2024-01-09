<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
use App\Models\Smtp;
use App\Models\Mailstores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use Illuminate\Support\Facades\Log;
use App\Models\Contentblog;

class BlogController extends Controller
{

    public function blog_add(Request $request)
    {
        $data['header_title'] = "Add New Brand";
        return view('admin.blog.add-new', $data);
    }
    public function content_add(Request $request, $id)
    {
        $data['blog'] = Blog::find($id);
        // $data['header_title'] = "Add New Brand";
        return view('admin.blog.contentblog', $data);
    }
    public function content_view(Request $request, $id)
    {
        // $data['blog'] = Blog::find($id);
        // $data['header_title'] = "Add New Brand";
        // Get user's orders
        $content = Contentblog::where('blog_id', $id)->first();
        //  $content = $user->content;
        // dd($content);
            return view('admin.blog.viewcontent', compact('content'));
      
    }
    public function content_add1(Request $request)
    {
        // $data['header_title'] = "Add New Brand";
        return view('editer');
    }
    public function upload(Request $request)
    {
        // Log the request data
        Log::info('Request Data:', $request->all());

        $image = $request->file('upload');
        $imageName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());

        // Log the file move result
        $isMoved = $image->move(public_path('images'), $imageName);

        // Check if the file move was successful and log accordingly
        if ($isMoved) {
            Log::info('File Move Success:', ['imageName' => $imageName]);
        } else {
            Log::error('File Move Failed:', ['imageName' => $imageName]);
        }
        Log::error('File :', ['url' => asset('public/images/' . $imageName)]);
        return response()->json(['url' => asset('public/images/' . $imageName), 'uploaded' => 1]);
    }


    public function create_content_blog(Request $request)
    {
        // dd($request->all());
        $blog = new Contentblog;
        $blog->blog_id = $request->blog_id;
        $blog->content_blog = $request->content_blog;
        $blog->save();
        return redirect('admin/blog/list')->with('success', 'content Blog uploaded successfully.');
    }
    public function create_blog(Request $request)
    {
        try {
            $blog = new Blog;
            $blog->Tittle = $request->Tittle;
            $blog->Description = $request->Description;
    
            if ($request->hasFile('Image')) {
                $imageName = time() . '.' . $request->Image->extension();
                $request->Image->move(public_path('images'), $imageName);
                $blog->Image = $imageName;
            }
    
            $blog->save();
    
            return redirect('admin/blog/list')->with('success', 'Blog uploaded successfully.');
        } catch (\Exception $e) {
            // Handle the exception (log or display an error message)
            return redirect()->back()->with('error', 'An error occurred while uploading the blog.');
        }
    }
    

    public function list(Request $request)
    {
        $data['getRecord'] = Blog::all();
        $data['getRecordcontent'] = Contentblog::all();
        $data['header_title'] = "Category List";

        return view('admin.blog.list', $data);
    }

    public function blog_edit($id, Request $request)
    {
        $data['getRecord'] = Blog::find($id);
        $data['header_title'] = "Edit blog";

        return view('admin.blog.blog-edit', $data);
    }
    public function content_edit($id, Request $request)
    {
        $data['getRecord'] = Contentblog::find($id);
        $data['header_title'] = "Edit blog";

        return view('admin.blog.content-edit', $data);
    }
    public function create_content_update_blog(Request $request,$id)
    {
        $blog = Contentblog::find($id);
        if ($request->has('content_blog') && $request->filled('content_blog')) {
            $blog->content_blog = $request->input('content_blog');
        }    
        else{
            $blog->content_blog = $blog->content_blog;
        }
        $blog->save();
        return redirect('admin/blog/list')->with('success', 'Blog updated successfully successfully.');
    }
    public function blog_update($id, Request $request)
    {

        $blog = Blog::find($id);
        $blog->Tittle = $request->Tittle;
        $blog->Description = $request->Description;
        if ($request->hasFile('Image')) {
            $imageName = time() . '.' . $request->Image->extension();
            $request->Image->move(public_path('images'), $imageName);

            $blog->Image = $imageName;
        } else {
            $blog->Image = $blog->Image;
        }
        $blog->save();
        return redirect('admin/blog/list')->with('success', 'blog updated');
    }

    public function delete($id, Request $request)
    {
        $brand = Blog::find($id);
        $brand->delete();
        return redirect()->back()->with('success', 'blog Successfully Deleted');
    }
    public function delete_blog($id, Request $request)
    {
        $brand = Contentblog::find($id);
        $brand->delete();
        return redirect('admin/blog/list')->with('success', 'blog content Deleted successful');
    }
}
