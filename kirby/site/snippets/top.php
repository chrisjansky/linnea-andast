<div class="m-top">
  <?php if ($page == 'index') : ?>
    <a class="m-top__scroll" href="#work"></a>
  <?php elseif ($page == 'about') : ?>
    <a class="m-top__scroll" href="#about"></a>
  <?php endif ?>
  <nav class="m-top__nav">
    <?php if ($page == 'index') : ?>
      <a class="m-top__link" href="<?= page('about')->url() ?>">About</a>
    <?php elseif ($page == 'about') : ?>
      <a class="m-top__link" href="<?= url($site) ?>">Index</a>
    <?php endif ?>
    <a class="m-top__link" href="<?= $site->shop() ?>" target="_blank">Shop</a>
    <a class="m-top__link" href="<?= $site->instagram() ?>" target="_blank">Instagram</a>
    <a class="m-top__link" href="mailto:<?= $site->email() ?>">Email</a>
  </nav>
</div>
