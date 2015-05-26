<?php
/**
 * @file
 * Template file to style output.
 */
?>
<?php
  print $panorama_object_id ? l(t('Return to Panorama View'), "islandora/object/{$panorama_object_id}") : t('Orphaned page (no associated panorama)');
?>
<?php if (isset($viewer)): ?>
  <div id="panorama-page-viewer">
    <?php print $viewer; ?>
  </div>
<?php elseif (isset($object['JPG']) && islandora_datastream_access(ISLANDORA_VIEW_OBJECTS, $object['JPG'])): ?>
  <div id="panorama-page-image">
    <?php
      $params = array(
        'path' => url("islandora/object/{$object->id}/datastream/JPG/view"),
        'attributes' => array(),
      );
      print theme('image', $params);
    ?>
  </div>
<?php endif; ?>
<!-- @todo Add table of metadata values -->
