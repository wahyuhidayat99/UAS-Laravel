<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\pemain;
use App\Models\club;
use App\Models\negara;

class NegaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $negara = negara::with(['pemain'])->get();
        return view('negara', ['listnegara' =>$negara]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemain = pemain::all();
        $club = club::all();

        return view('negara-add', compact('pemain'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $negara=negara::create($request->all());

        if($negara ){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/negara');
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
        $negara = club::with( ['pemain'])->findOrFail($id);
        return view('negara-edit',['negara' =>$negara,]);
    }
    
    public function update(Request $request, $id)
    {
        $negara = negara::findOrFail($id);

        $negara->update($request->all());
        if($negara){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/negara');
    }

    public function destroy($id)
    {
        $negara = negara::find($id)->delete();

        if($negara){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('negara');
    }
}
