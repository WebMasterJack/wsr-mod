<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
</head>
<body>
<header>
<div id="menu-custom-menu">
<?php wp_nav_menu();?>
</div>

</header>
<?php do_action('slider');?>




<div id="museum" class="container">
<?php 

query_posts("category_name=museum");
	 while( have_posts()  ) { the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <p><?php the_content(); ?></p>
	
<?php }
wp_reset_query();?>
</div>
<div id="eksponat" class="container">
<?php do_action('eksponat');
?>

</div>
<div id="contacts" class="container">
<h1>Контакты</h1>
<p>Номера телефонов:</p>
<p>Адрес музея:</p>
<p>Время работы:</p>
<h2>Форма заявки</h2>
<?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]')?>
</div>

<div class="container" id="map">
	<div class="map"></div>
	
</div>


<footer>
	<?php get_footer();?>
</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>