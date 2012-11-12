<?php ?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <!-- Markup for the HEAD section (including meta tags, keyword tags, and so on -->
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <!-- A modified version of the page title, for use in the TITLE tag -->
  <title><?php print $head_title; ?></title>
  <!-- Style tags necessary to import all CSS files for the page -->
  <?php print $styles; ?>
  <!-- Script tags necessary to load the JavaScript files and settings for the page -->
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body class="<?php print $attributes;?>">
  <!-- Initial markup from any modules that have altered the page. This variable should always be output first, before all other dynamic content -->
  <?php print $page_top; ?>
  <!-- The rendered page content -->
  <?php print $page; ?>
  <!-- Final closing markup from any modules that have altered the page. This variable should always be output last, after all other dynamic content -->
  <?php print $page_bottom; ?>
</body>
</html>