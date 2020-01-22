<?php
/*
Template Name: Page New Main
*/
get_header();
the_post();

// do_action( 'adifier_page_header' );
?>

 <main>
    <div class="head">
      <div class="container">
        <div class="head-item">
          <h1 class="head-title">Всё для организации <br>мероприятий</h1>
          <p>Поиск площадок, артистов, подрядчиков, агентств</p>
          <div class="head-search ">
            <form action="https://www.4event.space/browse-ads/" class="head-search">
              <label for="search-input">
                <input type="text" id="search-input" name="keyword" placeholder="Что ищем?">
              </label>
              <label for="location-input">
                <input type="text" id="location-input" class="  location" name="location" placeholder="Где?" autocomplete="off">
                <input type="hidden" name="latitude" class="latitude">
                <input type="hidden" name="longitude" class="longitude">
              </label>
              <label for="price-input">
                <input type="text" id="price-input" name="price" placeholder="Какой бюджет?">
              </label>
              <button type="submit" class="submit">Поиск</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    <div class="advantages">
      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <div class="advantages-img">
              <img src="images/i1.jpg" alt="">
            </div>
          </div>
          <div class="col-xl-5 xs-first">
            <div class="h2-title">Организовать <br>событие <span>легко, когда <br>всё в одном месте</span></div>
            <div class="advantages-quote">Удобный сервис, <br>чтобы найти все услуги <br>и подрядчиков для ваших <br>мероприятий.</div>
          </div>
          <div class="col-xl-3">
            <div class="advantages-list_title">У нас вы <br>сможете подобрать: </div>
            <ul class="advantages-list">
              <li><b>площадку:</b> от переговорной <br>комнаты до огромного <br>конференц зала на 1000 <br>+ человек;</li>
              <li><b>артистов и ведущих:</b> <br>для Дня рождения, свадьбы, <br>корпоратива, конференции;</li>
              <li><b>подрядчиков или агентство</b> <br>для дополнительных услуг. </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="catalog">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-md-5">
            <div class="h2-title"><span>Каталог</span> 4event</div>
          </div>
          <div class="col-xl-7 col-md-7">
            <ul class="catalog-tab">
              <li class="active"><a href="#platform">Площадки</a></li>
              <li><a href="#artist">Артисты</a></li>
              <li><a href="#contractor">Подрядчики</a></li>
            </ul>
          </div>
          <div class="col-12">
            <div class="catalog-item active" id="platform">
              <ul class="item-list">
                <li><a class="active" href="new">Новые </a></li>
                <li><a href="popylar">Популярные</a></li>
              </ul>
              <div class="item-content new active">
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-content popylar">
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="catalog-item" id="artist">
              <ul class="item-list">
                <li><a class="active" href="new">Новые </a></li>
                <li><a href="popylar">Популярные</a></li>
              </ul>
              <div class="item-content new active">
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-content popylar">
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="catalog-item" id="contractor">
              <ul class="item-list">
                <li><a class="active" href="new">Новые </a></li>
                <li><a href="popylar">Популярные</a></li>
              </ul>
              <div class="item-content new active">
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-content popylar">
                <div class="row">
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                    <div class="catalog-block">
                      <div class="img">
                        <img src="images/i2.jpg" alt="">
                        <a href="#" class="catalog-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M472 79c-25-25-60-39-98-39a128 128 0 00-118 63l-1-1c-17-28-51-62-117-62-38 0-73 14-98 39-26 27-40 63-40 106 0 90 80 150 151 203 35 26 68 51 89 77a20 20 0 0032 0c10-14 25-28 47-45a20 20 0 00-25-31l-38 33c-23-23-51-44-81-66-66-50-135-101-135-171 0-62 40-105 98-105 38 0 65 14 82 42 14 22 16 45 16 45a20 20 0 0040 0s2-23 16-45c17-28 44-42 82-42 58 0 98 43 98 105 0 58-47 103-98 143a20 20 0 0024 31c25-19 55-44 78-74 24-33 36-65 36-100 0-43-14-79-40-106z" /></svg></a>
                      </div>
                      <div class="content">
                        <div class="title">Grand Hall Khreschatyk</div>
                        <div class="subtitle">Київ</div>
                        <div class="catalog-price">640 грн./час</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <p class="catalog-info">Если вы не нашли нужную вам услугу, подрядчика или у вас остался вопрос, напишите нам в <a href="#" target="_blank">Telegram</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="for_you">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-md-6">
            <div class="for_you-item">
              <div class="h2-title"><span>4event станет <br>вашим</span> незаменимым <br>помощником, если вы:</div>
              <div class="row">
                <div class="col-xl-4">
                  <div class="svg">
                    <svg viewBox="0 0 511 512" xmlns="http://www.w3.org/2000/svg">
                      <path d="M33.504 512a19.996 19.996 0 0 1-14.164-5.875l-13-13.031a20.003 20.003 0 0 1-4.219-22.012l172-400.969a19.99 19.99 0 0 1 14.613-11.754 19.992 19.992 0 0 1 17.926 5.516l241.996 242.586a20.003 20.003 0 0 1-6.297 32.516L298.363 400.53c-10.16 4.344-21.91-.37-26.254-10.527-4.34-10.156.375-21.91 10.528-26.254l116.847-49.945-200.261-200.746L48.809 463.703l141.828-60.625c10.16-4.344 21.91.375 26.254 10.527 4.34 10.157-.375 21.91-10.532 26.25l-165 70.536A19.996 19.996 0 0 1 33.504 512zm168.613-211.117l30.028-70c4.351-10.149-.348-21.91-10.497-26.262-10.152-4.36-21.91.344-26.265 10.492l-30.028 70c-4.351 10.153.348 21.91 10.497 26.266a19.878 19.878 0 0 0 7.875 1.625c7.757 0 15.14-4.54 18.39-12.121zM154.5 337c-11.047 0-20 8.953-20 20s8.953 20 20 20 20-8.953 20-20-8.957-20-20-20zm318-254c-11.047 0-20 8.953-20 20s8.953 20 20 20 20-8.953 20-20-8.957-20-20-20zm20-83c-11.047 0-20 8.953-20 20s8.953 20 20 20 20-8.953 20-20-8.957-20-20-20zm-246 0c-11.047 0-20 8.953-20 20s8.953 20 20 20 20-8.953 20-20-8.957-20-20-20zm135 147c-11.047 0-20 8.953-20 20s8.953 20 20 20 20-8.953 20-20-8.957-20-20-20zm32.055-107h-28.368c-4.285 0-8.085-1.672-9.41-5.734l-8.902-27.457C365.395 2.269 361.43 0 357.465 0s-7.93 2.27-9.414 6.809l-8.903 27.46c-1.324 4.06-5.125 5.731-9.41 5.731h-28.324c-9.586 0-13.57 13.29-5.816 18.898l22.82 16.864a9.83 9.83 0 0 1 3.598 11.015l-8.907 27.282c-2.96 9.078 7.473 16.625 15.23 11.015l23.31-16.867a9.922 9.922 0 0 1 11.633 0l23.308 16.867c7.754 5.61 18.191-1.937 15.226-11.015l-8.902-27.282a9.834 9.834 0 0 1 3.594-11.015l22.863-16.864C427.125 53.29 423.141 40 413.555 40zm92.183 151h-19.343c-2.926 0-5.516-1.445-6.418-4.258l-6.075-19.027c-1.007-3.145-3.714-4.715-6.418-4.715s-5.406 1.57-6.418 4.715l-6.07 19.027c-.902 2.813-3.496 4.258-6.418 4.258h-19.316c-6.54 0-9.258 8.922-3.969 12.813l15.562 11.683c2.368 1.738 3.356 4.82 2.454 7.633l-6.07 18.902c-2.02 6.293 5.093 11.52 10.382 7.633l15.899-11.684a6.678 6.678 0 0 1 7.934 0l15.898 11.684c5.289 3.887 12.402-1.34 10.382-7.633l-6.07-18.902c-.902-2.813.086-5.895 2.45-7.633l15.593-11.684c5.285-3.89 2.566-12.812-3.969-12.812zm0 0" /></svg>
                  </div>
                  <p><b>Сами хотите организовать: </b> важное мероприятие для себя, семьи, коллектива: День рождения, свадьбу, корпоратив. </p>
                </div>
                <div class="col-xl-4">
                  <div class="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M511 439a20 20 0 00-39 8 21 21 0 01-21 25h-90a20 20 0 100 40h90a60 60 0 0060-73zM276 273c66 6 126 41 163 97a20 20 0 1033-23c-33-49-80-84-135-102a136 136 0 10-162 0A260 260 0 001 439a61 61 0 0060 73h87a20 20 0 100-40H61c-9 0-14-5-16-8-4-5-6-11-5-17 20-94 99-164 194-174l-39 174a20 20 0 006 18l40 40a20 20 0 0028 0l40-40a20 20 0 006-18l-39-174zM160 136a96 96 0 11101 96 261 261 0 00-5 0h-5c-50-3-91-45-91-96zm95 327l-18-18 18-83 18 83-18 18z" /></svg>
                  </div>
                  <p><b>Профессионально занимаетесь</b> организацией мероприятий для частных клиентов, компаний.</p>
                </div>
                <div class="col-xl-4">
                  <div class="svg">
                    <svg viewBox="0 0 511.99981 511" xmlns="http://www.w3.org/2000/svg">
                      <path d="M296.465 336.098a189.874 189.874 0 0 0-39.89-21.29c18.613-16.917 30.96-40.617 33.109-67.148 28.226-27.504 65.226-42.582 104.89-42.582 30.965 0 60.696 9.324 85.985 26.961 9.062 6.32 21.523 4.102 27.843-4.96 6.317-9.06 4.098-21.524-4.96-27.84a190.083 190.083 0 0 0-39.895-21.29C484.086 159.281 497 132.363 497 102.49 497 46.25 451.25.5 395.012.5c-56.235 0-101.985 45.75-101.985 101.988 0 29.754 12.809 56.574 33.207 75.235a188.974 188.974 0 0 0-8.32 3.422 189.912 189.912 0 0 0-35.223 20.234c-15.09-37.488-51.828-64.02-94.652-64.02-56.234 0-101.988 45.75-101.988 101.985 0 29.672 12.738 56.418 33.027 75.07-54.246 20.324-98.23 63.977-116.137 119.648-5.937 18.461-2.793 38.04 8.63 53.715 11.421 15.672 29.093 24.66 48.484 24.66h173.98c11.043 0 19.996-8.953 19.996-20 0-11.042-8.953-19.996-19.996-19.996H60.055c-6.465 0-12.356-2.996-16.164-8.222s-4.856-11.754-2.88-17.91c19.766-61.454 80.048-104.372 146.59-104.372 30.962 0 60.696 9.325 85.985 26.961 9.059 6.32 21.523 4.098 27.844-4.96 6.316-9.06 4.097-21.524-4.965-27.84zm98.547-295.602c34.183 0 61.992 27.809 61.992 61.992 0 34.18-27.809 61.992-61.992 61.992-34.18 0-61.992-27.812-61.992-61.992 0-34.183 27.812-61.992 61.992-61.992zM188.039 177.352c34.184 0 61.992 27.812 61.992 61.992 0 34.183-27.808 61.992-61.992 61.992s-61.992-27.809-61.992-61.992c0-34.18 27.808-61.992 61.992-61.992zM512 417.449c0 11.043-8.953 19.996-20 19.996h-54.992v54.992c0 11.047-8.953 20-19.996 20-11.047 0-20-8.953-20-20v-54.992H342.02c-11.043 0-19.997-8.953-19.997-19.996 0-11.047 8.954-20 19.997-20h54.992v-54.992c0-11.043 8.953-19.996 20-19.996 11.043 0 19.996 8.953 19.996 19.996v54.992H492c11.047 0 20 8.953 20 20zm0 0" /></svg>
                  </div>
                  <p><b>Хотите получить больше клиентов</b> — у вас свой бизнес в сфере досуга, вы - ведущий, артист или творческий коллектив.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-6">
            <div class="for_you-img">
              <img src="images/i3.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="advantage">
      <div class="container">
        <div class="row">
          <div class="col-xl-6">
            <div class="h2-title">Что именно <span>вы получаете</span></div>
            <div class="advantage-img">
              <img src="images/i4.jpg" alt="">
            </div>
          </div>
          <div class="col-xl-5 ml-auto">
            <div class="advantage-item">
              <div class="title">Если планируете <br>свое событие:</div>
              <ul>
                <li><b>Быстрый и удобный поиск</b> <br>Находите всё для ивента в одном месте <br>и экономите массу времени. </li>
                <li><b>Бесплатный подбор</b> для Дня рождения, <br>свадьбы, корпоратива, конференции.</li>
              </ul>
            </div>
            <div class="advantage-item">
              <div class="title">Если публикуетесь на 4event:</div>
              <ul>
                <li><b>Новые клиенты</b> <br>Пользователи сами будут находить вашу <br>компанию и заказывать услуги.</li>
                <li><b>Партнеры и подрядчики</b> <br>Среди других компаний могут быть ваши <br>потенциальные партнеры и подрядчики <br>с выгодными условиями.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="category">
      <div class="h2-title"><span>Все категории</span> объектов и услуг</div>
      <div class="category-slider">
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="01" class="title">Площадки</div>
        </div>
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="02" class="title">Площадки</div>
        </div>
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="03" class="title">Площадки</div>
        </div>
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="04" class="title">Площадки</div>
        </div>
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="05" class="title">Площадки</div>
        </div>
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="06" class="title">Площадки</div>
        </div>
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="07" class="title">Площадки</div>
        </div>
        <div class="item">
          <div class="img">
            <img src="images/i5.png" alt="">
          </div>
          <div data-num="08" class="title">Площадки</div>
        </div>
      </div>
      <div class="text-center">
        <a href="#" class="order-btn orange">Добавить свою услугу</a>
      </div>
    </div>
    <div class="relevant">
      <div class="container">
        <div class="text-center">
          <div class="h2-title">Актуальное про <br>ивенты: <span>истории, тренды, кейсы</span></div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="relevant-item">
              <div class="top row">
                <ul class="tag col">
                  <li><a href="#">#рубрика</a></li>
                </ul>
                <div class="col ">
                  <div class="time">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M437.02 74.98C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.98C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.02C123.333 485.371 187.62 512 256 512c46.813 0 92.617-12.757 132.461-36.893 9.448-5.723 12.468-18.021 6.745-27.468-5.722-9.449-18.022-12.468-27.468-6.745C334.143 461.244 295.505 472 256 472c-119.103 0-216-96.897-216-216S136.897 40 256 40s216 96.897 216 216c0 42.589-12.665 84.044-36.627 119.885-6.139 9.182-3.672 21.603 5.511 27.742 9.183 6.139 21.603 3.671 27.742-5.511C497.001 355.674 512 306.531 512 256c0-68.38-26.629-132.667-74.98-181.02z" />
                      <path d="M256 76c-11.046 0-20 8.954-20 20v151.716l-73.338 73.338c-7.811 7.81-7.811 20.473 0 28.284 3.905 3.905 9.023 5.858 14.142 5.858s10.237-1.953 14.142-5.858l79.196-79.196A19.998 19.998 0 0 0 276 256V96c0-11.046-8.954-20-20-20z" /></svg>
                    10 мин.

                  </div>
                </div>
                <div class="col-3 ">
                  <div class="views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.998 511.998">
                      <circle cx="257.013" cy="256.003" r="38.999" />
                      <path d="M257.011 142.002c-62.858 0-113.997 51.139-113.997 113.997s51.139 113.997 113.997 113.997 113.997-51.139 113.997-113.997-51.139-113.997-113.997-113.997zm0 187.995c-40.803 0-73.998-33.195-73.998-73.998 0-40.803 33.195-73.998 73.998-73.998s73.998 33.195 73.998 73.998c0 40.803-33.195 73.998-73.998 73.998z" />
                      <path d="M499.046 212.345c-10.618-16.306-40.581-58.167-89.352-94.633-49.438-36.965-100.997-55.709-153.246-55.709-52.175 0-103.779 18.693-153.379 55.558-48.988 36.41-79.191 78.219-89.903 94.504a79.882 79.882 0 0 0 0 87.867c10.712 16.286 40.915 58.095 89.903 94.505 49.6 36.865 101.203 55.558 153.379 55.558 80.325 0 144.917-44.788 184.957-82.359 8.055-7.558 8.458-20.214.9-28.269-7.559-8.056-20.214-8.458-28.269-.9-34.777 32.632-90.347 71.53-157.59 71.53-97.104 0-177.606-83.001-209.865-132.045a39.913 39.913 0 0 1 0-43.904c32.259-49.044 112.761-132.044 209.865-132.044 97.101 0 177.112 83.08 209.081 132.17a40.017 40.017 0 0 1 0 43.652c-6.027 9.256-3.41 21.645 5.846 27.673 9.255 6.027 21.646 3.411 27.673-5.846 17.269-26.519 17.269-60.79 0-87.308z" /></svg>
                    200
                  </div>
                </div>
              </div>
              <div class="content">
                <div class="img"><img src="images/i6.png" alt=""></div>
                <div class="title">Lorem ipsum dolor sit amet, consectetur </div>
                <a href="#">Читать <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49">
                    <path d="M21.205 5.007a1.112 1.112 0 0 0-1.587 0 1.12 1.12 0 0 0 0 1.571l8.047 8.047H1.111A1.106 1.106 0 0 0 0 15.737c0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587a1.112 1.112 0 0 0 1.587 0l9.952-9.952a1.093 1.093 0 0 0 0-1.571l-9.952-9.953z" fill="#1e201d" /></svg></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="relevant-item">
              <div class="top row">
                <ul class="tag col">
                  <li><a href="#">#рубрика</a></li>
                </ul>
                <div class="col ">
                  <div class="time">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M437.02 74.98C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.98C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.02C123.333 485.371 187.62 512 256 512c46.813 0 92.617-12.757 132.461-36.893 9.448-5.723 12.468-18.021 6.745-27.468-5.722-9.449-18.022-12.468-27.468-6.745C334.143 461.244 295.505 472 256 472c-119.103 0-216-96.897-216-216S136.897 40 256 40s216 96.897 216 216c0 42.589-12.665 84.044-36.627 119.885-6.139 9.182-3.672 21.603 5.511 27.742 9.183 6.139 21.603 3.671 27.742-5.511C497.001 355.674 512 306.531 512 256c0-68.38-26.629-132.667-74.98-181.02z" />
                      <path d="M256 76c-11.046 0-20 8.954-20 20v151.716l-73.338 73.338c-7.811 7.81-7.811 20.473 0 28.284 3.905 3.905 9.023 5.858 14.142 5.858s10.237-1.953 14.142-5.858l79.196-79.196A19.998 19.998 0 0 0 276 256V96c0-11.046-8.954-20-20-20z" /></svg>
                    10 мин.

                  </div>
                </div>
                <div class="col-3 ">
                  <div class="views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.998 511.998">
                      <circle cx="257.013" cy="256.003" r="38.999" />
                      <path d="M257.011 142.002c-62.858 0-113.997 51.139-113.997 113.997s51.139 113.997 113.997 113.997 113.997-51.139 113.997-113.997-51.139-113.997-113.997-113.997zm0 187.995c-40.803 0-73.998-33.195-73.998-73.998 0-40.803 33.195-73.998 73.998-73.998s73.998 33.195 73.998 73.998c0 40.803-33.195 73.998-73.998 73.998z" />
                      <path d="M499.046 212.345c-10.618-16.306-40.581-58.167-89.352-94.633-49.438-36.965-100.997-55.709-153.246-55.709-52.175 0-103.779 18.693-153.379 55.558-48.988 36.41-79.191 78.219-89.903 94.504a79.882 79.882 0 0 0 0 87.867c10.712 16.286 40.915 58.095 89.903 94.505 49.6 36.865 101.203 55.558 153.379 55.558 80.325 0 144.917-44.788 184.957-82.359 8.055-7.558 8.458-20.214.9-28.269-7.559-8.056-20.214-8.458-28.269-.9-34.777 32.632-90.347 71.53-157.59 71.53-97.104 0-177.606-83.001-209.865-132.045a39.913 39.913 0 0 1 0-43.904c32.259-49.044 112.761-132.044 209.865-132.044 97.101 0 177.112 83.08 209.081 132.17a40.017 40.017 0 0 1 0 43.652c-6.027 9.256-3.41 21.645 5.846 27.673 9.255 6.027 21.646 3.411 27.673-5.846 17.269-26.519 17.269-60.79 0-87.308z" /></svg>
                    200
                  </div>
                </div>
              </div>
              <div class="content">
                <div class="img"><img src="images/i6.png" alt=""></div>
                <div class="title">Lorem ipsum dolor sit amet, consectetur </div>
                <a href="#">Читать <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49">
                    <path d="M21.205 5.007a1.112 1.112 0 0 0-1.587 0 1.12 1.12 0 0 0 0 1.571l8.047 8.047H1.111A1.106 1.106 0 0 0 0 15.737c0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587a1.112 1.112 0 0 0 1.587 0l9.952-9.952a1.093 1.093 0 0 0 0-1.571l-9.952-9.953z" fill="#1e201d" /></svg></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="relevant-item">
              <div class="top row">
                <ul class="tag col">
                  <li><a href="#">#рубрика</a></li>
                </ul>
                <div class="col ">
                  <div class="time">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path d="M437.02 74.98C388.667 26.629 324.38 0 256 0S123.333 26.629 74.98 74.98C26.629 123.333 0 187.62 0 256s26.629 132.667 74.98 181.02C123.333 485.371 187.62 512 256 512c46.813 0 92.617-12.757 132.461-36.893 9.448-5.723 12.468-18.021 6.745-27.468-5.722-9.449-18.022-12.468-27.468-6.745C334.143 461.244 295.505 472 256 472c-119.103 0-216-96.897-216-216S136.897 40 256 40s216 96.897 216 216c0 42.589-12.665 84.044-36.627 119.885-6.139 9.182-3.672 21.603 5.511 27.742 9.183 6.139 21.603 3.671 27.742-5.511C497.001 355.674 512 306.531 512 256c0-68.38-26.629-132.667-74.98-181.02z" />
                      <path d="M256 76c-11.046 0-20 8.954-20 20v151.716l-73.338 73.338c-7.811 7.81-7.811 20.473 0 28.284 3.905 3.905 9.023 5.858 14.142 5.858s10.237-1.953 14.142-5.858l79.196-79.196A19.998 19.998 0 0 0 276 256V96c0-11.046-8.954-20-20-20z" /></svg>
                    10 мин.

                  </div>
                </div>
                <div class="col-3 ">
                  <div class="views">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.998 511.998">
                      <circle cx="257.013" cy="256.003" r="38.999" />
                      <path d="M257.011 142.002c-62.858 0-113.997 51.139-113.997 113.997s51.139 113.997 113.997 113.997 113.997-51.139 113.997-113.997-51.139-113.997-113.997-113.997zm0 187.995c-40.803 0-73.998-33.195-73.998-73.998 0-40.803 33.195-73.998 73.998-73.998s73.998 33.195 73.998 73.998c0 40.803-33.195 73.998-73.998 73.998z" />
                      <path d="M499.046 212.345c-10.618-16.306-40.581-58.167-89.352-94.633-49.438-36.965-100.997-55.709-153.246-55.709-52.175 0-103.779 18.693-153.379 55.558-48.988 36.41-79.191 78.219-89.903 94.504a79.882 79.882 0 0 0 0 87.867c10.712 16.286 40.915 58.095 89.903 94.505 49.6 36.865 101.203 55.558 153.379 55.558 80.325 0 144.917-44.788 184.957-82.359 8.055-7.558 8.458-20.214.9-28.269-7.559-8.056-20.214-8.458-28.269-.9-34.777 32.632-90.347 71.53-157.59 71.53-97.104 0-177.606-83.001-209.865-132.045a39.913 39.913 0 0 1 0-43.904c32.259-49.044 112.761-132.044 209.865-132.044 97.101 0 177.112 83.08 209.081 132.17a40.017 40.017 0 0 1 0 43.652c-6.027 9.256-3.41 21.645 5.846 27.673 9.255 6.027 21.646 3.411 27.673-5.846 17.269-26.519 17.269-60.79 0-87.308z" /></svg>
                    200
                  </div>
                </div>
              </div>
              <div class="content">
                <div class="img"><img src="images/i6.png" alt=""></div>
                <div class="title">Lorem ipsum dolor sit amet, consectetur </div>
                <a href="#">Читать <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49">
                    <path d="M21.205 5.007a1.112 1.112 0 0 0-1.587 0 1.12 1.12 0 0 0 0 1.571l8.047 8.047H1.111A1.106 1.106 0 0 0 0 15.737c0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587a1.112 1.112 0 0 0 1.587 0l9.952-9.952a1.093 1.093 0 0 0 0-1.571l-9.952-9.953z" fill="#1e201d" /></svg></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>