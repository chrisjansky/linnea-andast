<?php snippet('header') ?>

<body class="Inverse">

  <div id="barba-wrapper">
    <div class="barba-container">
      <?php snippet('hud', ['page' => 'about']) ?>

      <div class="m-constraint">
        <?php snippet('masthead') ?>
        <div class="m-constraint__holder">
          <?php if($file = $page->file()): ?>
            <img class="m-constraint__portrait" data-appear="image" data-src="<?= $file->resize(2880)->url() ?>" data-srcset="<?= $file->resize(800)->url() ?> 800w, <?= $file->resize(1440)->url() ?> 1440w, <?= $file->resize(1920)->url() ?> 1920w, <?= $file->resize(2880)->url() ?> 2880w" alt="Portrait">
          <?php endif ?>
        </div>
        <div class="m-constraint__pad"></div>
      </div>

      <?php snippet('top', ['about' => 'index']) ?>

      <div class="m-about" id="about">
        <div class="m-about__content">
          <?php if (!$page->about()->empty()) : ?>
            <p class="m-about__text" data-appear="normal"><?= $page->about()->kirbytext() ?></p>
          <?php endif ?>

          <h1 class="m-about__title" data-appear="normal">( Exhibitions )</h1>
          <ul class="m-about__list">
            <?php foreach ($page->exhibitions()->toStructure() as $exhibit) : ?>
              <li><strong class="m-about__year" data-appear="normal"><?= $exhibit->date('Y', 'year') ?></strong>
                <ul class="m-about__bulletlist">
                  <?php foreach ($exhibit->events()->split(',') as $event) : ?>
                    <li data-appear="normal"><?= $event ?></li>
                  <?php endforeach ?>
                </ul>
              </li>
            <?php endforeach ?>
          </ul>
          <h1 class="m-about__title" data-appear="normal">( Clients )</h1>
          <ul class="m-about__bulletlist">
            <?php foreach ($page->clients()->split(',') as $client) : ?>
              <li data-appear="normal"><?= $client ?></li>
            <?php endforeach ?>
          </ul>

          <h1 class="m-about__title" data-appear="normal">( Press )</h1>
          <ul class="m-about__bulletlist">
            <?php foreach ($page->press()->toStructure() as $press) : ?>
              <li data-appear="normal">
                <a href="<?= $press->link() ?>"><?= $press->name() ?></a>
              </li>
            <?php endforeach ?>
          </ul>

          <div class="m-about__contact o-contact">
            <a class="o-contact__link" href="<?= $site->shop() ?>" target="_blank" data-appear="normal">Shop</a>
            <span class="o-contact__bullet" data-appear="normal"></span>
            <a class="o-contact__link" href="<?= $site->instagram() ?>" target="_blank" data-appear="normal">Instagram</a>
            <span class="o-contact__bullet" data-appear="normal"></span>
            <a class="o-contact__link" href="mailto:<?= $site->email() ?>" data-appear="normal">Email</a>
          </div>
        </div>
      </div>

      <div class="m-back">
        <a class="m-back__link" href="<?= url($site) ?>" data-appear="stagger"><span class="m-back__word" data-appear-group><span class="m-back__text" data-appear-child><svg class="svg-index" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487 174"><path d="M.75 14.5V172H25.5V14.5H.75zM126.5 98.25V172h21.75V96c0-19-10.5-31.25-30.5-31.25-14 0-27.75 8.5-35 17.5V84c7.25-4.75 14.5-7 22.25-7 15 0 21.5 7.25 21.5 21.25zM55.25 67.5V172H77V64.75L55.25 67.5zM213 174c-26.75 0-45-19.75-45-53 0-33.75 27.75-55 55.5-56.25v2c-19.25 2-33.25 20.75-33.25 49 0 32 14 47.25 33.25 47.25 8.25 0 15.25-4.25 19.25-8v2c-4 7.75-13.25 17-29.75 17zm35.75-100.75c-4.25-3-7.5-4.75-15.25-6.5v-2c5.75.75 10.5 1.25 15.25 2V3l21.5-3v171.25l-21.5 2v-100zM341 174c-32 0-51.25-23.25-51.25-56.25C289.75 87 314.5 67 337.25 65v2c-18 4.75-25.5 23-25.5 44 0 32 16.75 46.5 38.5 46.5 14.25 0 25.25-4.75 32.5-11.5v2.75C377.25 159.5 364 174 341 174zm-19.75-68.25l40.5-2.5c0-20.25-6-34.5-16-36.25v-2c25 2 36 20.25 36 43h-60.5v-2.25zM388 172c11.75-11.75 19.75-19.5 28-29.25l1.25 1.75c-3 8-6.25 17.5-10 27.5H388zm0-105.25h24L484 172h-24L388 66.75zm71 27c2.25-8.75 5.25-15.75 8.25-27h19.25C476 78 470.25 84.75 460.25 95.5L459 93.75z"/></svg></span><span class="m-back__arrow" data-appear-child><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182 174"><path d="M182 111L41 101v-2l141-10z"/><path d="M0 100l79-74h3l-53 74 53 74h-3z"/></svg></span></span><span class="m-back__word" data-appear-group><span class="m-back__text" data-appear-child><svg class="svg-index" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487 174"><path d="M.75 14.5V172H25.5V14.5H.75zM126.5 98.25V172h21.75V96c0-19-10.5-31.25-30.5-31.25-14 0-27.75 8.5-35 17.5V84c7.25-4.75 14.5-7 22.25-7 15 0 21.5 7.25 21.5 21.25zM55.25 67.5V172H77V64.75L55.25 67.5zM213 174c-26.75 0-45-19.75-45-53 0-33.75 27.75-55 55.5-56.25v2c-19.25 2-33.25 20.75-33.25 49 0 32 14 47.25 33.25 47.25 8.25 0 15.25-4.25 19.25-8v2c-4 7.75-13.25 17-29.75 17zm35.75-100.75c-4.25-3-7.5-4.75-15.25-6.5v-2c5.75.75 10.5 1.25 15.25 2V3l21.5-3v171.25l-21.5 2v-100zM341 174c-32 0-51.25-23.25-51.25-56.25C289.75 87 314.5 67 337.25 65v2c-18 4.75-25.5 23-25.5 44 0 32 16.75 46.5 38.5 46.5 14.25 0 25.25-4.75 32.5-11.5v2.75C377.25 159.5 364 174 341 174zm-19.75-68.25l40.5-2.5c0-20.25-6-34.5-16-36.25v-2c25 2 36 20.25 36 43h-60.5v-2.25zM388 172c11.75-11.75 19.75-19.5 28-29.25l1.25 1.75c-3 8-6.25 17.5-10 27.5H388zm0-105.25h24L484 172h-24L388 66.75zm71 27c2.25-8.75 5.25-15.75 8.25-27h19.25C476 78 470.25 84.75 460.25 95.5L459 93.75z"/></svg></span><span class="m-back__arrow" data-appear-child><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182 174"><path d="M182 111L41 101v-2l141-10z"/><path d="M0 100l79-74h3l-53 74 53 74h-3z"/></svg></span></span><span class="m-back__word" data-appear-group><span class="m-back__text" data-appear-child><svg class="svg-index" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487 174"><path d="M.75 14.5V172H25.5V14.5H.75zM126.5 98.25V172h21.75V96c0-19-10.5-31.25-30.5-31.25-14 0-27.75 8.5-35 17.5V84c7.25-4.75 14.5-7 22.25-7 15 0 21.5 7.25 21.5 21.25zM55.25 67.5V172H77V64.75L55.25 67.5zM213 174c-26.75 0-45-19.75-45-53 0-33.75 27.75-55 55.5-56.25v2c-19.25 2-33.25 20.75-33.25 49 0 32 14 47.25 33.25 47.25 8.25 0 15.25-4.25 19.25-8v2c-4 7.75-13.25 17-29.75 17zm35.75-100.75c-4.25-3-7.5-4.75-15.25-6.5v-2c5.75.75 10.5 1.25 15.25 2V3l21.5-3v171.25l-21.5 2v-100zM341 174c-32 0-51.25-23.25-51.25-56.25C289.75 87 314.5 67 337.25 65v2c-18 4.75-25.5 23-25.5 44 0 32 16.75 46.5 38.5 46.5 14.25 0 25.25-4.75 32.5-11.5v2.75C377.25 159.5 364 174 341 174zm-19.75-68.25l40.5-2.5c0-20.25-6-34.5-16-36.25v-2c25 2 36 20.25 36 43h-60.5v-2.25zM388 172c11.75-11.75 19.75-19.5 28-29.25l1.25 1.75c-3 8-6.25 17.5-10 27.5H388zm0-105.25h24L484 172h-24L388 66.75zm71 27c2.25-8.75 5.25-15.75 8.25-27h19.25C476 78 470.25 84.75 460.25 95.5L459 93.75z"/></svg></span><span class="m-back__arrow" data-appear-child><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182 174"><path d="M182 111L41 101v-2l141-10z"/><path d="M0 100l79-74h3l-53 74 53 74h-3z"/></svg></span></span></a>

        <div class="m-back__footer">
          <small class="o-author" data-appear="normal">Website by <a href="https://christianjansky.name" target="_blank">Christian Jánský</a>
          </small>
        </div>
      </div>
    </div>
  </div>

<?php snippet('footer') ?>
