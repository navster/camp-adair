<div class='row' id='wrapper'>
<div class='twelve columns'>
  <?php include 'includes/page-menu.php'; ?>
  <?php include 'includes/page-slider.php'; ?>

  <div class='row' id='main'>
    <div class='eight columns'id="content">
        
      <?php include 'includes/page-featured.php'; ?>
      <?php include 'includes/page-header.php'; ?>
          <?php if (($page['content'])): ?>
            <div id="content-body" class="row-fluid"> <?php print render($page['content']); ?></div>
          <?php endif; ?>
        
            <div class="row">
              <div class="twelve columns">
                <div class="panel">
                  <h4>Get in touch and make a booking!</h4>
                  <div class="row">
                    <div class="nine columns">
                      <p>We'd love to hear from you!</p>
                    </div>
                    <div class="three columns">
                      <a href="#" class="radius button right">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        
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
