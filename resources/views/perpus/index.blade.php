@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ __('Halaman Admin') }}</div>

                <div class="card-body">

                    
<div class="container">

    <a class="btn btn-primary" href="/perpus/create">tambah data</a>
    <table class="table table-hover">
        <tr>
            <td>ID</td>
            <td>NAMA</td>
            <td>KODE</td>
            <td>TGL LAHIR</td>
            <td>TEMPAT LAHIR</td>
            <td>JUDUL BUKU</td>
            <td>TANGGAL PEMINJAMAN</td>
            <td>AKSI</td>
        </tr>
        @foreach($perpus as $perp)
            <tr>
                <td>{{$perp->id}} </td>
                <td>{{$perp->nama}}</td>
                <td>{{$perp->kode}}</td>
                <td>{{$perp->tgl_lahir}}</td>
                <td>{{$perp->tmpt_lahir}}</td>
                <td>{{$perp->judul}}</td>
                <td>{{$perp->tgl_daftar}}</td>
                <td>
                    <a href="/perpus/{{$perp->id}}/edit" class="btn btn-primary" >Edit</a>
                    
                    {{-- <form action="/perpus/{{$perp->id}}" method="POST">
                        @csrf
                        @method ('DELETE')
                        <input type="submit" value="Hapus" onclick="confirm('Anda yakin ingin menghapusnya?')">
                    </form>  --}}

                    <form method="POST" class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapusnya?')" action="{{route('perpus.destroy', [$perp->id])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
