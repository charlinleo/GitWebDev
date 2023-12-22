<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center text-black">
        <div class="col-md-8 position-absolute top-50 start-50 translate-middle">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('You are logged in!')); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/home.blade.php ENDPATH**/ ?>