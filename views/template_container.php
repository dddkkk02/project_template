<?php echo View::factory('header');?>
<?php echo View::factory('common/nav', $ctl->get_template_data('common/nav'));?>


<div class="container">
<?php echo View::factory('common/page_top', $ctl->get_template_data('common/page_data')); ?>
<?php echo View::factory($content, $ctl->get_template_data($content));?>

</div>
<?php echo View::factory('footer');?>

