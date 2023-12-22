<?php $__env->startSection('pagetitle'); ?>
<?php $__env->startSection('maintitle'); ?>
<?php $__env->startSection('layout_content'); ?>

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Review</h2>

            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div>
                <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mx-auto mb-4" style="width: 50%;">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title text-center"><?php echo e($rev->user->name); ?></h5>
                            <p class="card-text text-center">Rating : <?php echo e($rev['rating']); ?></p>
                            <p class="card-text text-center">Comment : <?php echo e($rev['comment']); ?></p>
                            <p class="card-text text-center">
                                <a href="/review" class="btn btn-primary text-center">Back</a>
                            </p>
                            <p>
                                <?php if(Auth::check() && Auth::user()->isAdmin()): ?>
                                    <form action="<?php echo e(route('review.destroy', $rev->id)); ?>" method="POST"
                                        style="display: inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger justify-center"
                                            onclick="return confirm('Are you sure you want to delete this Review?')">Delete</button>
                                    </form>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if((Auth::check() && Auth::user()->isAdmin()) || (Auth::check() && Auth::user()->isMember())): ?>
                <a href="<?php echo e(route('review.create')); ?>" class="btn btn-success d-grid gap-2">Add Review</a>
            <?php endif; ?>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/review/index.blade.php ENDPATH**/ ?>