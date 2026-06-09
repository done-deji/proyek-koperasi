

<?php $__env->startSection('content'); ?>

<h2>Data Simpanan</h2>

<a href="<?php echo e(route('simpanan.create')); ?>" class="btn btn-primary mb-3">
    Tambah Simpanan
</a>

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Tanggal</th>
            <th>Jenis Simpanan</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        <?php $__currentLoopData = $simpanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $simpanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>

            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($simpanan->anggota->nama); ?></td>
            <td><?php echo e($simpanan->tanggal); ?></td>
            <td><?php echo e($simpanan->jenis_simpanan); ?></td>
            <td>Rp <?php echo e(number_format($simpanan->jumlah,0,',','.')); ?></td>

            <td>

                <a href="<?php echo e(route('simpanan.edit',$simpanan->id)); ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="<?php echo e(route('simpanan.destroy',$simpanan->id)); ?>" method="POST" style="display:inline">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\koperasi\resources\views/simpanan/index.blade.php ENDPATH**/ ?>