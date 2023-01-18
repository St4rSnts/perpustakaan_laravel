
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Halaman Admin')); ?></div>
                <div class="card-body">

                <h1>Ubah Data</h1>
                <form action="/perpus/<?php echo e($perpus->id); ?>" method="POST">
                    
                    <?php echo method_field('put'); ?>
                    
                    <?php echo csrf_field(); ?>
                    <div class="mb-5">
                        <label class="form-label">NAMA</label>
                        <input type="text" name="nama" class="form-control"placeholder="masukan nama" value=" <?php echo e($perpus->nama); ?> " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">KODE ANGGOTA</label>
                        <input type="text" name="kode" class="form-control"placeholder="kode anggota" value=" <?php echo e($perpus->kode); ?> " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">TANGGAL LAHIR</label>
                        <input type="text" name="tgl_lahir" class="form-control"placeholder="tanggal lahir anda" value=" <?php echo e($perpus->tgl_lahir); ?> " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">TEMPAT LAHIR</label>
                        <input type="text" name="tmpt_lahir" class="form-control"placeholder="kota kelahiran anda" value=" <?php echo e($perpus->tmpt_lahir); ?> " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">JUDUL BUKU YANG DIPINJAM</label>
                        <input type="text" name="judul" class="form-control"placeholder="judul buku yang anda pinjam" value=" <?php echo e($perpus->judul); ?> " >
                    </div>
                    <div class="mb-5">
                        <label class="form-label">TANGGAL PEMINJAMAN BUKU</label>
                        <input type="text" name="tgl_daftar" class="form-control"placeholder="tanggal hari ini" value="<?php echo e($perpus->tgl_daftar); ?>" >
                    </div>
                    <div class="mb-5">
                        <input type="submit" name="submit" value="Update">
                    </div>
                    </form>
                </td>
            </tr>
    </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel\resources\views/perpus/edit.blade.php ENDPATH**/ ?>