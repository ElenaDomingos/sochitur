<?php


get_header('front');
global $newland_options;
$upload_dir = wp_upload_dir('2021/06');
?>

 <section class="firstscreen">
        <div class="wide-container">
            <h1 class="firstscreen__heading">
                земля в сочи<br> реальные инвестиции<br> коттеджное строительство
            </h1>
            <h1 class="firstscreen__headingMobile">земля в сочи<h1>
            <ul class="firstscreen__list list-reset flex-start-between">
                <li class="firstscreen__item js-item1"><a href="<?php echo get_home_url(); ?>/kupit-prodat-zemlju/" class="firstscreen__link">купить / продать землю</a>
                    <div class="firstscreen__curtain js-curtain1"></div>
                </li>
                    
                <li class="firstscreen__item js-item2"><a href="<?php echo get_home_url(); ?>/predzakaz-na-zemlju/" class="firstscreen__link">предзаказ на землю</a>
                    <div class="firstscreen__curtain js-curtain2"></div>
                </li>
                
                <li class="firstscreen__item js-item3"><a href="<?php echo get_home_url(); ?>/invest" class="firstscreen__link">инвестировать</a>
                    <div class="firstscreen__curtain js-curtain3"></div>
                </li>

                <li class="firstscreen__item js-item4"><a href="<?php echo get_home_url(); ?>/vasha-zemlya-pod-stroitelstvo/" class="firstscreen__link">ваша земля под строительство</a>
                    <div class="firstscreen__curtain js-curtain4"></div>
                </li>

                <li class="firstscreen__item js-item5"><a href="<?php echo get_home_url(); ?>/stroitelno-dolevoe-uchastie/" class="firstscreen__link">строительно-долевое участие</a>
                    <div class="firstscreen__curtain js-curtain5"></div>
                </li>

                <li class="firstscreen__item js-item6"><a href="<?php echo get_home_url(); ?>/nashi-predlogenia" class="firstscreen__link">наши предложения сегодня</a>
                    <div class="firstscreen__curtain js-curtain6"></div>
                    <p class="firstscreen__date"><?php echo date('d.m.y'); ?></p>
                </li>
            </ul>

            <div class="firstscreen__block flex-center-between">
                <a href="#secondScreen" class="firstscreen__down js-slideTo"><img src="<?php echo $upload_dir['url']; ?>/arrow_down.svg" alt="Стрелки вниз"></a>

                <span class="firstscreen__line">
                    <p class="firstscreen__desc">С агентствами недвижимости и риэлторами не сотрудничаем</p>
                </span>
            </div>
        </div>
    </section>
    
    <address class="mainHeader__address mainHeader__mobile">
        <div class="mainHeader__phones">
            <p class="mainHeader__text textBlack">Купля-продажа земли</p>

            <a class="mainHeader__phone phoneBlack" href="tel:<?php echo $newland_options['buy-and-sell']; ?>"><?php echo $newland_options['buy-and-sell']; ?></a>
        </div>
        
        <div class="mainHeader__phones">
            <p class="mainHeader__text textBlack">Инвестиции в землю</p>

            <a class="mainHeader__phone phoneBlack" href="tel:<?php echo $newland_options['investiments']; ?>"><?php echo $newland_options['investiments']; ?></a>
        </div> 

        <div class="mainHeader__phones">
            <p class="mainHeader__text textBlack">Коттеджное строительство</p>

            <a class="mainHeader__phone phoneBlack" href="tel:<?php echo $newland_options['kottedg-building']; ?>"><?php echo $newland_options['kottedg-building']; ?></a>
        </div> 

        <div class="logoSignMobile"></div>
    </address>

    <section class="about">
        <div class="about__contain fixed-container flex-start-start">
            <div class="contain__left">
                <h2 id="secondScreen" class="about__heading">о нас</h2>
            </div>

            <div class="contain__right">
                <p class="about__text">
                    Компания «Новая земля» создана в 2021 году в связи с небывалым ростом цен на квадратный 
                    метр жилья в городе Сочи.
                </p>

                <h4 class="about__subheading">Наши задачи:</h4>

                <p class="about__text">
                    <b>1.Доступное жильё.</b> Мы создаём доступное жильё в виде современных средиземноморских домов 
                    (в морском стиле) со своим участком земли, парковочной зоной или гаражом, зоной барбекю 
                    и ландшафтным дизайном. И, конечно же, со всеми доступными коммуникациями и в максимальной 
                    близости к инфраструктуре города. Другими словами, создать достойное жильё по доступным 
                    ценам, гораздо дешевле существующих предложений на данный момент в городе Сочи.
                </p>

                <p class="about__text">
                    <b>2.Подбор, купля-продажа земли</b>, исключая сумасшедших сочинских риэлторов. Мы даём людям 
                    возможность приобрести землю по реальной стоимости без подводных камней и разных «хвостов». 
                    Эту задачу выполняют наши юристы, кадастровые инженеры и другие специалисты. У нас только 
                    на сотню раз проверенные земли.
                </p>

                <p class="about__text">
                    <b>3.Инвестиции.</b> Привлечение правильных и эффективных инвестиций, в отличие от пирамид и прочих 
                    воздушных, электронных «фишек». Мы подкрепляем гарантии инвесторов реальной землёй или 
                    реальными строениями. В цифрах это достаточно просто понять: стройматериалы в Сочи на 15-20% 
                    дороже средней по России цены, а стоимость квадратного метра жилья дороже в десятки раз, 
                    поэтому прибыль инвесторов - гарантированно высокая.
                </p>

                <p class="about__text">
                    А также, если у вас есть земля и она чистая, мы можем её продать, или проектировать на вашей 
                    земле наши проекты, что значительно увеличит её стоимость. Таким образом, исключая риэлторов, 
                    собственник земли получает максимальную прибыль за свой участок.
                </p>

                <p class="about__text">
                    И последнее: наш главный принцип заключается в том, что любая компания - это прежде всего, люди, 
                    и всё на них держится. Мы лично работаем с каждым клиентом, то есть руководители ведут все проекты лично.
                </p>

                <p class="about__text">
                    <b>Теперь, прочитав и узнав всё о нас, о нашей политике и ценностях, вы можете позвонить нам и задать любой вопрос:</b>
                </p>

                <address class="about__address flex-start-between">
                    <div class="about__phones">
                        <p class="about__desc">Купля-продажа земли</p>
    
                        <a class="about__phone" href="tel:<?php
                        echo  $newland_options['buy-and-sell'];
                        ?>"><?php
                        echo  $newland_options['buy-and-sell'];
                        ?></a>
                    </div>
                    
                    <div class="about__phones">
                        <p class="about__desc">Инвестиции в землю</p>
    
                        <a class="about__phone" href="tel:<?php echo $newland_options['investiments']; ?>"><?php echo $newland_options['investiments']; ?></a>
                    </div> 
    
                    <div class="about__phones2">
                        <p class="about__desc">Коттеджное строительство</p>
    
                        <a class="about__phone" href="tel:<?php echo $newland_options['kottedg-building']; ?>"><?php echo $newland_options['kottedg-building']; ?></a>
                    </div> 
                </address>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="news__contain fixed-container flex-start-between">
            <div class="contain__left">
                <h2 class="news__heading">новости / события</h2>

                <a href="<?php echo get_home_url(); ?>/news/" class="news__button blue__button">смотреть все новости</a>
            </div>
           <?php
            $query = new WP_Query( array(
			         'post_type' => 'news',
			         'posts_per_page' => 2,
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
            <div class="contain__right flex-start-start">
                <article class="news__newOne">
                    <figure class="news__image">
                        <img src="<?php echo  the_post_thumbnail_url('offers-thumb'); ?>" class="news__img" alt="Картинка новости">                        
                    </figure>

                    <h4 class="news__subheading"><?php echo get_the_title(); ?>
                        <p class="news__date"><?php echo get_the_date(); ?></p>
                    </h4>                        

                    <p class="news__desc"><?php echo get_the_excerpt(); ?>
                    </p>

                    <a href="<?php echo get_the_permalink(); ?>" class="news__link">читать далее</a>
                </article>
                <?php }
                wp_reset_postdata();
                ?>
 
            </div>
             <a href="<?php echo get_home_url();?>/news/" class="news__button2 blue__button">смотреть все новости</a>
        </div>
    </section>

    <section class="offers">
        <div class="wide-container offers__contain">
            <article class="offers__article fixed-container">
                <h2 class="offers__heading">наши предложения сегодня</h2>

                <ul class="offers__list list-reset flex-start-start">
                                   <?php
            
            
                  $query = new WP_Query( array(
			         'post_type' => 'offers',
			         'posts_per_page' => 2,
			         'cat' => '[7,8]',
                    
 
) );    while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
                    <li class="offers__item">
                        <div class="offers__block flex-center-start">
                            <figure class="offers__image">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" class="news__img" alt="Предложение1">                        
                            </figure>

                            <h5 class="offers__subheading"><?php echo get_the_title() . ', ' . get_field('location'); ?></h5>
                        </div>

                        <a href="<?php echo get_the_permalink(); ?>" class="offers__link">подробнее</a>
                    </li>

                  
                              <?php }
                wp_reset_postdata();
                ?>
                </ul>

                <span class="offers__span">
                    <a href="<?php echo get_home_url(); ?>/nashi-predlogenia/" class="offers__button">смотреть все наши предложения</a>
                </span>                
            </article>
        </div>
        
        <div class="wide-container offers__contain">
            <article class="offers__article fixed-container">
                <h2 class="offers__heading">завершенные проекты</h2>

                <ul class="offers__list list-reset flex-start-start">
                                        
               <?php
            
            
                  $query = new WP_Query( array(
			         'post_type' => 'offers',
			         'posts_per_page' => 2,
			         'cat' => '6',
                    
 
) );    while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
                    <li class="offers__item">
                        <div class="offers__block flex-center-start">
                            <figure class="offers__image">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" class="news__img" alt="Предложение1">                        
                            </figure>

                            <h5 class="offers__subheading"><?php echo get_the_title() . ', ' . get_field('location'); ?></h5>
                        </div>                        
                    </li>

                  
                     <?php }
                wp_reset_postdata();
                ?>
                </ul>                             
            </article> 
        </div>
    </section>

    <section class="reviews">
        <div class="news__contain fixed-container flex-start-between">
            <div class="reviews__left">
                <h2 class="news__heading">наши отзывы</h2>

                <a href="<?php echo get_home_url(); ?>/reviews/" class="reviews__button blue__button">смотреть все отзывы</a>
            </div>

            <div class="reviews__slider">
                <div>
                    
                         <?php
      $query = new WP_Query( array(
			         'post_type' => 'reviews',
			         'posts_per_page' => 2,
                    
 
) );
           
           while ( $query->have_posts() ) {
            $query->the_post(); 
           ?>
                    <div class="reviews__slide">
                        <img src="<?php echo $upload_dir['url']; ?>/marks1.svg" alt="левые кавычки" class="reviews__marks1">
                        <img src="<?php echo $upload_dir['url']; ?>/marks2.svg" alt="левые кавычки" class="reviews__marks2">

                        <div class="reviews__contain flex-start-start">
                            <figure class="reviews__image">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" class="news__img" alt="отзыв1">                        
                            </figure>

                            <div class="reviews__desc">
                                <h5 class="reviews__subheading"><?php echo get_the_title(); ?></h5>

                                <h5 class="reviews__subheading2"><?php echo get_the_excerpt(); ?></h5>

                                <p class="reviews__text">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

               <?php }
               wp_reset_postdata(); ?>
            </div>
            <a href="<?php echo get_home_url(); ?>/reviews/" class="reviews__button2 blue__button">смотреть все отзывы</a>
        </div>
    </section>

    <section class="advantages">
        <div class="fixed-container">
            <div class="actually__contain mainActually flex-end-between">
                <div class="actually__left">
                    <h2 class="actually__subHeading">Подписывайтесь на наш инстаграм</h2>
                </div>

                <div class="actually__right">
                    <a href="https://instagram.com/zemlya.novaya?utm_medium=copy_link" target="blank" class="actually__inst">zemlya.novaya</a>
                </div>
            </div>

            <h2 class="advantages__heading">ПОЧЕМУ С НАМИ ВЫГОДНО?</h2>

            <ul class="advantages__list list-reset">
                <li class="advantages__item"><span class="advantages__span">Юридически и физически только чистые земельные участки</span></li>
                <li class="advantages__item"><span class="advantages__span">Современные удобные проекты - как для себя</span></li>
                <li class="advantages__item"><span class="advantages__span">Высокая и гарантированная инвестиционная прибыль</span></li>
                <li class="advantages__item"><span class="advantages__span">Самая доступная стоимость квадратного метра в Сочи</span></li>
                <li class="advantages__item"><span class="advantages__span">Никаких риэлторов!</span></li>
            </ul>            
        </div>
    </section>

    <section class="weWork">
        <div class="fixed-container">
            <div class="weWork__video flex-start-start">
                <video width="520" height="520" class="weWork__left" controls="controls" poster="<?php echo $upload_dir['url']; ?>/amnons1_preview.jpg">
                    <source src="<?php echo $upload_dir['url']; ?>/anons1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>

                <div class="weWork__text">
                    <h2 class="weWork__heading">как мы работаем</h2>

                    <p class="weWork__desc">
                        Видеоролик о том, как происходят процессы в нашей компании и как 
                        интересно с нами сотрудничать. 
                    </p>
                </div>
            </div>

            <article class="weWork__address flex-end-between">
                <div class="weWork__headers">
                    <h5 class="weWork__heading5">свяжитесь</h5>
                    <h4 class="weWork__heading4">с нами</h4>
                    <h3 class="weWork__heading3">как вам</h3>
                    <h2 class="weWork__heading2">удобно</h2> 
                </div>

                <div class="weWork__social flex-center-between">
                    <a class="weWork__contact weWork__instagram" target="blank" href="https://instagram.com/zemlya.novaya?utm_medium=copy_link"></a> 
                    
                    <a class="weWork__contact weWork__telegram" target="blank" href="https://t.me/"></a>

                    <a class="weWork__contact weWork__whatsapp" target="blank" href="https://api.whatsapp.com/send?phone=7"></a>

                    <a class="weWork__contact weWork__viber" target="blank" href="#"></a>

                    <a class="weWork__contact weWork__phone" href="tel:+7"></a>                   

                    <a class="weWork__contact weWork__mail" href="mailto:info@zemlyavsochi.ru"></a>
                </div>                               
            </article> 
        </div>
    </section>

<?php
get_footer();