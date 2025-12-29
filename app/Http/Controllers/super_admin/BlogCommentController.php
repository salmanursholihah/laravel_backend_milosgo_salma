<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;

class BlogCommentController extends Controller
{
    public function index()
    {
        $comments = BlogComment::with(['blog', 'user'])->latest()->get();
        return view('pages.super_admin.blog_comment.index', compact('comments'));
    }

    public function approve($id)
    {
        $comment = BlogComment::findOrFail($id);
        $comment->update(['status' => 'approved']);

        return back()->with('success', 'Comment approved');
    }

    public function destroy($id)
    {
        BlogComment::findOrFail($id)->delete();
        return back()->with('success', 'Comment deleted');
    }
}
