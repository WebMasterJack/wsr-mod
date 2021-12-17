<?php

add_action( 'after_setup_theme', 'reg_menu' );
function reg_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

add_action( 'slider', function(){
	echo '<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="http://modb/wp-content/uploads/2021/12/featured-beetle.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="http://modb/wp-content/uploads/2021/12/featured-watch.jpg" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
		  <img src="http://modb/wp-content/uploads/2021/12/featured-guitarman.jpg" class="d-block w-100" alt="...">
		</div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </button>
	</div>
	</div>';
} );
add_action('get_field_image',function(){ //большая картинка для постов

	$image = get_field('image');
	if( !empty( $image ) ): ?>
	
		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>  " width="1080px" height="720px" />
	<?php endif; 
	});
	add_action('get_field_image_large',function(){ //средняя картинка для постов

		$image = get_field('second-image');
		if( !empty( $image ) ): ?>
		
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>  " width="300px" height="300px" />
		<?php endif; 
		});


		add_action( 'eksponat', function(){ //index.php экспонаты
			query_posts("&category_name=eksponat");
		
			 while( have_posts()  ) { the_post(); ?>
			<div class="product">
			<h1><?php the_title(); ?></h1>
		
		<p><?php echo get_field('name');?></p>
		<?php do_action('get_field_image');?>
			
		<br>
		<a href="<?php the_permalink(); ?>">Ссылка</a>
			</div>

			
		
		<?php
			  
		}
		wp_reset_query();
		});







	
add_action( 'eksponats', function($count){ //category-page.php экспонаты
	
	$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
	query_posts("posts_per_page=$count&category_name=eksponat&paged=$paged");

	 while( have_posts()  ) { the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <p><?php echo get_field('name');?></p>
	<?php do_action('get_field_image');?>
	<?php do_action('get_field_image_large');?>
		
	<br>
	<a href="<?php the_permalink(); ?>">Ссылка</a>
	<?php 
	$big = 999999999; // need an unlikely integer
	$args = array(
		'format' => '?paged=%#%',
    	'current' => max( 1, get_query_var('paged') ),
	);
	echo paginate_links($args);
	?>
	<?php do_action('qrcode');
	
	
	?>
	

<?php
	  
}
wp_reset_query();
});


// Теперь, где нужно вывести пагинацию используем
// my_pagenavi();
?>





