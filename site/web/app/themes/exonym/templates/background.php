<?php $background = get_field('background'); ?>
<div id="background-container">
  <div class="background-image" style="background-image: url(<?php echo $background['sizes']['jumbo']; ?>);">
    <img src="<?php echo $background['sizes']['jumbo']; ?>" alt="<?php ex_brand(); echo ' - ' . $background['title']; ?>" />
    <span><?php echo $background['title'] . ' - ' . $background['description']; ?></span>
  </div>
</div>
