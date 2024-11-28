<?php

use proyecto\app\utils\Utils;
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"><img src="../../public/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (utils::esOpcionMenuActiva('/') == true || utils::esOpcionMenuActiva('/') == true)
                    echo '<li class="nav-item active">';
                else echo '<li class=”nav-item>'; ?>
                <a href="/" class="nav-link"> Home</a>

                <?php if (utils::esOpcionMenuActiva('/about') == true)
                    echo '<li class="active lien">';
                else echo '<li class=”0lien”>'; ?>
                <a href="/about" class="nav-link"> About</a>

                <?php if (utils::esOpcionMenuActiva('/blog') == true)
                    echo '<li class="active lien">';
                else echo '<li class=”0lien”>'; ?>
                <a href="/blog" class="nav-link"> Blog</a>

                <?php if (utils::esOpcionMenuActiva('/contact') == true)
                    echo '<li class="active lien">';
                else echo '<li class=”0lien”>'; ?>
                <a href="/contact" class="nav-link"> Contact</a>

                <?php if (utils::esOpcionMenuActiva('/coffees') == true)
                    echo '<li class="active lien">';
                else echo '<li class=”0lien”>'; ?>
                <a href="/coffees" class="nav-link"> Coffees</a>

                <?php if (is_null($app['user'])) : ?>
                    <?php if (Utils::esOpcionMenuActiva('/login') == true) echo '<li class="active lien">';
                    else echo '<li class=" lien">'; ?>
                    <a href="/login" class="nav-link"> Login</a></li>

                    <li class="<?= Utils::esOpcionMenuActiva('/registro') ? 'active' : '' ?> lien">
                        <a href="<?= Utils::esOpcionMenuActiva('/registro') ? '#' : '/registro' ?>" class="nav-link">
                            Register</a>
                    </li>
                <?php else : ?>

                    <?php if ($app['user']->getRole() === 'ROLE_ADMIN') : ?>
                        <?php if (utils::esOpcionMenuActiva('/users') == true)
                            echo '<li class="active lien">';
                        else echo '<li class=”0lien”>'; ?>
                        <a href="/users" class="nav-link"> Users</a>

                        <?php if (utils::esOpcionMenuActiva('/galeria') == true)
                            echo '<li class="active lien">';
                        else echo '<li class=”0lien”>'; ?>
                        <a href="/galeria" class="nav-link"> Upload</a>

                        <?php if (utils::esOpcionMenuActiva('/profile') == true)
                            echo '<li class="active lien">';
                        else echo '<li class=”0lien”>'; ?>
                        <a href="/profile" class="nav-link"> Profile</a>

                        <?php if (Utils::esOpcionMenuActiva('/logout') == true) echo '<li class="active lien">';
                        else echo '<li class=" lien">'; ?>
                        <a href="/logout" class="nav-link"> Logout</a></li>

                    <?php else : ?>
                        <?php if (utils::esOpcionMenuActiva('/galeria') == true)
                            echo '<li class="active lien">';
                        else echo '<li class=”0lien”>'; ?>
                        <a href="/galeria" class="nav-link"> Upload</a>

                        <?php if (utils::esOpcionMenuActiva('/profile') == true)
                            echo '<li class="active lien">';
                        else echo '<li class=”0lien”>'; ?>
                        <a href="/profile" class="nav-link"> Profile</a>

                        <?php if (Utils::esOpcionMenuActiva('/logout') == true) echo '<li class="active lien">';
                        else echo '<li class=" lien">'; ?>
                        <a href="/logout" class="nav-link"> Logout</a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>