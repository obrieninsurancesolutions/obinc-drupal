<?php if ($page['help'] || ($show_messages && $messages)): ?>
  <div id="console"><div class="limiter clearfix">
    <?php print render($page['help']); ?>
    <?php if ($show_messages && $messages): print $messages; endif; ?>
  </div></div>
<?php endif; ?>

  <header id="header"><div class="limiter clearfix">
    <?php print render($page['header']); ?>
    <nav>
    <?php print render($page['navigation']); ?>
	</nav>
  </div></header>

<?php if ($page['highlighted']): ?>
  <div id="highlighted"><div class="limiter clearfix">
    <?php print render($page['highlighted']); ?>
  </div></div>
<?php endif; ?>

<section id="page" class="clearfix">

  <?php if ($page['content_top']): ?>
    <section id="content-top" class="clearfix"><?php print render($page['content_top']) ?></section>
  <?php endif; ?>

  <?php if ($page['side_nav']): ?>
    <nav id="side" class="clearfix"><?php print render($page['side_nav']) ?></nav>
  <?php endif; ?>

  <section id="main" class="clearfix">
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php if ($primary_local_tasks): ?><ul class="links clearfix"><?php print render($primary_local_tasks) ?></ul><?php endif; ?>
    <?php if ($secondary_local_tasks): ?><ul class="links clearfix"><?php print render($secondary_local_tasks) ?></ul><?php endif; ?>
    <?php if ($action_links): ?><ul class="links clearfix"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php if ($title): ?><h1 class="page-title"><?php print $title ?></h1><?php endif; ?>
    <div id="content" class="clearfix"><?php print render($page['content']) ?></div>
  </section>

  <?php if ($page['left']): ?>
    <aside id="left" class="clearfix"><?php print render($page['left']) ?></aside>
  <?php endif; ?>

  <?php if ($page['right']): ?>
    <aside id="right" class="clearfix"><?php print render($page['right']) ?></aside>
  <?php endif; ?>

</section>

<footer id="footer"><div class="limiter clearfix">
  <?php print $feed_icons ?>
  <?php print render($page['footer']) ?>
</div></footer>
