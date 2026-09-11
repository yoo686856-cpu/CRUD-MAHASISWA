<?php
    $mhs = $mahasiswa ?? null;
?>

<?php if($errors->any()): ?>
    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
        <ul class="list-disc list-inside text-sm">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div>
    <label class="block text-sm font-medium text-gray-700">NIM</label>
    <input type="text" name="nim" value="<?php echo e(old('nim', $mhs->nim ?? '')); ?>"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" value="<?php echo e(old('nama_mahasiswa', $mhs->nama_mahasiswa ?? '')); ?>"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="<?php echo e(old('tempat_lahir', $mhs->tempat_lahir ?? '')); ?>"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir"
               value="<?php echo e(old('tanggal_lahir', isset($mhs->tanggal_lahir) ? $mhs->tanggal_lahir->format('Y-m-d') : '')); ?>"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki" <?php echo e(old('jenis_kelamin', $mhs->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki</option>
        <option value="Perempuan" <?php echo e(old('jenis_kelamin', $mhs->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : ''); ?>>Perempuan</option>
    </select>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Alamat</label>
    <textarea name="alamat" rows="3"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required><?php echo e(old('alamat', $mhs->alamat ?? '')); ?></textarea>
</div>

<div>
    <label class="block text-sm font-medium text-gray-700">Program Studi</label>
    <input type="text" name="program_studi" value="<?php echo e(old('program_studi', $mhs->program_studi ?? '')); ?>"
           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Nomor HP</label>
        <input type="text" name="nomor_hp" value="<?php echo e(old('nomor_hp', $mhs->nomor_hp ?? '')); ?>"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" value="<?php echo e(old('email', $mhs->email ?? '')); ?>"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
    </div>
</div><?php /**PATH C:\xampp\htdocs\example-app\resources\views/mahasiswa/_form.blade.php ENDPATH**/ ?>