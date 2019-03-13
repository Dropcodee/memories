<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $uploads = Upload::all();
        return view('uploads.index')->with('uploads', $uploads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate field
        $this->validate($request, [
            'memories_image' => 'image|required|max:2999'
        ]);
         // handle file upload

         if($request->hasFile('memories_image')) {
            //GET FILENAME WITH THE EXTENSION
            $fileNameWithExt = $request->file('memories_image')->getClientOriginalName();
            //GET THE FILENAME EXTENSION
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('memories_image')->getClientOriginalExtension();
            //FILE NAME TO STORE
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('memories_image')->storeAs('public/memories_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $upload = new Upload;

        $upload->memories_image = $fileNameToStore;
        $upload->save();

        // redirect after sending images
        return redirect('/uploads')->with('success', 'Your Image has been uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}