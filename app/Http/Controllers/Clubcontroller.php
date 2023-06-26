<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\pemain;
use App\Models\club;
use App\Models\negara;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $club = club::with(['pemain'])->get();
        return view('club', ['listclub' =>$club]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemain = pemain::all();
        $negara = negara::all();

        return view('club-add', compact('pemain', 'negara'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $club=club::create($request->all());

        if($club ){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/club');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Request $request, $id)
    {
        $club = club::with( ['pemain'])->findOrFail($id);
        return view('club-edit',['club' =>$club,]);
    }
    
    public function update(Request $request, $id)
    {
        $club = club::findOrFail($id);

        $club->update($request->all());
        if($club){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/club');
    }

    public function destroy($id)
    {
        $club = club::find($id)->delete();

        if($club){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('club');
    }
}
