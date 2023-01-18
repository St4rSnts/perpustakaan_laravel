@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Halaman Admin') }}</div>
                <div class="card-body">

                <h1>Ubah Data</h1>
                <form action="/perpus/{{$perpus->id}}" method="POST">
                    {{-- memodifikasi method --}}
                    @method('put')
                    {{--  token biar tidak error 419 --}}
                    @csrf
                    <div class="mb-5">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control"placeholder="masukan nama" value=" {{$perpus->nama}} " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Kode Anggota</label>
                        <input type="text" name="kode" class="form-control"placeholder="kode anggota" value=" {{$perpus->kode}} " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="text" name="tgl_lahir" class="form-control"placeholder="tanggal lahir anda" value=" {{$perpus->tgl_lahir}} " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" name="tmpt_lahir" class="form-control"placeholder="kota kelahiran anda" value=" {{ $perpus->tmpt_lahir }} " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-control"placeholder="judul buku yang anda pinjam" value=" {{ $perpus->judul }} " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">Tanggal Peminjaman Buku</label>
                        <input type="text" name="tgl_daftar" class="form-control"placeholder="tanggal hari ini" value="{{$perpus->tgl_daftar}}" >
                    </div>
                    <div class="mb-5">
                        <button class="btn btn-primary" type="submit" name="submit">Update
                        </button>
                    </div>
                    </form>
                </td>
            </tr>
    </table>
    </div>
</div>
@endsection