<?php

namespace App\Http\Controllers;

use App\Barang;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use File;
use Image;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index()
    {
        $barang = Barang::all();
        return view('lihat', compact('barang'));
    }

    public function beranda(){
        $barang = Barang::paginate(20);
        //$user = Auth::user()->id;
        return view('beranda', compact('barang'));
    }

    public function seller(){
        $barang = Barang::paginate(20);
        return view('home', compact('barang'));
    }

    public function manajemenproduk()
    {
        $barang = Barang::where('user_id', Auth::user()->id)->paginate(20);
        return view('manajemenproduk', compact('barang'));
    }

    public function formBarang(){
        return view('tambah');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        //

        $extension = request()->file('gambar')->extension();

        $imgname = date('dmyHis').'.'.$extension;

        $path = Storage::putFileAs('public/Digimoru/gambar', $request->file('gambar'), $imgname);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan,
            'gambar' => $imgname,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/manajemenproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */

    public function show(Barang $barang)
    {
        return view('lihat', compact('barang'));
    }

    public function showBeranda(Barang $barang)
    {
        return view('detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //query select berdasarkan id
         return view('edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Barang $barang)
        {
            $extension = request()->file('gambar')->extension();

            $imgname = date('dmyHis').'.'.$extension;

            $path = Storage::putFileAs('public/Digimoru/gambar', $request->file('gambar'), $imgname);

            Barang::where('id', $barang->id)
                ->update([
                    'nama_barang' => $request->nama_barang,
                    'harga' => $request->harga,
                    'stok' => $request->stok,
                    'keterangan' => $request->keterangan,
                    'gambar' => $imgname,
                ]);
            return redirect('/manajemenproduk');
        }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Barang $barang)
        {

            Barang::destroy($barang->id);
            return redirect('/manajemenproduk');

         //query select berdasarkan id
         //$products = Product::findOrFail($id);

        //mengecek, jika field photo tidak null / kosong
        // if (!empty($barangs->gambar)) {
        // //hapus data dari table
        // $barang->delete();
        // return redirect()->back()->with(['success' => '<strong>' . $barang->nama_barang . '</strong> Telah Dihapus!']);
        // }
    }

    public function cari(Request $request){
        $cari = $request->cari;

        $barang = Barang::where('nama_barang','like',"%".$cari."%")->paginate(20);

        return view('beranda', compact('barang'));
    }

    public function cariHome(Request $request){
        $cari = $request->cari;

        $barang = Barang::where('nama_barang','like',"%".$cari."%")->paginate(20);

        return view('welcome', compact('barang'));
    }
}
