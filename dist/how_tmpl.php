<?php
/*
Template Name: Как это работает Новая
*/
get_header();
the_post();

// do_action( 'adifier_page_header' );
?>

 <main>
  <div class="how_it_work">
    <div class="container">
      <section class="row">
        <div class="col-12">
          <h1 class="h1">Как это работает</h1>
        </div>
      </section>
      <section class="row align-items-center">
        <div class="col-xl-6">
          <div class="how_it_work-img">
            <img src="<?php bloginfo('template_url'); ?>/images/i7.jpg" alt="">
            <span class="right">01</span>
          </div>
        </div>
        <div class="col-xl-6 ">
          <div class="how_it_work-item">
            <div class="h2-title"><span>Регистрируйтесь  <br>на сайте</span> и заполняйте  <br>личный профиль</div>
            <div class="how_it_work-quote">Создайте аккаунт, в котором  <br>вы сможете разместить всю необходимую  <br>информацию о себе: название компании  <br>и описание, ваши контакты и ссылки  <br>на соц.сети. </div>
          </div>
        </div>
      </section>
      <section class="row">
        <div class="col-xl-6">
          <div class="how_it_work-item">
          <div class="h2-title">Размещайте  <br>публикации о ваших  <br>услугах</div>
           <div class="list-title">Добавляйте <br>публикации на сайт. </div>
            <ul>
              <li><b>Наполняйте</b> их фото, видео <br>и  описанием успешных кейсов. </li>
              <li><b>Управляйте публикациями</b> с помощью <br>личного кабинета: обновляйте фото <br>и видео, дополняйте описание свежими <br>кейсами — и продвигайте свои услуги.</li>
            </ul>
            <div class="how_it_work-bottom">Детальнее о создании публикации <br>и возможностях <a href="#" target="_blank">в нашей инструкции</a>. </div>
          </div>
        </div>
        <div class="col-xl-6 xs-first">
          <div class="how_it_work-img">
            <img src="<?php bloginfo('template_url'); ?>/images/i8.png" alt="">
            <span class="left">02</span>
          </div>
        </div>
      </section>
      <section class="row">
        <div class="col-xl-5">
          <div class="how_it_work-img">
            <img src="<?php bloginfo('template_url'); ?>/images/i9.png" alt="">
            <span class="right">03</span>
          </div>
        </div>
        <div class="col-xl-4  col-md-6">
          <div class="h2-title"><span>Получайте  <br>больше</span> клиентов  <br>вместе с нами</div>
          <div class="how_it_work-quote">Наша цель сделать  <br>поиск ваших услуг простым  <br>для потенциальных  <br>клиентов.</div>
          <a href="#" class="order-btn orange">Сделать публикацию</a>
        </div>
        <div class="col-xl-3 col-md-6 ml-auto">
          <div class="how_it_work-price">
            <div class="title">Стоимость <br>размещения: </div>
            <ul>
              <li>350 грн/мес</li>
              <li>2000 грн/6 мес</li>
              <li>3500 грн/год              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
  </main>
<?php get_footer(); ?>