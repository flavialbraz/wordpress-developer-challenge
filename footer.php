<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.min.js"></script>


<script>


$('.slide').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 6,
 responsive: [
 
  {
      breakpoint: 1040,
      settings: {
        centerMode: false,
        slidesToShow: 4
      }
    },
    
    {
      breakpoint: 768,
      settings: {
        centerMode: false,
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: false,
        slidesToShow: 2
      }
    }
  ]
});


$(document).ready(function() {
    $(".menu a").each(function()
    {
        if(this.href==window.location.href)
        {
            $(this).addClass('current');
            $(this).removeAttr('href');
        }
    });
});

</script>

<div class="footer"> 
    <div class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="logo"></div>
    <p>© 2020 — Play — Todos os direitos reservados.</p>
</div>


<?php wp_footer(); ?>


</body>
</html>