<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title><?php echo e($title ?? 'Todo'); ?></title>
    </head>
    <body>
        <div class="container">
            <?php echo e($slot); ?>

        </div>
    </body>
</html>
<?php /**PATH C:\wamp64\www\todo-app\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>