<div class="<?php print $classes ?> clearfix" <?php print ($attributes) ?>>
  <div class="block-wrapper">
    <?php if (!empty($content)): ?>
      <?php print render($content) ?>
    <?php endif; ?>
  </div>
</div>