<!DOCTYPE html>
<html>
  <head>
    <?php echo NanoFramework\Helpers\Page::render_for_title(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo NanoFramework\Helpers\Page::render_for_metas(); ?>
    <?php echo NanoFramework\Helpers\Page::render_for_css(); ?>
  </head>
  <body>
    <?php echo $content_for_layout; ?>

    <?php echo NanoFramework\Helpers\Page::render_for_javascripts(); ?>
  </body>
</html>
