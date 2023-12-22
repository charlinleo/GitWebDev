<?php $__env->startSection('pagetitle'); ?>
<?php $__env->startSection('maintitle'); ?>
<?php $__env->startSection('layout_content'); ?>

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Add Product</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div>
            <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                <form action="<?php echo e(route('service.store')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="form-group">
                        <label for="service_name">Name :</label>
                        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Enter Service Name" required>
                    </div>

                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" id="duration" name="duration" placeholder="Duration" required>
                    </div>

                    <div class="form-group">
                        <label for="service_price">Price :</label>
                        <input type="text" class="form-control" id="service_price" name="service_price" placeholder="Enter Service Price" required>
                    </div>

                    <!-- Add more form fields as needed -->
                    <br>
                    <button type="submit" class="btn btn-primary">Add Service</button>
                </form>
            <?php else: ?>
                <p>You do not have permission to edit this product.</p>
            <?php endif; ?>
        </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/service/create.blade.php ENDPATH**/ ?>