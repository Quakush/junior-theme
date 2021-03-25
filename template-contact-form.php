<?php

/*
Template Name: Contact Form
*/

get_header();

?>

<main>
<form action="https://office@jscorp.ru" method="POST" class="contact-form">
    <div class="contact-form__title-wrap">
      <h2 class="contact-form__title">
        Связаться с нами
      </h2>
      <button class="contact-form__close" type="button" aria-label="Закрыть">
      </button>
    </div>
    <p class="contact-form__field">
      <input class="contact-form__input" name="name" id="name" type="text" placeholder="Имя">
      <label class="contact-form__label" for="name">
        Имя
      </label>
    </p>
    <p class="contact-form__field">
      <input class="contact-form__input" name="email" id="email" type="email" placeholder="Email">
      <label class="contact-form__label" for="email">
        Email
      </label>
    </p>
    <div class="contact-form__field contact-form__field--underlined">
      <button class="contact-form__select-button" type="button">Выберите тему
      </button>
      <ul class="contact-form__select-options">
        <li class="contact-form__select-option">
          <input class="contact-form__select-input" name="theme" id="development" type="radio">
          <label class="contact-form__select-label" for="development">
            Заказать разработку
          </label>
        </li>
        <li class="contact-form__select-option">
          <input class="contact-form__select-input" type="radio" name="theme" id="practice">
          <label class="contact-form__select-label" for="practice">
            Стать партнером (практика)
          </label>
        </li>
        <li class="contact-form__select-option">
          <input class="contact-form__select-input" type="radio" name="theme" id="accelerator">
          <label class="contact-form__select-label" for="accelerator">
            Стать партнером (акселератор)
          </label>
        </li>
        <li class="contact-form__select-option">
          <input class="contact-form__select-input" type="radio" name="theme" id="investor">
          <label class="contact-form__select-label" for="investor">
            Стать партнером (инвестор)
          </label>
        </li>
        <li class="contact-form__select-option">
          <input class="contact-form__select-input" type="radio" name="theme" id="agency">
          <label class="contact-form__select-label" for="agency">
            Стать партнером (digital agency)
          </label>
        </li>
        <li class="contact-form__select-option">
          <input class="contact-form__select-input" type="radio" name="theme" id="learning">
          <label class="contact-form__select-label" for="learning">
            Стать партнером (обучение)
          </label>
        </li>
      </ul>
    </div>
    <p class="contact-form__field contact-form__field--textarea">
      <textarea class="contact-form__input" name="message" id="message" placeholder="Сообщение"></textarea>
      <label class="contact-form__label" for="message">
        Сообщение
      </label>
    </p>
    <div class="contact-form__bottom-wrap">
      <input class="contact-form__checkbox" id="privacy-policy" name="privacy-policy" type="checkbox">
      <label class="contact-form__checkbox-label" for="privacy-policy">
        Принимаю условия<br>
        <a class="contact-form__link" href="#">
          политики конфиденциальности
        </a>
      </label>
      <button class="contact-form__submit btn" type="submit">
        Подать заявку
      </button>
    </div>
  </form>
  <div class="form-popup">
    <div class="form-popup__top">
      <button class="form-popup__close" type="button" aria-label="Закрыть">
      </button>
      <p class="form-popup__title">
        Спасибо вам за&nbsp;проявленный интерес.
      </p>
    </div>
    <div class="form-popup__bottom">
      <p class="form-popup__text">
        Мы свяжемся с вами в самые короткие сроки!
      </p>
      <button class="form-popup__button btn" type="button">
        Хорошо
      </button>
      <img class="form-popup__logo" src="/wp-content/themes/js-corp/images/svg/logo.svg" alt="Логотип компании JSCorporation" width="52" height="30">
    </div>
  </div>
</main>

<?php get_footer();?>
