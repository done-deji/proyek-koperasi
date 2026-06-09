

<?php $__env->startSection('content'); ?>

<h2>Data Anggota</h2>

<a href="<?php echo e(route('anggota.create')); ?>" class="btn btn-primary mb-3">
    Tambah Anggota
    
</a>
<form method="GET" action="<?php echo e(route('anggota.index')); ?>">

    <div class="row mb-3">

        <div class="col-md-4">

            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Cari nama atau ID anggota"
                value="<?php echo e(request('search')); ?>">

        </div>

        <div class="col-md-2">

            <button type="submit" class="btn btn-success">
                Cari
            </button>

        </div>

    </div>

</form>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>No</th>
            <th>ID Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        <?php $__currentLoopData = $anggotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($anggota->id_anggota); ?></td>
            <td><?php echo e($anggota->nama); ?></td>
            <td><?php echo e($anggota->alamat); ?></td>
            <td><?php echo e($anggota->no_telp); ?></td>

            <td>

                <a href="<?php echo e(route('anggota.edit', $anggota->id)); ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="<?php echo e(route('anggota.destroy', $anggota->id)); ?>" method="POST" style="display:inline;">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\koperasi\resources\views/anggota/index.blade.php ENDPATH**/ ?>