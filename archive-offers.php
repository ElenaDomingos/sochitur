<?php

get_header();
global $newland_options;
?>

  <section class="todayMainImg">
        <div class="fixed-container">
           <span class="color-white"> <a href="<?php echo get_home_url(); ?>" class="breadcrumbsWhite" style="display:inline-block">&nbsp;</a>/&nbsp;<a href="#" class="breadnext">наши предложения сегодня</a></span>

            <h1 class="todayMainImg__heading">наши предложения сегодня</h1>
        </div>

        <div class="logoSign"></div>
    </section>

    <section class="todayOffer">
        <div class="fixed-container">
            <p class="todayOffer__text">
                Здесь мы представили наши предложения по строящимся объектам, а также объектам 
                для инвестирования. Вы можете выбрать привлекательный для себя объект с целью 
                покупки или вложения средств для последующей выгоды.
            </p>            

            <div class="conditions flex-start-between">
                 <span class="conditions__left">
                    <form  style="display:flex;flex-direction:row;" action="<?php get_post_type_archive_link('offers'); ?>" method="post">
                           <select name="sort" style="width:170px;font-size:16px">
                                <option value="location" <?php if(isset($_POST['sort']) && $_POST['sort'] == 'location') { echo 'selected';}  ?>>По региону</option>
                                 <option value="itogovaya_stoimost" <?php if(isset($_POST['sort']) && $_POST['sort'] == 'itogovaya_stoimost') { echo 'selected';}  ?>>По стоимости</option>
                                 <option value="kolichestvo_sotok" <?php if(isset($_POST['sort']) && $_POST['sort'] == 'kolichestvo_sotok') { echo 'selected';}  ?>>По количеству соток</option>
                           </select>
                           <input  name="submit" type="submit" value="cортировать" style="background:#73B1C4;margin-left:10px;padding:5px;font-size:16px" />
                    </form>
                </span>

                <div class="conditions__buttons flex-start-between">
                    <button class="condition__list" id="list">списком</button>

                    <button class="condition__table" id="columns">таблицей</button>
                </div>
            </div>
            
               <?php
            
                      
                  $args = array(
			         'post_type' => 'offers',
			         'posts_per_page' => -1,
			         'cat' => '[7,8]',
 
  );
               
               if(isset($_POST['sort']) && $_POST['sort'] != ''){
                        $args = array(
			            'post_type' => 'offers',
			            'posts_per_page' => -1,
			             'cat' => '[7,8]',
                            'meta_key' => esc_attr($_POST['sort']),
                            'orderby'			=> 'meta_value',
	                        'order'				=> 'ASC'
                            );
                   }
               
         
            $query = new WP_Query($args);
            

           echo '<div class="flex-wrapper">';
           while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>

            <article class="buyOne flex-start-between">
                <figure class="buyOne__image">
                    <img src="<?php echo  the_post_thumbnail_url('offers-thumb'); ?>" class="news__img" alt="Картинка участка">                        
                </figure>

                <div class="buyOne__contain">
                    <h4 class="buyOne__heding"><?php echo get_the_title(); ?></h4>

                    <div class="buyOne__conditions flex-center-between">
                        <div class="buyOne__leftCond">
                            <p class="buyOne__desc"><?php echo get_field('kolichestvo_sotok'); ?> сот.</p>
                            <?php if(get_field('drugie_parametry_obekta')): 
                            
                            $details = explode("\n", get_field('drugie_parametry_obekta') );
                            foreach($details as $detail){
                                
                            $detaildivided = explode(":", $detail);
                            ?>
                     
                        <p class="buyOne__desc"><?php echo $detaildivided[0].$detaildivided[1] ;?></p>
                    
                   <?php 
                         } endif; ?>
                           
                        </div>

                        <p class="buyOne__price"><b><?php echo get_field('itogovaya_stoimost'); ?></b> p</p>
                    </div>

                    <h5 class="buyOne__subheading">Кадастровый номер: <?php echo get_field('kadastrovyj_nomer'); ?></h5>

                    <p class="buyOne__text"><?php the_content(); ?>
                    </p>

                    <div class="buyOne__details flex-end-between">
                        <p class="buyOne__address"><?php echo get_field('location'); ?></p>

                        <a href="<?php echo get_the_permalink(); ?>" class="buyOne__link">подробнее</a>

                        <p class="buyOne__date"><?php echo get_the_date(); ?></p>
                    </div>
                </div>
                
