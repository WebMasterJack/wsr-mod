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

add_action( 'eksponats', function($count){
	query_posts("showposts=$count&category_name=eksponat");
	 while( have_posts()  ) { the_post(); ?>
    <h1><?php the_title(); ?></h1>

    <p><?php the_content(); ?></p>
	<a href="<?php the_permalink(); ?>">ссылка</a>
	<?php echo paginate_links();?>
	
<?php
	  the_posts_pagination();
}
wp_reset_query();
});


// Теперь, где нужно вывести пагинацию используем
// my_pagenavi();
?>





