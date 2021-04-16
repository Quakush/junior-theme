<?php

get_header(); ?>

<main>

<main>
   <section class="main-offer  main-offer--companies">
       <div class="container">
           <h1 class="title"><span class="title__colored">Проекты и</span><br>специалисты</h1>
           <p class="main-offer__text  main-offer__text--mobile">
               Находим новые проекты для развития вашего
               бизнеса. Организуем акселератор под ваши задачи.
               Проверенные специалисты для трудоустройства
               в вашу компанию.
           </p>
           <p class="main-offer__text  main-offer__text--desktop">
               Находим новые проекты для развития вашего
               бизнеса. Организуем акселератор под ваши задачи.
               Проверенные специалисты для трудоустройства
               в вашу компанию.
           </p>
           <a class="btn  btn--blue  btn--big  companies__btn" href="#">Стать партнером</a>
       </div>
   </section>
   <section class="trainee">
       <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
       <div class="trainee__background-wrap">
           <div class="container">
               <div class="trainee__wrap">
                   <h2 class="title__secondary  trainee__title"><span class="title__colored">Стажеры</span> для вас</h2>
                    <p>
                       После обучения начинающие специалисты проходят практику в наших
                       проектах, оттачивают свои навыки в командах и по окончанию практики
                       готовы к трудоустройству в вашу компанию. Ищите стажеров или
                       расширяете бизнес? Свяжитесь с нами!
                    </p>
                    <a class="btn  btn--blue  btn--big  companies__btn" href="#">Стать партнером</a>
               </div>
           </div>
       </div>
       <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
   </section>
   <section class="companies-accelerator">
       <div class="container">
           <h2 class="title__secondary  companies__title">Корпоративный акселератор</h2>
           <p>
               Программа ускоренного развития для проектов инновационной
               и ИТ напрвленности через взаимодействие своих решений в компаниях.
           </p>
           <ul class="companies__list">
               <li class="companies__item  companies__item--search">
                   <a class="companies__link" href="#">Поиск проектов</a>
                   <p class="companies__text companies__text--mobile">Вы один или у вас есть команда, с которой вы планируете запустить бизнес.</p>
                   <p class="companies__text companies__text--desktop">Организуем поиск проектов по необходимым направлениям и проведем их обучение.</p>
               </li>
               <li class="companies__item  companies__item--scoring">
                  <a class="companies__link" href="#">Скоринг команд</a>
                  <p class="companies__text companies__text--mobile">Вы закрепились на своем рынке, хотите лучше понимать свой бизнес и улучшать показатели.</p>
                  <p class="companies__text companies__text--desktop">Проверим проекты на предмет соответствия вашим критериям.</p>
              </li>
              <li class="companies__item  companies__item--programm">
                 <a class="companies__link" href="#">Образовательная программа</a>
                 <p class="companies__text companies__text--mobile">У вас интернет-проект, не знаете как начать продавать или выйти на новый рынок.</p>
                 <p class="companies__text companies__text--desktop">У вас интернет-проект, не знаете как начать продавать или выйти на новый рынок.</p>
             </li>
             <li class="companies__item  companies__item--tracks">
                  <a class="companies__link" href="#">Трекеры</a>
                  <p class="companies__text companies__text--mobile">С проектами будут работать специалисты в области маркетинга и тд.</p>
                  <p class="companies__text companies__text--desktop">С проектами будут работать специалисты в области маркетинга и тд.</p>
              </li>
           </ul>
       </div>
   </section>
   <section class="programms">
       <img class="clouds" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
       <div class="programms__background-wrap">
           <div class="container">
               <h2 class="title__secondary  programms__title"><span class="title__colored">Образовательные</span> программы</h2>
               <p class="programms__text--mobile">
                   Компании теряют много денег на обучение сотрудников во время работы.
                   Разработайте свою собственную программу обучения и ваши стажеры
                   заранее будут готовы к работе в вашей компании.
               </p>
               <p class="programms__text--desktop">
                    У вас есть собственная программа обучения для будущих сотрудников?
                    Вы можете разместить ее в нашем приложении Sokrat, а мы уже позаботимся,
                    чтобы о ней узнало как можно болше людей.
               </p>
               <a class="btn btn--big  btn--blue  programms__btn" href="#">Стать партнером</a>
           </div>
       </div>
       <img class="clouds  clouds--bottom" src="/wp-content/themes/js-corp/images/svg/clouds.svg">
   </section>

   <?php get_template_part('/includes/block', 'ask_questions');?>
</main>

<?php get_footer();?>
