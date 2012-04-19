<!DOCTYPE HTML>
<html lang="zh_cn">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
if(!empty($site_keywords)){ ?>
<meta name="keywords" content="<?php echo $site_keywords;?>"></meta>
<?php } ?>

<?php if(!empty($site_description)){?>
<meta name="description" content="<?php echo $site_description;?>"></meta>
<?php } ?>

<?php if(!empty($site_js)){?>
	<?php foreach($site_js as $js_src) {?>
<script type="text/javascript" src="<?php echo Url::base().$js_path.$js_src;?>"></script>
	<?php }?>
<?php } ?>
<?php if(!empty($site_css)){?>
	<?php foreach($site_css as $css_src) {?>
<link rel="stylesheet" href="<?php echo Url::base().$css_path.$css_src;?>" type="text/css" media="screen"/>
	<?php }?>
<?php } ?>

<title><?php echo $page_title;?></title>

</head>
<body>

