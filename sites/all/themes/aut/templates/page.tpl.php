<div class='row' id='wrapper'>
<div class='twelve columns'>
  <div class='row'>
    <div class="twelve columns">
      <nav class="top-bar">
        <ul>
          <!-- Title Area -->
          <li class='name'><h1><a href='#'><?php print $site_name; ?></a></h1></li>
          <li class="toggle-topbar"><a href="#"></a></li>
        </ul>

        <section>
          <!-- Left Nav Section -->
          <!--<ul class="left">
            <?php print render($main_menu_expanded); ?>
          </ul>-->
          <ul class='left'>
            <li class="divider"></li>
            <li><a href='#'>Home</a></li>          
            <li><a href='#'>Activities</a></li>
            <li><a href='#'>Group Bookings</a></li>
            <li><a href='#'>Services and Facilities</a></li>
            <li><a href='#'>Make a Booking</a></li>
          </ul>
        </section>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="twelve columns">
      <div id="slider">
        <img src="<?php echo base_path() . path_to_theme() ?>/images/slide1.jpg" />
        <img src="<?php echo base_path() . path_to_theme() ?>/images/slide2.jpg" />
        <img src="<?php echo base_path() . path_to_theme() ?>/images/slide3.jpg" />
      </div>

      <hr />
    </div>
  </div>  

  <div class='row' id='main'>
    
      <div class='eight columns'id="content">
        <div id="content-wrapper">
          <div id="content-head" class="row-fluid">
            <div id="highlighted" class="clearfix"><?php print render($page['highlighted']); ?></div>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1 class="title" id="page-title"> <?php print $title; ?> </h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
            <div class="tabs"> <?php print render($tabs); ?> </div>
            <?php endif; ?>
            <?php if ($messages): ?>
            <div id="console" class="clearfix"><?php print $messages; ?></div>
            <?php endif; ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
          </div>
          <?php if (($page['content'])): ?>
          <div id="content-body" class="row-fluid"> <?php print render($page['content']); ?></div>
          <?php endif; ?>
        </div>
        <!-- /#content-wrap -->
      </div>
      <!-- /#content -->

      <div id="sidebar" class="three columns">
        <div class="row-fluid"><?php print render($page['sidebar']); ?></div>
      </div>
      <!-- /#sidebar -->
  </div>
</div>
</div>
<div id="footer" class="clearfix">
  <div class="container">
    <div id="footer-content" class="row-fluid"> <?php //print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
