

<?php $__env->startSection('title','Homepage'); ?>

<?php $__env->startSection('content'); ?>
<h1>John Cena</h1>

<h2>Post new message :</h2>

<form action="/create" method='post'>
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    <?php echo e(csrf_field()); ?>

    <button type="submit">Post</button>
</form>

<h3>Recent Messages</h3>

<ul>
    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <strong> <?php echo e($message->title); ?> </strong>
            <br>
            <?php echo e($message->content); ?>

            <br>
            <a href="/message/<?php echo e($message->id); ?>">View</a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DipMan\Codes\phpLaravel\larainsta\resources\views/home.blade.php ENDPATH**/ ?>