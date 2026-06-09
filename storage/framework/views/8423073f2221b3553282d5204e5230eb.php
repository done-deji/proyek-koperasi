

<?php $__env->startSection('content'); ?>

<h2>Data Pinjaman</h2>

<a href="<?php echo e(route('pinjaman.create')); ?>" class="btn btn-primary mb-3">
    Tambah Pinjaman
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
            <th>Tanggal Pinjaman</th>
            <th>Jumlah Pinjaman</th>
            <th>Lama Angsuran</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php $__currentLoopData = $pinjamans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pinjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>

            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($pinjaman->anggota->nama); ?></td>
            <td><?php echo e($pinjaman->tanggal_pinjaman); ?></td>
            <td>Rp <?php echo e(number_format($pinjaman->jumlah_pinjaman,0,',','.')); ?></td>
            <td><?php echo e($pinjaman->lama_angsuran); ?> Bulan</td>

            <td>

                <a href="<?php echo e(route('pinjaman.edit',$pinjaman->id)); ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="<?php echo e(route('pinjaman.destroy',$pinjaman->id)); ?>" method="POST" style="display:inline">

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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\koperasi\resources\views/pinjaman/index.blade.php ENDPATH**/ ?>