<?php

namespace App\Http\Controllers;

use App\Models\CommentKegiatan;
use Illuminate\Http\Request;

class CommentKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
            // Validate the form data
            $validatedData = $request->validate([
                'name' => 'required',
                'kegiatan_id' => 'required',
                'email' => 'required|email',
                'content' => 'required',
            ]);

            // Create a new comment instance
            $comment = new CommentKegiatan();
            $comment->kegiatan_id = $validatedData['kegiatan_id'];
            $comment->name = $validatedData['name'];
            $comment->email = $validatedData['email'];
            $comment->content = $validatedData['content'];

            // Save the comment
            $comment->save();

            // Redirect back or to a thank you page
            return redirect()->back()->with('success', 'Comment saved successfully!');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentKegiatan  $commentKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(CommentKegiatan $commentKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentKegiatan  $commentKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentKegiatan $commentKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CommentKegiatan  $commentKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentKegiatan $commentKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentKegiatan  $commentKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the comment by ID and delete it
        $comment = CommentKegiatan::find($id);
        if ($comment) {
            $comment->delete();
            // Perform any additional actions or redirect as needed
        }
        
        return redirect()->back()->with('success', 'Pengalaman kerja telah dihapus.');
    }


}
