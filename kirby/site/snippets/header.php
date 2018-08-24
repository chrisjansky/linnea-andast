<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="author" content="Christian Jánský; www.christianjansky.name">

  <link rel="stylesheet" href="https://use.typekit.net/odw2sqi.css">
  <link rel="shortcut icon" sizes="16x16 32x32 48x48 64x64 128x128" href="assets/images/favicon.ico">

  <?= css('assets/css/style-min.css') ?>

</head>
