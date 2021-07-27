<?php
/*
* Template Name: Blog
*/

get_header();

?>
 <section class="blogMainImg">
        <div class="fixed-container">
            <span class="color-white"><a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block"></a><span class="color-white">&nbsp;/&nbsp;</span><a href="#" class="breadnext">блог</a></span>

            <h1 class="buyMainImg__heading">блог</h1>
        </div>
    </section>    

<main class="pageNews">
        <div class="fixed-container">
        <?php
           $news = $query = new WP_Query( array(
			         'post_type' => 'post',
			         'posts_per_page' => -1,
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
           
           
            
            <article class="newsOne flex-start-between">
                <figure class="newsOne__image">
                    <img src="<?php echo the_post_thumbnail_url('offers-thumbnail'); ?>" class="news__img" alt="Картинка участка">                        
                </figure>

                <div class="newsOne__contain">
                    <div class="newsOne__subHeadContain flex-start-between">
                        <h4 class="newsOne__heding"><?php echo get_the_title(); ?></h4>

                        <p class="buyOne__date newsOne__date"><?php echo get_the_date(); ?></p>
                    </div>                    

                    <p class="newsOne__text"><?php echo get_the_excerpt(); ?>   
                    </p>         

                    <a href="<?php echo get_the_permalink(); ?>" class="buyOne__link newsOne__link">читать далее</a>                        
                </div>
            </article>
  <?php }
                wp_reset_postdata();
                ?>

        </div>
    </main>



<?php
get_footer();