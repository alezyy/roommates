<?php
/**
 * @file
 * This template includes the vertical timeline view.
 */

?>

<div id="timelineContainer">
<div class="timelineToggle"><p><a class="expandAll"><?php print t("+ expand all"); ?></a></p></div>

<?php foreach ($years as $year): ?>

<div class="timelineMajor">
  <h2 class="timelineMajorMarker"><span><?php print $year; ?></span></h2>
   
    
     <?php foreach ($items as $item): ?>
     
      <?php if($item['dates_field'] == $year) :  ?>
      
      <dl class="timelineMinor">
        <dt id="<?php print $item['nodeid']; ?>">
          <a><?php print strip_tags($item['title']); ?></a>
        </dt>
        <dd class="timelineEvent" id="<?php print $item['nodeid']; ?>EX" style="display: none; ">
          <p>
            <div id="<?php print $item['nodeid']; ?>">
  			  <?php print $item['image']; ?>
              <h1><?php print $item['title']; ?></h1>
              <div class="vertical-timeline-content">
              <?php print $item['body']; ?>
              </div>
            </div>
          </p>
        </dd><!-- /.timelineEvent -->
      </dl><!-- /.timelineMinor -->
      
    <?php endif ?>
      
    <?php endforeach; ?>  <!-- / timeline minor foreach end -->

</div><!-- /.timelineMajor -->


<?php endforeach; ?>  <!-- / year foreach end -->

</div><!-- /#timelineContainer -->
