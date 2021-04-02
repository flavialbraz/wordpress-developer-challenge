<?php get_header(); ?>

 
<div class="container">
<div class="row-pages">
 
    <div class="infos-pagina"><span> 
        <div class="titulos"> <h1> <?php single_term_title(); ?></h1> </div>
        <p> <?php the_archive_description( ' ' ); ?> </p></span>
    </div>

    <div class="todos-videos">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="box-video"> 
            <div class="imagem-video"> <?php the_post_thumbnail('full'); ?> </div>
            <div class="duracao"> <span>  <?php the_field('tempo_de_duracao'); ?> </span> </div> 
            <h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </div>
    <?php endwhile?><?php else: ?><?php endif; ?> 
    </div>


</div></div>

