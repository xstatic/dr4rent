<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix row"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);   
    ?>
    <div class="portfolio-image col-md-8">
      <?php print render($content['field_photos']); ?>
      
      <h3 class="headline"><?php print t('Property Description');?></h3>

      <div class="clearfix"></div>
      <p><?php print render($content['body']); ?></p>
      <h3 class="headline"><?php print t('General Amenities');?></h3>
      <?php print render($content['field_amenities']); ?>    
      <div class="clearfix" style="margin-bottom: 30px;"></div>
    </div>
    <div class="portfolio-image col-md-4">


      <div class="clearfix"></div>
      <div><?php print render($content['field_bedrooms']);?></div>
      <div><?php print render($content['field_bathrooms']);?></div>
      <div><?php print render($content['field_area']);?></div>
      <div><?php print render($content['field_rate_term']);?></div>
      <div><?php print render($content['field_daily_rate']);?></div>
      <div><?php print render($content['field_weekly_rate']);?></div>
      <div><?php print render($content['field_monthly_rate']);?></div>

      <div class="clearfix"></div>
      <h3 class="headline"><?php print t('Contact Property Owner/Agent');?></h3>
      <?php 
      $block = module_invoke('authorcontact', 'block_view', '0');
      print render($block);
      ?>
    </div>
  </div>
</div> 

