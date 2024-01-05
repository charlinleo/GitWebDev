<?php $__env->startSection('pagetitle'); ?>
<?php $__env->startSection('maintitle'); ?>
<?php $__env->startSection('layout_content'); ?>

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 mt-5 pt-5">Add Review</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div>
            <?php if(Auth::check() && Auth::user()->isAdmin() || Auth::check() && Auth::user()->isMember()): ?>
                <form action="<?php echo e(route('review.store')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="form-group">
                        <label for="user_id">User :</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            <option value="" disabled>Select User</option>
                            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($usr->id); ?>" <?php echo e($usr->id == $currentUserId ? 'selected' : ''); ?>>
                                    <?php echo e($usr->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating :</label>
                        <input type="text" class="form-control" id="rating" name="rating" placeholder="Enter Rating" required>
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment :</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Enter Comment" required></textarea>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Add Review</button>
                </form>
            <?php else: ?>
                <p>You do not have permission to edit this review.</p>
            <?php endif; ?>
        </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/charlinleo/Documents/Laravel/webdev/GitWebDev/ALP_webdev/resources/views/review/create.blade.php ENDPATH**/ ?>