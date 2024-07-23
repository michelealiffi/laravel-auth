<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Projects</h1>
        <a href="<?php echo e(route('admin.projects.create')); ?>" class="btn btn-primary">Create Project</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($project->title); ?></td>
                        <td><?php echo e($project->description); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.projects.show', $project->slug)); ?>" class="btn btn-info">Show</a>
                            <a href="<?php echo e(route('admin.projects.edit', $project->slug)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('admin.projects.destroy', $project->slug)); ?>" method="POST"
                                style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Workspace\Boolean\laravel\laravel-auth\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>