<?php snippet('header') ?>

<body class="Normal">

  <div id="barba-wrapper">
    <div class="barba-container">
      <?php snippet('hud', ['page' => 'index']) ?>

      <?php snippet('masthead', ['page' => 'index']) ?>

      <?php snippet('top', ['page' => 'index']) ?>

      <div class="m-projects" id="work" data-slider>

        <?php foreach ($page->children() as $artwork): ?>
          <?php if($artwork->isVisible() && $file = $artwork->file()): ?>
            <figure class="m-projects__item">
              <div class="m-projects__blankbutton">&nbsp;</div>
              <?php if ($file->type() == "video") : ?>
                <div class="m-projects__frame--video">
                  <video class="m-projects__video" src="<?= $file->url() ?>" data-video preload="auto"></video>
                </div>
              <?php else : ?>
                <div class="m-projects__frame">
                  <img class="m-projects__image" data-flickity-lazyload-src="<?= $file->resize(2880)->url() ?>" data-flickity-lazyload-srcset="<?= $file->resize(800)->url() ?> 800w, <?= $file->resize(1440)->url() ?> 1440w, <?= $file->resize(1920)->url() ?> 1920w, <?= $file->resize(2880)->url() ?> 2880w">
                </div>
              <?php endif; ?>

              <figcaption class="m-projects__caption">
                <?php if($artwork->info()->bool()): ?>
                  <span class="m-projects__info">
                    <h1 class="m-projects__title"><?= $artwork->title() ?></h1>
                    <?php if (!$artwork->year()->empty()): ?>
                      <mark class="m-projects__year"><?= $artwork->date('Y', 'year') ?></mark>
                    <?php endif ?>
                  </span>

                  <?php if (!$artwork->medium()->empty() || !$artwork->unit()->empty()) : ?>
                    <strong class="m-projects__media">
                      <?php if (!$artwork->medium()->empty()) { echo $artwork->medium(); } ?><?php if (!$artwork->medium()->empty() && !$artwork->unit()->empty()) { echo ","; } ?>
                      <?php if (!$artwork->width()->empty() && !$artwork->height()->empty() && !$artwork->unit()->empty()) : ?>
                        <?= $artwork->width() ?>&times;<?= $artwork->height() ?>
                        <?= $artwork->unit() ?>
                      <?php endif ?>
                    </strong>
                  <?php endif ?>

                  <?php if (!$artwork->shop()->empty()): ?>
                    <span class="m-projects__action">
                      <a class="m-projects__button" href="<?= $artwork->shop() ?>" target="_blank">Buy</a>
                    </span>
                  <?php endif ?>
                <?php endif ?>
              </figcaption>
            </figure>
          <?php endif ?>
        <?php endforeach ?>

        <div class="m-projects__item">
          <div class="m-projects__contact o-contact">
            <a class="o-contact__link" href="<?= $site->shop() ?>" target="_blank">Shop</a>
            <span class="o-contact__bullet"></span>
            <a class="o-contact__link" href="<?= $site->instagram() ?>" target="_blank">Instagram</a>
            <span class="o-contact__bullet"></span>
            <a class="o-contact__link" href="mailto:<?= $site->email() ?>">Email</a>
          </div>
        </div>
      </div>

    </div>
  </div>
<?php snippet('footer') ?>
