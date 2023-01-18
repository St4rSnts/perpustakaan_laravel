

<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header"><?php echo e(__('Halaman Admin')); ?></div>

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
        <?php $__currentLoopData = $perpus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($perp->id); ?> </td>
                <td><?php echo e($perp->nama); ?></td>
                <td><?php echo e($perp->kode); ?></td>
                <td><?php echo e($perp->tgl_lahir); ?></td>
                <td><?php echo e($perp->tmpt_lahir); ?></td>
                <td><?php echo e($perp->judul); ?></td>
                <td><?php echo e($perp->tgl_daftar); ?></td>
                <td>
                    <a href="/perpus/<?php echo e($perp->id); ?>/edit" class="btn btn-primary" >Edit</a>
                    
                    

                    <form method="POST" class="d-inline" onsubmit="return confirm('Yakin Ingin Menghapusnya?')" action="<?php echo e(route('perpus.destroy', [$perp->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas_laravel\resources\views/perpus/index.blade.php ENDPATH**/ ?>