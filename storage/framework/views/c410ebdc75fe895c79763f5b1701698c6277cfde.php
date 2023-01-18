
<?php $__env->startSection('content'); ?>
<form action="/perpus/store"method="POST">
    
    <?php echo csrf_field(); ?>
    <div class="container">
        <h1>Form Peminjaman Buku </h1>
        <div class="mb-5">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control"placeholder="masukan nama">
        </div>
        <div class="mb-5">
            <label class="form-label">KODE ANGGOTA</label>
            <input type="text" name="kode" class="form-control"placeholder="kode anggota">
        </div>
        <div class="mb-5">
            <label class="form-label">TANGGAL LAHIR</label>
            <input type="date" name="tgl_lahir" class="form-control"placeholder="tanggal lahir anda">
        </div>
        <div class="mb-5">
            <label class="form-label">TEMPAT LAHIR</label>
            <input type="text" name="tmpt_lahir" class="form-control"placeholder="KOTA KELAHIRAN ANDA">
        </div>
        <div class="mb-5">
            <label class="form-label">JUDUL BUKU</label>
            <input type="text" name="judul" class="form-control"placeholder="JUDUL BUKU YANG DIPINJAM">
        </div>
        <div class="mb-5">
            <label class="form-label">TANGGAL PEMINJAMAN BUKU</label>
            <input type="datetime-local" name="tgl_daftar" class="form-control"placeholder="TANGGAL HARI INI">
        </div>
    </div>
    <button>
            <input type="submit" name="submit" value="Simpan">
    </button>
</form>

<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel\resources\views/perpus/create.blade.php ENDPATH**/ ?>