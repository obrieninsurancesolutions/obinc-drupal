<div class="<?php print $classes ?> clearfix" <?php print ($attributes) ?>>
  <?php if (!empty($content)): ?>
    <?php print render($content) ?>
  <?php endif; ?>
</div>