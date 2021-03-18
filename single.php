<?php get_header(); ?>

<main>
  <section class="block">
    <div class="container">
      <img src="../wp-content/themes/js-corp/images/svg/sokrat_mobile.svg" alt="Sokrat" width="188" height="188">
      <div class="block__teaser">
        <h1 class="block__title">Sokrat. - самый быстрый<br> поиск курсов</h1>
        <button class="btn  btn--small  btn--accent  news-slider__cat-btn">
            <?= the_category(); ?>
        </button>
        <div class="block__description">
          <p>Образовательный маркетплейс, который предлагает множество онлайн-курсов от лучших образовательных платформ и специалистов своего дела.</p>
        </div>
        <a class="block__view-project" href="#">Посмотреть проект </a>
      </div>
    </div>
  </section>

  <section class="block-about">
    <div class="container">
      <div class="block-about__item">
        <h2 class="block-about__item-title">Sokrat.</h2>
        <p>Изучайте курсы по любым темам: языки программирования, курсы по дизайну, создание игр и множество современных профессий. Ищите практики для своих знаний внутри приложения.</p>
      </div>

      <div class="swiper-container swiper-block">
        <ul class="swiper-wrapper swiper-block__wrapper">
          <li class="swiper-slide swiper-block__slide">
            <h3 class="swiper-block__slide-title">7</h3>
            <span>КОМАНДА</span>
          </li>
          <li class="swiper-slide swiper-block__slide">
            <h3 class="swiper-block__slide-title">2</h3>
            <span>МЕСЯЦА</span>
          </li>
          <li class="swiper-slide swiper-block__slide">
            <img src="../wp-content/themes/js-corp/images/svg/android-logo.svg" alt="Android" width="50" height="58">
            <img src="../wp-content/themes/js-corp/images/svg/app-store.svg" alt="App" width="58" height="58">
            <span>ТЕХНОЛОГИИ</span>
          </li>
        </ul>
      </div>


      <div class="block-about__item">
        <div class="block-about__item-wrapper">
          <h2 class="block-about__item-title">Sokrat.</h2>
          <p>Изучайте курсы по любым темам: языки программирования, курсы по дизайну, создание игр и множество современных профессий. Ищите практики для своих знаний внутри приложения.</p>
        </div>
        <img src="../wp-content/themes/js-corp/images/back_item.jpg" alt="blue">
      </div>
      <div class="block-about__item">
        <div class="block-about__item-wrapper">
          <h2 class="block-about__item-title">Sokrat.</h2>
          <p>Изучайте курсы по любым темам: языки программирования, курсы по дизайну, создание игр и множество современных профессий. Ищите практики для своих знаний внутри приложения.</p>
        </div>
        <img src="../wp-content/themes/js-corp/images/back_item.jpg" alt="pink">
      </div>
      <div class="block-about__item">
        <div class="block-about__item-wrapper">
          <h2 class="block-about__item-title">Sokrat.</h2>
          <p>Изучайте курсы по любым темам: языки программирования, курсы по дизайну, создание игр и множество современных профессий. Ищите практики для своих знаний внутри приложения.</p>
        </div>
        <img src="../wp-content/themes/js-corp/images/back_item.jpg" alt="green">
      </div>
    </div>

  </section>


</main>


<?php get_footer(); ?>
