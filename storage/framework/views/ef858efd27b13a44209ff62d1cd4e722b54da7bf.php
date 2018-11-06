<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <title>Auth_App</title>

    </head>
    <body>
        <div id='app'></div>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>
