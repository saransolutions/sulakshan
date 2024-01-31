<?php 
require_once '../funcs/cons.php';
include("en_home_index_sections.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<?php echo get_head();?>

<body>
	<?php echo before_first_section();?>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
            <?php
		     echo UPPER_HEADER;
			 echo MAIN_HEADER ?>

			
			<?php 
            echo get_first_section();
            echo get_quote();
            echo client_trust();
            echo latest_work_section();
            echo last_section();
            ?>
<?php
echo FOOTER;
?>
<script src="../js/compressed.js"></script>
<script src="../js/main.js"></script>
</body>
</html>