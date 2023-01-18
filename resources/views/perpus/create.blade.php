@extends('layout.master')
@section('content')
<form action="/perpus/store"method="POST">
    {{--  token biar tidak error 419 --}}
    @csrf
    <div class="container">
        <h1>Form Peminjaman Buku</h1>
        <div class="mb-5">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control"placeholder="Masukan Nama" required="required">
        </div>
        <div class="mb-5">
            <label class="form-label">Kode Angggota</label>
            <input type="text" name="kode" class="form-control"placeholder="kode anggota" equired="required">
        </div>
        <div class="mb-5">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control"placeholder="Tanggal Lahir" equired="required">
        </div>
        <div class="mb-5">
            <label class="form-label">Tempat Lahir</label>
            <input type="text" name="tmpt_lahir" class="form-control"placeholder="Tempat Lahir" equired="required">
        </div>
        <div class="mb-5">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control"placeholder="Judul Buku" equired="required">
        </div>
        <div class="mb-5">
            <label class="form-label">Tanggal Pinjam buku</label>
            <input type="datetime-local" name="tgl_daftar" class="form-control"placeholder="Tanggal dan Waktu Pinjam" equired="required">
        </div>
    </div>
    <button>
            <input type="submit" name="submit" value="Simpan">
    </button>
</form>

@include('sweetalert::alert')
@endsection