<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
      <meta charset="<?php bloginfo( 'charset' ) ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width">
      <title><?php wp_title( '|', true, 'right' ) ?></title>
      <meta name="author" content="">
      <link rel="author" href="">
      <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
      <header class="header">
        <a class="header__lg" href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>"></a>
        <div class="header__wrapper">
          <nav class="header__nav">
            <ul class="header__nav__list">
              <li class="header__nav__list__item"><a href="/aconcagua/hacer">Hacer</a></li>
              <li class="header__nav__list__item"><a href="/aconcagua/pensar">Pensar</a></li>
              <li class="header__nav__list__item"><a href="/aconcagua/explorar">Explorar</a></li>
              <li class="header__nav__list__item"><a href="/aconcagua/cambiar">Cambiar</a></li>
            </ul>
          </nav>
        </div>
        <a href="#" class="header__hamb"></a>
      </header>



		<!-- <header id="page-header">
			<h1 id="page-logo">
				<?php if (!is_front_page()): ?>
					<a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>">
						<?php bloginfo('name') ?>
					</a>
				<?php else: ?>
					<span>
						<?php bloginfo('name') ?>
					</span>
				<?php endif; ?>
			</h1>
			<?php wp_nav_menu(array(
				'theme_location' => 'main-nav',
				'container'      => 'nav',
				'container_id'   => 'primary-nav'
			)) ?>
		</header> -->



    <div class="main">
