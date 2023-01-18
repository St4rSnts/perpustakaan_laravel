<?php

namespace App\Http\Controllers;

use App\Models\perpus;
use Illuminate\Http\Request;

class PerpusController extends Controller
{
    public function index(){
        $perpus = perpus::all();
        return view('perpus.index',compact(['perpus']));
    }
    public function create()
    {
        return view('perpus.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token','submit'));
        Perpus::create($request->except(['_token','submit']));
        return redirect('/')->with('success', 'Selamat Data Berhasil Disimpan!');
    }
    public function edit($id)
    {
        $perpus = Perpus::find($id);
        return view('perpus.edit',compact(['perpus']));
    }
    public function update($id, Request $request)
    {
        $perpus = Perpus::find($id);
        $perpus->update($request->except(['_token', 'submit']));
        return redirect('/perpus')->with('success', 'Selamat Data Berhasil Diubah!');
    }
    public function destroy($id,Request $request)
    {
        $perpus = perpus::findOrFail($id);
        $perpus->delete();
        return redirect('/perpus')->with('success', 'Selamat Data Berhasil Dihapus!');
        // $perpus = Perpus::where($id)->destroy;
        // // return redirect('/perpus')->with('success', 'Selamat Data Berhasil Dihapus!');
        // return to_route(perpus);
    }
}