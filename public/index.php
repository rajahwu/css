<?php
include_once('../private/initialize.php');
include(SHARED_PATH . '/header.php');
?>
<div class="hero min-h-screen" style="background-image: url(./assets/images/bg-hero.jpg);">
    <div class="hero-overlay bg-opacity-60"></div>

    <div class=" text-yellow-300 hero-content text-center bg-gray-900 opacity-90 rounded-xl">
        <h1 class="text-3xl">CSS Traning</h1>
        <div class="divider sm:divider-horizontal bg-white w-1"></div> 
        <div class="w-64  text-yellow-100">
            <h2 class="text-xl  text-yellow-400">Training Modules</h2>
            <div class="flex">
                <div>
                    <a class="btn btn-ghost" href="../training_modules/css_core_concepts/">css core concepts</a>
                    <a class="btn btn-ghost" href="../training_modules/css_core_concepts/">css box model</a>
                    <a class="btn btn-ghost" href="../training_modules/css_core_concepts/">typography</a>
                </div>
                <div>
                    <a class="btn btn-ghost" href="../training_modules/css_core_concepts/">floats and position</a>
                    <a class="btn btn-ghost" href="../training_modules/css_core_concepts/">flexbox and grid</a>
                    <a class="btn btn-ghost" href="../training_modules/css_core_concepts/">fluid and responsive</a>
                </div>
            </div>
        </div>
        
        <div class="navbar">
            <div class="flex flex-col">
                <a class="btn btn-ghost normal-case text-xl  text-yellow-400" href="../personal-site/" target="blank">Course Project Site</a>
                <img class="rounded-xl" width="150" height="250" src="./assets/images/course-site-project.jpg" srcset="./assets/images/course-site-project.jpg 2x" alt="">
                <a class="btn btn-ghost normal-case" href="./links.php" target="_blank">Resource Links</a>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/footer.php'); ?>