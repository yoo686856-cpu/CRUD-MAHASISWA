<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Data Mahasiswa')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <?php if(session('success')): ?>
                    <div class="mb-4 px-4 py-2 rounded bg-green-100 text-green-700 text-sm">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                    <form method="GET" action="<?php echo e(route('mahasiswa.index')); ?>" class="flex gap-2">
                        <input
                            type="text"
                            name="q"
                            value="<?php echo e($keyword); ?>"
                            placeholder="Cari NIM / Nama..."
                            class="border-gray-300 rounded-md shadow-sm text-sm focus:border-indigo-500 focus:ring-indigo-500"
                        >
                        <button type="submit" class="px-3 py-2 bg-gray-200 rounded-md text-sm hover:bg-gray-300">
                            Cari
                        </button>
                    </form>

                    <a href="<?php echo e(route('mahasiswa.create')); ?>"
                       class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">
                        + Tambah Mahasiswa
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">NIM</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Nama Mahasiswa</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Program Studi</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                                <th class="px-4 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">No. HP</th>
                                <th class="px-4 py-3 text-center font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php $__empty_1 = true; $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="px-4 py-3"><?php echo e($mahasiswas->firstItem() + $index); ?></td>
                                    <td class="px-4 py-3"><?php echo e($mhs->nim); ?></td>
                                    <td class="px-4 py-3"><?php echo e($mhs->nama_mahasiswa); ?></td>
                                    <td class="px-4 py-3"><?php echo e($mhs->program_studi); ?></td>
                                    <td class="px-4 py-3"><?php echo e($mhs->jenis_kelamin); ?></td>
                                    <td class="px-4 py-3"><?php echo e($mhs->nomor_hp); ?></td>
                                    <td class="px-4 py-3">
                                        <div class="flex justify-center gap-2">
                                            <a href="<?php echo e(route('mahasiswa.show', $mhs)); ?>"
                                               class="px-3 py-1 rounded bg-gray-100 text-gray-700 hover:bg-gray-200 text-xs">
                                                Detail
                                            </a>
                                            <a href="<?php echo e(route('mahasiswa.edit', $mhs)); ?>"
                                               class="px-3 py-1 rounded bg-yellow-100 text-yellow-700 hover:bg-yellow-200 text-xs">
                                                Edit
                                            </a>
                                            <form action="<?php echo e(route('mahasiswa.destroy', $mhs)); ?>" method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus data <?php echo e($mhs->nama_mahasiswa); ?>?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"
                                                        class="px-3 py-1 rounded bg-red-100 text-red-700 hover:bg-red-200 text-xs">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    <?php echo e($mahasiswas->links()); ?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>