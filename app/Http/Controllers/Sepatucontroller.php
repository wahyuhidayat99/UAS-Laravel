<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\pemain;
use App\Models\sepatu;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sepatu = sepatu::with(['pemain'])->get();
        return view('sepatu', ['listsepatu' =>$sepatu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemain = pemain::all();

        return view('sepatu-add', compact('pemain'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sepatu=sepatu::create($request->all());

        if($sepatu ){
            Session::flash('status','Sukses');
            Session::flash('message','Penambahan data Berhasil');
        }
        return redirect('/sepatu');
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
        $sepatu = sepatu::with( ['pemain'])->findOrFail($id);
        return view('sepatu-edit',['sepatu' =>$sepatu,]);
    }
    
    public function update(Request $request, $id)
    {
        $sepatu = sepatu::findOrFail($id);

        $sepatu->update($request->all());
        if($sepatu){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil DiEdit');
        }
        return redirect('/sepatu');
    }

    public function destroy($id)
    {
        $sepatu = sepatu::find($id)->delete();

        if($sepatu){
            Session::flash('status','success');
            Session::flash('message','Data Berhasil Dihapus');
        }
        return redirect('sepatu');
    }
}
