<?php $__env->startSection('pagetitle'); ?>
<?php $__env->startSection('maintitle'); ?>
<?php $__env->startSection('layout_content'); ?>

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Service</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="d-flex flex-wrap">
                <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mx-auto p-2 mb-4" style="width: 25rem;">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title text-center"><?php echo e($ser['service_name']); ?></h5>
                            <p class="card-subtitle">Durasi :</p>
                            <p class="card-text text-center"><?php echo e($ser['duration']); ?></p>
                            <p class="card-subtitle">Harga Service :</p>
                            <p class="card-text text-center"><?php echo e($ser['service_price']); ?></p>
                            <p class="card-text">
                                <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                                    <form action="<?php echo e(route('service.destroy', $ser->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('service.edit', [$ser->id])); ?>"
                                            class="btn btn-warning text-white">Edit</a>
                                        <button type="submit" class="btn btn-danger justify-center"
                                            onclick="return confirm('Are you sure you want to delete this Service?')">Delete</button>
                                    </form>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                <a href="<?php echo e(route('service.create')); ?>" class="btn btn-success d-grid gap-2 col-6 mx-auto" style="width: 90%">Add Service</a>
            <?php endif; ?>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/service/index.blade.php ENDPATH**/ ?>