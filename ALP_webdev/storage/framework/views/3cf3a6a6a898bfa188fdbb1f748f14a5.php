<?php $__env->startSection('pagetitle'); ?>
<?php $__env->startSection('maintitle'); ?>
<?php $__env->startSection('layout_content'); ?>

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Edit Service</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                <form action="<?php echo e(route('service.update', ['service' => $service->id])); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <label for="service_name">Name :</label>
                        <input type="text" class="form-control" id="service_name" name="service_name"
                            value="<?php echo e($service->service_name); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration : </label>
                        <textarea class="form-control" id="duration" name="duration" rows="3" required><?php echo e($service->duration); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="product_price">Price : </label>
                        <input type="text" class="form-control" id="service_price" name="service_price"
                            value="<?php echo e($service->service_price); ?>" required>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Update Service</button>
                </form>
            <?php else: ?>
                <p>You do not have permission to edit this product.</p>
            <?php endif; ?>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/service/edit.blade.php ENDPATH**/ ?>