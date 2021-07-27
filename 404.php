<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package newland
 */

get_header();
?>

<main class="pageNews">
          <div class="fixed-container">
        
       <div style="text-align:center">
           <div style="padding:20px;background:#5895AD">
               <img src="https://projects.hedomi.com/newland/wp-content/uploads/2021/07/page-404-image.png" >
           </div>
           
           <h1 style="color:#5895AD;margin-top:30px">К сожалению такой страницы не существует</h1>
           <a class="blue__button" href="<?php echo get_home_url(); ?>" style="display:block;margin-top:40px">Вернуться на главную</a>
       </div>
            
            
            
            </div>
            </main>
<?php
get_footer();
