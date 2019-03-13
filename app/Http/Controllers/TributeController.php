<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tribute;

class TributeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'create', 'edit']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //returns tributes index
        $tributes =  Tribute::orderBy('created_at', 'desc')->get();
        return view('tributes.index')->with('tributes', $tributes);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trib_index()
    {
        //returns tributes index
        $tributes =  Tribute::orderBy('created_at', 'desc')->get();
        return view('tributes.admin_trib')->with('tributes', $tributes);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tributes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);
        // create news

        $tribute = new Tribute;
        $tribute->name = $request->input('name');
        $tribute->title = $request->input('title');
        $tribute->body = $request->input('body');
        $tribute->save();

        return redirect('/tributes')->with('success', 'Tribute created');
    }

    /** //

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

        $tribute = Tribute::find($id);

        // checking user access before allowing tribute to be edited
           if(auth()->user()->id !== $tribute->user_id) {
               return redirect('/tributes')->with('error', 'Unauthorized Access, What Sorcery Is This.');
           }
        return view('tribute.edit')->with('tribute', $tribute);
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

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

          // update tribute into db
          $tribute = Tribute::find($id);
          $tribute->title = $request->input('title');
          $tribute->body = $request->input('body');

          $tribute->save();

          // redirect after sending tribute
          return redirect('/tributes')->with('success', 'Your Tribute Has Been Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         $tribute = Tribute::find($id);



         $tribute->delete();
         return redirect('/tributes')->with('success', 'Tribute Deleted Successfully');
    }
}