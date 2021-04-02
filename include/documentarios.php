
<div class="contai-home"> 
<div class="slide"> 
<?php $args = array( 'posts_per_page' => -1,'post_type' => 'videos', 'taxonomy' => 'cate', 'term' => 'documentarios' ); 
 $myposts = get_posts( $args ); foreach ( $myposts as $post ):?> 
 
 <div class="box-todos-videos"> <div class="box-videos">  
    <div class="imagem-video"> <?php the_post_thumbnail('full'); ?> </div>
    <div class="duracao"> <span>  <?php the_field('tempo_de_duracao'); ?> </span> </div> 
    <h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </div></div>
<?php endforeach; ?>
</div></div>
