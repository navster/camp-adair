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