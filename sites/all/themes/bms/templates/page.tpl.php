<?php if ($page['help'] || ($show_messages && $messages)): ?>
  <div id="console">
    <div class="limiter clearfix">
      <?php print render($page['help']); ?>
      <?php if ($show_messages && $messages): print $messages; endif; ?>
    </div>
  </div>
<?php endif; ?>

<header class="header">
  <div class="limiter clearfix">
    <?php print render($page['header']); ?>
    <nav class="main-nav">
      <a href="" class="mobile-btn">Menu</a>
      <?php print render($page['navigation']); ?>
  	</nav>
  </div>
</header>

<?php if ($page['highlighted']): ?>
  <div id="highlighted">
    <div class="limiter clearfix">
      <?php print render($page['highlighted']); ?>
    </div>
  </div>
<?php endif; ?>

<section class="main clearfix">

  <?php if ($page['content_top']): ?>
    <section class="content-top clearfix">
      <?php print render($page['content_top']) ?>
    </section>
  <?php endif; ?>

  <?php if ($page['side_nav']): ?>
    <nav class="side-nav clearfix">
      <?php print render($page['side_nav']) ?>
    </nav>
  <?php endif; ?>

  <section class="content clearfix">
    <?php if ($title): ?>
      <h1 class="page-title"><?php print $title ?></h1>
    <?php endif; ?>
    <?php print render($page['content']) ?>
  </section>

  <?php if ($page['left']): ?>
    <aside class="sidebar-left sidebar clearfix">
      <?php print render($page['left']) ?>
    </aside>
  <?php endif; ?>

  <?php if ($page['right']): ?>
    <aside class="sidebar-right sidebar clearfix">
      <?php print render($page['right']) ?>
    </aside>
  <?php endif; ?>

</section>

<footer class="footer">
  <div class="limiter clearfix">
    <?php print $feed_icons ?>
    <?php print render($page['footer']) ?>
  </div>
</footer>