<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />

    <!-- Styles -->
    
    <style>
        html,
        body {
            font-family: 'Open Sans';
            }
    </style>
</head>
<body>
    <div id="app">
        <section class="hero is-fullheight is-default is-bold">
                <div class="hero-head">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-brand">
                                <a style="text-decoration: none" class="navbar-item" href="<?php echo e(url('/')); ?>">
                                    <h1 class="content" style= "font-size: 125%">Laravel Blog</h1>
                                </a>
                                <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                                </span>
                            </div>
                            <div id="navbarMenu" class="navbar-menu">
                                <div class="navbar-end">
                                    <div class="tabs is-right">
                                        <ul>
                                            <?php if(Route::has('login')): ?>
                                                    <?php if(auth()->guard()->check()): ?>
                                                    <li>
                                                        <a style="text-decoration : none" href="<?php echo e(url('/home')); ?>">Home</a>
                                                    </li>
                                                    <li>
                                                                <a  style="text-decoration : none" href="<?php echo e(route('logout')); ?>"
                                                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                <?php echo e(__('Logout')); ?>

                                                                </a>
                                                    </li>
                                                    
                                                    <?php else: ?>
                                                    <li>
                                                        <a style="text-decoration : none" href="<?php echo e(route('login')); ?>">Login</a>
                                                    </li>
                                                    <li>
                                                        <a style="text-decoration : none" href="<?php echo e(route('register')); ?>">Register</a>
                                                    </li>
                                                    <?php endif; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-vcentered">
                        <div class="column is-3"></div>
                        <div class="column is-7">
                            <div class="content">
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        </section>
        
    </div>
</body>
</html>
