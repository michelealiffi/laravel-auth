<?php $__env->startSection('content'); ?>
    <section>
        
        <div class="container">
            <div class="projects-list">
                <?php $__currentLoopData = $data['projects']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="project-card">
                        <a href="<?php echo e(route('projects.show', $project->id)); ?>">
                            <div class="image-container">
                                <img src="<?php echo e($project['images'][0]); ?>" alt="Thumb not found">
                            </div>
                            <div class="title-container">
                                <p><?php echo e($project['title']); ?></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\Boolean\laravel\laravel-auth\resources\views/home.blade.php ENDPATH**/ ?>