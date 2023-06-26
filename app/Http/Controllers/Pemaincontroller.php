<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\pemain;
use App\Models\sepatu;
use App\Models\negara;
use App\Models\club;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemain = pemain::with(['sepatu','negara','club'])->get();
        return view('pemain', ['listpemain' =>$pemain]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $club = club::all();
        $negara = negara::all();

        return view('pemain-add', compact('club','negara'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        // ]);

        $pemain=pemain::create($request->all());

        if($pemain ){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/pemain');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemain = Pemain::findOrFail($id);
 
        return view('pemain.show', compact('pemain'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $pemain = pemain::with( ['club','negara'])->findOrFail($id);
        $club = club::where('id','!=',$pemain->id_club)->get(['id','nama']);
        $negara = negara::where('id','!=',$pemain->negara)->get(['id','nama']);
        return view('pemain-edit',['pemain' =>$pemain,'club'=>$club, 'negara'=>$negara]);
    }
    
    public function update(Request $request, $id)
    {
        $pemain = pemain::findOrFail($id);

        $pemain->update($request->all());
        if($pemain){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/pemain');
    }

    public function destroy($id)
    {
        $pemain = pemain::find($id)->delete();

        if($pemain){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('pemain');
    }
}
