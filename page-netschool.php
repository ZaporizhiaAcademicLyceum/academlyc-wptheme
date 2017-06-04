<?php get_header(); ?>

<?php
$url = ($_SERVER['REMOTE_ADDR'] == '178.151.205.106') ? 'http://192.168.0.52/login.asp' : 'http://178.151.205.106:70/login.asp';
?>

<iframe src="<?php echo $url; ?>" width="100%" height="100%"></iframe>

<?php get_footer(); ?>
