

<?php $__env->startSection('content'); ?>

<h2>Tambah Anggota</h2>

<form action="<?php echo e(route('anggota.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label>ID Anggota</label>
        <input type="text" name="id_anggota" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>No Telepon</label>
        <input type="text" name="no_telp" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="<?php echo e(route('anggota.index')); ?>" class="btn btn-secondary">
        Kembali
    </a>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\koperasi\resources\views/anggota/create.blade.php ENDPATH**/ ?>