<figure class="buyOne__map">
                 <?php if(get_field('karta')):?>
                
                    <?php echo get_field('karta'); ?>                       
               
                <? endif; ?> </figure>
            </article>
 <?php }
 echo '</div>';
                wp_reset_postdata();
                ?>
           
        </div>
    </section>

    <section class="sailLand">
        <div class="fixed-container">
            <div class="sailLand__contain flex-start-between">
                <div class="contain__left">
                    <h2 class="buyLand__heading">продать землю</h2>
                </div>

                <div class="contain__right">
                    <p class="buyLand__text">
                        Здесь вы можете отправить нам на реализацию ваш земельный участок, заполнив 
                        соответствующие поля. Это займет совсем немного времени, а мы сможем оценить 
                        ваш участок и помочь вам ака можно скорее превратить его в деньги.
                    </p>
                </div>
            </div>

            <div class="sailLand__action flex-start-between">
                <div class="sailLand__formContain" style="position:relative">
                    <h3 class="sailLand__heading">Отправить заявку на продажу земельного участка</h3>

                                  <?php
                    echo do_shortcode('[contact-form-7 id="113" title="Sell land" html_class="sailLand__form"]');
                    
                     
                    get_template_part('successmessage');
                    ?>
 
                   <div class="note1"></div>
                </div>

                 <button class="sailLand__submit" id="callback">заказать обратный звонок
                </button>
                 <div class="popup_callMeplease">
                      <?php echo do_shortcode('[contact-form-7 id="349" title="contact popup"]'); ?>  
                 </div>
                 <div class="popup_message">
                     <div id="close-popup"><i class="fas fa-times" ></i></div>
                     <p>Ваша заявка получена!</p>
                     <p>Ждите нашего звонка</p>
                 </div>   
            </div>
        </div>
    </section>

    <section class="others">
        <div class="fixed-container">
            <h2 class="others__heading">вас также может заинтересовать</h2>

            <ul class="others__list list-reset flex-start-between">
                <li class="firstscreen__item itemBlack js-item1"><a href="<?php echo get_home_url(); ?>/nashi-predlogenia" class="firstscreen__link linkBlack">наши предложения сегодня</a>
                    <div class="firstscreen__curtain js-curtain1"></div>
                    <p class="firstscreen__date"><?php echo date('d.m.y'); ?></p>
                </li>
                    
                <li class="firstscreen__item itemBlack js-item2"><a href="<?php echo get_home_url(); ?>/predzakaz-na-zemlju/" class="firstscreen__link linkBlack">предзаказ на землю</a>
                    <div class="firstscreen__curtain js-curtain2"></div>
                </li>               
   
                <li class="firstscreen__item itemBlack js-item3"><a href="<?php echo get_home_url(); ?>/vasha-zemlya-pod-stroitelstvo/" class="firstscreen__link linkBlack">ваша земля под строительство</a>
                    <div class="firstscreen__curtain js-curtain3"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item4"><a href="<?php echo get_home_url(); ?>/stroitelno-dolevoe-uchastie/" class="firstscreen__link linkBlack">строительно-долевое участие</a>
                    <div class="firstscreen__curtain js-curtain4"></div>
                </li>

                <li class="firstscreen__item itemBlack js-item5"><a href="<?php echo get_home_url(); ?>/invest" class="firstscreen__link linkBlack">инвестировать</a>
                    <div class="firstscreen__curtain js-curtain5"></div>
                </li>
            </ul>
        </div>
    </section>


<?php

get_footer();