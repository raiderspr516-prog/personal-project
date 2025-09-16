<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('contact', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'message' => 'required|max:1000',
            'avatar' => 'nullable|image|max:5120', // max 5MB
        ]);

        $path = null;
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
        }

        Comment::create([
            'name' => $request->name,
            'message' => $request->message,
            'avatar' => $path,
        ]);

        return redirect()->route('contact')->with('success', 'Komentar berhasil dikirim!');
    }
}
