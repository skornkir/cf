<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div class="layout-center-wrapper">

    <header class="header" role="banner">

        <div class="first-header-wrapper">
            <div class="first-header">

                <nav role="navigation" class="hamburger">
                    <div id="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                        <ul id="menu">
                            <div class="logo">
                                <a href="/">
                                    <img src="/sites/all/themes/podcast/img/logo-mobile.png">
                                </a>
                            </div>
                            <?php print render($page['highlighted']); ?>
                        </ul>
                    </div>
                </nav>

                <div class="navigation-desktop">
                    <div class="logo">
                        <a href="/">
                            <img src="/sites/all/themes/podcast/img/logo.png">
                        </a>
                    </div>
                    <?php print render($page['highlighted']); ?>
                </div>
            </div>
        </div>
        <div class="second-header">
            <?php if(drupal_is_front_page()): ?>
                <?php print render($page['header']); ?>
            <?php else: ?>
                <?php print $title_header; ?>
                <?php print render($page['header']); ?>
            <?php endif; ?>
        </div>
        <?php  print $breadcrumb; ?>
    </header>
    <?php if(isset($page['third_header'])): ?>
        <div class="third-header-wrapper">
            <div class="third-header">
                <?php print render($page['third_header']); ?>
            </div>
        </div>
    <?php endif; ?>



  <div class="layout-3col layout-swap">

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
      // Decide on layout classes by checking if sidebars have content.
      $content_class = 'layout-3col__full';
      $sidebar_first_class = $sidebar_second_class = '';
      if ($sidebar_first && $sidebar_second):
        $content_class = 'layout-3col__right-content';
        $sidebar_first_class = 'layout-3col__first-left-sidebar';
        $sidebar_second_class = 'layout-3col__second-left-sidebar';
      elseif ($sidebar_second):
        $content_class = 'layout-3col__left-content';
        $sidebar_second_class = 'layout-3col__right-sidebar';
      elseif ($sidebar_first):
        $content_class = 'layout-3col__right-content';
        $sidebar_first_class = 'layout-3col__left-sidebar';
      endif;
    ?>

      <?php print $messages; ?>

    <main class="<?php print $content_class; ?>" role="main">

      <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-content">Back to top</a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </main>


    <div class="after-main">
      <?php print render($page['navigation']); ?>
    </div>

    <?php if ($sidebar_first): ?>
      <aside class="<?php print $sidebar_first_class; ?>" role="complementary">
        <?php print $sidebar_first; ?>
      </aside>
    <?php endif; ?>

    <?php if ($sidebar_second): ?>
      <aside class="<?php print $sidebar_second_class; ?>" role="complementary">
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

      <div style="clear: both;"></div>

  </div>

    <div class="bottom-region-wrapper">
        <div class="bottom-region">
            <?php print render($page['bottom']); ?>
        </div>
    </div>
    <div style="clear: both;"></div>

    <div class="footer-wrapper">
        <?php print render($page['footer']); ?>
    </div>

</div>