

<?php $__env->startSection('content'); ?>

<h2>Tambah Simpanan</h2>

<form action="<?php echo e(route('simpanan.store')); ?>" method="POST">

    <?php echo csrf_field(); ?>

    <div class="mb-3">
        <label>Anggota</label>

        <select name="anggota_id" class="form-control">

            <?php $__currentLoopData = $anggotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <option value="<?php echo e($anggota->id); ?>">
                    <?php echo e($anggota->nama); ?>

                </option>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </select>

    </div>

    <div class="mb-3">

        <label>Tanggal</label>

        <input type="date" name="tanggal" class="form-control">

    </div>

    <div class="mb-3">

        <label>Jenis Simpanan</label>

        <input type="text" name="jenis_simpanan" class="form-control">

    </div>

    <div class="mb-3">

        <label>Jumlah</label>

        <input type="number" name="jumlah" class="form-control">

    </div>

    <button class="btn btn-primary">

        Simpan

    </button>

    <a href="<?php echo e(route('simpanan.index')); ?>" class="btn btn-secondary">

        Kembali

    </a>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\koperasi\resources\views/simpanan/create.blade.php ENDPATH**/ ?>