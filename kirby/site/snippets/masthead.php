<div class="o-spacer" data-waypoint="Masthead"></div>

<div class="m-masthead">
  <div class="m-masthead__blankbutton">&nbsp;</div>
  <?php snippet('logo', ['modifier' => 'm-masthead__content']) ?>

  <?php if ($page == 'index') : ?>
    <a class="m-next" href="<?= page('about')->url() ?>">
      <?php for ($i = 0; $i < 3; $i++) : ?>
        <span class="m-next__word">
          <span class="m-next__text">
            <svg class="svg-about" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 581 174"><path d="M31.25 106.25l-2 5.25h54.5l23.5 60.5H133L72.5 12.75h-6.25L56 39.25l25.75 67h-50.5zM0 172h19.25C20 159.25 22 145.75 23 137l-2.5-1c-6 12-11.75 21.25-20.5 36zm196.5 0c20.75-1.25 35.75-19.5 35.75-51.75 0-30-9-45-30-45-10 0-19.5 3.25-26.25 8.25v-2c6.75-8 21.25-16.75 35.75-16.75 29 0 43.25 19.25 43.25 51.5C255 151 232 172 196.5 174v-2zm-7.25 2c-15.25-.75-32-3.5-41-6.5V3L170 0v164.75c4.75 3.75 13.5 6.5 19.25 7.25v2zM319 174v-2c-4.75-1-8.75-2.75-12-5.5-12-9.25-15.75-26-15.75-47S295 81.5 307 72.25c3.25-2.25 7.25-4.25 12-5.5v-2c-29.25 2.75-50.5 26-50.5 54.75 0 28.5 21.25 51.75 50.5 54.5zm10-2v2c29.25-2.75 50.5-26 50.5-54.5 0-28.75-21.25-52-50.5-54.75v2c4.75 1.25 8.75 3.25 12 5.5 12.25 9.25 16 26.25 16 47.25s-3.75 37.75-16 47c-3.25 2.75-7.25 4.5-12 5.5zm101 1.75c13.75 0 27.75-8.5 34.25-17.75v-1.75c-7.75 4.75-14.5 7.25-22.5 7.25-15 0-21.5-7.25-21.5-21.25v-76l-21.5 3.25V142c0 19 10.25 31.75 31.25 31.75zM470 67.5v105.75l21.5-2.75V64.25L470 67.5zM549.5 174c16 0 27.25-7.25 31-12.5V159c-3.25 2-11.25 4-19 4-14.75 0-17.75-10.5-17.75-23.5V74h33v-7.25h-33v-35L522.25 39v27.75H506V74h16.25v68.25c0 20.75 8.25 31.75 27.25 31.75z"/></svg></span><span class="m-next__arrow"><svg class="svg-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182 174"><path d="M0 111l141-10v-2L0 89z"/><path d="M182 100l-79-74h-3l53 74-53 74h3z"/></svg>
          </span>
        </span>
      <?php endfor; ?>
    </a>
  <?php endif; ?>
</div>
