<header class="m-hud">
  <button class="m-hud__toggle" type="button" data-toggle="Hud">(&nbsp;<span class="m-hud__open">M</span><span class="m-hud__close">&times;</span>&nbsp;)</button>

  <div class="m-hud__content">
    <div class="m-hud__blankbutton">&nbsp;</div>
    <?php snippet('logo', ['modifier' => 'm-hud__logo']) ?>

    <nav class="m-hud__pages">
      <?php if ($page == 'index') : ?>
        <a class="m-hud__link" href="<?= page('about')->url() ?>">About</a>
      <?php elseif ($page == 'about') : ?>
        <a class="m-hud__link" href="<?= url($site) ?>">Index</a>
      <?php endif ?>
      <a class="m-hud__link" href="<?= $site->shop() ?>" target="_blank">Shop</a>
      <a class="m-hud__link" href="<?= $site->instagram() ?>" target="_blank">Instagram</a>
      <a class="m-hud__link" href="mailto:<?= $site->email() ?>">Email</a>
    </nav>
  </div>
</header>
<span class="m-hud__dim" data-toggle="Hud"></span>
