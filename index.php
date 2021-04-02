<?php get_header(); ?>
 
 <?php $args = array( 'posts_per_page' => 1,'post_type' => 'videos'); $myposts = get_posts( $args ); foreach ( $myposts as $post ):?> 
        <div class="imagem-topo"><?php the_post_thumbnail('full'); ?> 
        <div class="elementos-topo">
 
        <div class="categorias"> <span>   <?php echo get_the_term_list( get_the_ID(), 'cate', '' ); ?> </span> </div> 
        <div class="duracao"> <span>  <?php the_field('tempo_de_duracao'); ?> </span> </div> 
        <h1> <?php the_title(); ?> </h1>
        <a href="<?php the_permalink(); ?>"><button> Mais informações </button></a>
        <?php endforeach; ?>

        </div></div>
 

 
<div class="container"> <div class="titulos"> <h1> Filmes </h1> </div></div>
   <?php get_template_part( 'include/filmes' ); ?> 


<div class="container"> <div class="titulos"> <h1> Documentários </h1> </div></div>
 <?php get_template_part( 'include/documentarios' ); ?>  



<div class="container"> <div class="titulos"> <h1> Séries </h1> </div></div>
 <?php get_template_part( 'include/series' ); ?> 

 

  
<?php get_footer(); ?>