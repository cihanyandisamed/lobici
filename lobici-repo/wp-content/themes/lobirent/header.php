<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <img class="brand-logo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo/lobirent-logo.jpg'); ?>" alt="Lobirent logo">
      <span>Lobirent</span>
    </a>
    <nav class="main-nav lobirent-top-links">
      <a href="https://www.webtekno.com/yapay-zeka" target="_blank" rel="noopener noreferrer">Yapay Zekâ</a>
      <a href="https://www.webtekno.com/mobil" target="_blank" rel="noopener noreferrer">Mobil</a>
      <a href="https://www.webtekno.com/urun" target="_blank" rel="noopener noreferrer">Ürün</a>
      <a href="https://www.webtekno.com/oyun" target="_blank" rel="noopener noreferrer">Oyun</a>
      <a href="https://www.webtekno.com/otomobil" target="_blank" rel="noopener noreferrer">Otomobil</a>
      <a href="https://www.webtekno.com/uygulama-yazilim" target="_blank" rel="noopener noreferrer">Uygulama / Yazılım</a>
      <a href="https://www.webtekno.com/donanim" target="_blank" rel="noopener noreferrer">Donanım</a>
      <a href="https://www.webtekno.com/sinema" target="_blank" rel="noopener noreferrer">Sinema-Dizi</a>
    </nav>
  </div>
</header>
<?php
function lobirent_fallback_menu() {
  echo '<ul>';
  echo '<li><a href="#gundem">Gündem</a></li>';
  echo '<li><a href="#haberler">Haberler</a></li>';
  echo '<li><a href="#forum">Forum</a></li>';
  echo '<li><a href="#kategoriler">Kategoriler</a></li>';
  echo '</ul>';
}
?>
<main>
