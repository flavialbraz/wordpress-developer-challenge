<?php get_header(); ?>
 
<div class="container"> <div class="row-single"> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="elementos-single">
        <div class="categorias"><span><?php echo get_the_term_list( get_the_ID(), 'cate', '' ); ?></span></div> 
        <div class="duracao"> <span><?php the_field('tempo_de_duracao'); ?></span></div> 
        <h1> <?php the_title(); ?> </h1>
</div>

<?php the_field('video'); ?>

<div class="elementos-single"><?php the_field('sinopse'); ?></div>
 
<?php endwhile?><?php else: ?><?php endif; ?> 



</div> </div>
<?php get_footer(); ?>