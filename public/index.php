<?php
include_once('../private/initialize.php');
include(SHARED_PATH . '/header.php');
?>
<div class="hero min-h-screen" style="background-image: url(./assets/images/bg-hero.jpg);">
    <div class="hero-overlay bg-opacity-60"></div>

    <div class=" text-yellow-300 hero-content text-center bg-gray-900 opacity-90 rounded-xl">
        <h1 class="text-3xl">CSS Traning</h1>

        <div class="w-64  text-yellow-100">
            <h2 class="text-xl  text-yellow-400">Training Modules</h2>
            <a class="btn btn-ghost" href="../training_modules/css_core_concepts/">css core concepts</a>
        </div>

        <div class="navbar">
            <a class="btn btn-ghost normal-case text-2xl" href="../personal-site/" target="blank">Course Project Site</a>
            <a class="btn btn-ghost normal-case text-xl" href="./links.php" target="_blank">Links</a>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/footer.php'); ?>