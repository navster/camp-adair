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
          <ul class="left">
            <?php print render($main_menu_expanded); ?>
          </ul>
        </section>
      </nav>
    </div>
  </div>

<div id="main" class="clearfix">
  <div class="container">
    <div id="main-content" class="row">
      <div id="content">
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
      <?php if ($page['sidebar']): ?>
      <div id="sidebar-second" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- /#main, /#main-wrapper -->

<div id="footer" class="clearfix">
  <div class="container">
    <div id="footer-content" class="row-fluid"> <?php //print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
