<?php if ($main_menu): ?>
<div id="main-menu" class="clearfix">
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class='container'>
        <a class='brand' href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
        <?php if ($search): ?>
        <div id="nav-search">
          <?php if ($search): print render($search); endif; ?>
        </div>
        <?php endif; ?>
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
        <div class="nav-collapse"><?php print render($main_menu_expanded); ?></div>
      </div><!-- /.container -->
    </div><!-- /.navbar-inner -->
  </div><!-- /.navbar -->
</div><!-- /#main-menu -->
<?php endif; ?>

<div id="main" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="<?php if (($search)): print 'span8'; else: print 'span12'; endif; ?>">
        <?php if ($logo): ?>
        <div id="logo"> <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" role="presentation" /> </a></div>
        <!-- /#logo -->
        <?php endif; ?>
        <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
        <!-- /#name-and-slogan -->
        <?php endif; ?>
        <?php if ($page['header']): ?>
        <div id="header-content" class="row-fluid"><?php print render($page['header']); ?></div>
        <!-- /#header-content -->
        <?php endif; ?>
      </div>
    </div>    
    <div id="main-content" class="row">
      <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_first']); ?></div>
      </div>
      <!-- /#sidebar-first -->
      <?php endif; ?>
      <div id="content" class="<?php if (($page['sidebar_first']) && ($page['sidebar_second'])): print 'span6'; elseif (($page['sidebar_first']) || ($page['sidebar_second'])): print 'span9'; else: print 'span12'; endif; ?>">
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
            <?php if ($page['help']): ?>
            <div id="help" class="clearfix"> <?php print render($page['help']); ?> </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
          </div>
          <?php if ($page['content_top']): ?>
          <div id="content-top" class="row-fluid"> <?php print render($page['content_top']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_upper']): ?>
          <div id="content-upper" class="row-fluid"> <?php print render($page['content_upper']); ?> </div>
          <?php endif; ?>
          <?php if (($page['content']) || ($feed_icons)): ?>
          <div id="content-body" class="row-fluid"> <?php print render($page['content']); ?> <?php print $feed_icons; ?> </div>
          <?php endif; ?>
          <?php if ($page['content_lower']): ?>
          <div id="content-lower" class="row-fluid"> <?php print render($page['content_lower']); ?> </div>
          <?php endif; ?>
          <?php if ($page['content_bottom']): ?>
          <div id="content-bottom" class="row-fluid"> <?php print render($page['content_bottom']); ?> </div>
          <?php endif; ?>
        </div>
        <!-- /#content-wrap -->
      </div>
      <!-- /#content -->
      <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="sidebar span3">
        <div class="row-fluid"><?php print render($page['sidebar_second']); ?></div>
      </div>
      <!-- /#sidebar-second -->
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- /#main, /#main-wrapper -->
<?php if ($page['footer']): ?>
<div id="footer" class="clearfix">
  <div class="container">
    <div id="footer-content" class="row-fluid"> <?php print render($page['footer']); ?> </div>
  </div>
</div>
<!-- /#footer -->
<?php endif; ?>
