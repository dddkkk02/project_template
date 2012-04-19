<?php echo View::factory('header');?>
<div id="container">

<?php if(isset($page_components['nav'])){
	echo View::factory($page_components['nav']);
}?>
<?php echo View::factory($content);?>

</div>
<?php echo View::factory('footer');?>

