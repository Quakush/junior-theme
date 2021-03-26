<?php

$timer = get_post_meta(310, 'timer', true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Junior Specialist Corporation</title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header class="main-header">

    <?php if ($timer == 1): ?>
      <div class="top-bar">
        <div class="container">
          <div class="campaign">
            <p class="campaign__text">Получи до 10.000.000 рублей<br>на разработку своего MVP</p>
            <a class="btn  btn--accent  btn--small  campaign__btn" href="#">Подробнее</a>
          </div>
            <?php get_template_part('includes/block', 'timer'); ?>
        </div>
      </div>
    <?php endif; ?>

  <div class="top-header">
    <div class="container">
      <div class="logo">
        <a class="logo__link" href="/">
          <div class="logo__svg-container">
            <svg width="65" height="94">
              <use xlink:href="./wp-content/themes/js-corp/images/svg/sprite.svg#logo"></use>
            </svg>
          </div>
          <span>Junior<br>Specialists<br>Corporation</span>
        </a>
      </div>
      <nav class="main-nav">
        <div class="toggler">
          <span></span>
        </div>
        <div class="mobile-nav">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'mobile-menu',
                    'menu_class' => 'mobile-nav__list'
                )
            ); ?>
          <button class="btn  btn--small  mobile-nav__btn">
            <svg class="top-header__btn-svg" width="65" height="94">
              <use xlink:href="./wp-content/themes/js-corp/images/svg/sprite.svg#user"></use>
            </svg>
            Личный кабинет
          </button>
        </div>

        <!--<?php wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'main-nav__list'
            )
        ); ?>?-->

      </nav>
      <div class="language-switch">
        <input type="radio" name="lang" id="rus" value="rus" checked>
        <label for="rus">Rus</label>
        <input type="radio" name="lang" value="eng" id="eng">
        <label for="eng">Eng</label>
      </div>
      <button class="btn  btn--small  top-header__btn">
        <svg class="top-header__btn-svg" width="65" height="94">
          <use xlink:href="./wp-content/themes/js-corp/images/svg/sprite.svg#user"></use>
        </svg>
        Войти
      </button>
    </div>
  </div>
</header>
