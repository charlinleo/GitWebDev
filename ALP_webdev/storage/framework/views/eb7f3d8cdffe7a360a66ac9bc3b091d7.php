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
                <form action="<?php echo e(route('product.store')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="form-group">
                        <label for="product_name">Name :</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" required>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category:</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <option value="" selected>Select Category</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>">
                                    <?php echo e($category->category_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="product_desc" name="product_desc" rows="3" placeholder="Enter Product Description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price :</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price" required>
                    </div>

                    <!-- Add more form fields as needed -->
                    <br>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            <?php else: ?>
                <p>You do not have permission to edit this product.</p>
            <?php endif; ?>
        </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/product/create.blade.php ENDPATH**/ ?>