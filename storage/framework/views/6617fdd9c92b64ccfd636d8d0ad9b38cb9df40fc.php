

<?php $__env->startSection('title',$message->title); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($message->title); ?> </h1>

    <p><?php echo e($message->content); ?> </p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DipMan\Codes\phpLaravel\messageboard\resources\views/message.blade.php ENDPATH**/ ?>