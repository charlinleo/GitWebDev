<?php $__env->startSection('pagetitle'); ?>
<?php $__env->startSection('maintitle'); ?>
<?php $__env->startSection('layout_content'); ?>

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Product</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="d-flex flex-wrap">
                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mx-auto p-2 mb-4" style="width: 25rem;">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title text-center fw-bolder"><?php echo e($pro['product_name']); ?></h5>
                            <p class="card-text text-center">Kategori :</p>
                            <p class="card-text text-center fw-bold"><?php echo e($pro->category->category_name); ?></p>
                            <p class="card-text text-center">Harga Products :</p>
                            <p class="card-text text-center fw-bold"><?php echo e($pro['product_price']); ?>/pcs</p>
                            <p class="card-text text-center">Deskripsi :</p>
                            <p class="card-text text-break text-center fw-bold"><?php echo e($pro['product_desc']); ?></p>
                            <img src="<?php echo e(asset('img/' . $pro['product_image'])); ?>" alt="<?php echo e($pro['product_name']); ?> Image" style="width: 200px; height: 200px;" class="rounded mx-auto d-block">
                            <p class="card-text ">
                                <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                                    <form action="<?php echo e(route('product.destroy', $pro->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <a href="<?php echo e(route('product.edit', [$pro->id])); ?>"
                                            class="btn btn-warning text-white">Edit</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
            <a href="<?php echo e(route('product.create')); ?>" class="btn btn-success d-grid gap-2 col-6 mx-auto"
                style="width: 50%">Add Product</a>
        <?php endif; ?>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/product/index.blade.php ENDPATH**/ ?>