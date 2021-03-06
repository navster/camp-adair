<div class='row' id='wrapper'>
<div class='twelve columns'>
  <?php include 'includes/page-menu.php'; ?>
  <?php include 'includes/page-slider.php'; ?>

  <div class='row' id='main'>
    <div class='eight columns'id="content">
      <?php 
        if (drupal_is_front_page()) { 
          include 'includes/page-featured.php';
        }
      ?>
      <?php include 'includes/page-header.php'; ?>
      <?php if ($page['content']): print render($page['content']); endif ?>
      <?php if (drupal_is_front_page()): include 'includes/page-calltoaction.php'; endif ?>
        
    </div><!-- /#content -->  
    <div id="sidebar" class="three columns">
      <div class="row-fluid"><?php print render($page['sidebar']); ?></div>
    </div><!-- /#sidebar -->
  </div>
</div>
<div id="footer" class="clearfix">
  <div class="container">
    <div id="footer-content" class="row-fluid"> <?php //print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
