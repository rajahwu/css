<?php
include_once('../training_module_init.php'); 
include('./shared/training_card_css.php');
render_lesson_content(strtoupper("css core concepts"), "./note");
echo '</ul></div>'; ?>
<?php include(SHARED_PATH . '/footer.php');
?>