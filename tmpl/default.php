<?php 
// No direct access
defined('_JEXEC') or die; ?>
<div class="<?php echo $params->get('moduleclass_sfx') ?>">
    <ul class="topsocial">
        <?php if ($facebook != null) : ?>
        <li><a href="<?php echo $facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <?php endif ?>
        <?php if ($twitter != null) : ?>
        <li><a href="<?php echo $twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <?php endif ?>
    	<?php if ($gplus != null) : ?>
        <li><a href="<?php echo $gplus; ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
    	<?php endif ?>
    	<?php if ($youtube != null) : ?>
        <li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
    	<?php endif ?>
        <?php if ($pinterest != null) : ?>
        <li><a href="<?php echo $pinterest; ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
        <?php endif ?>
        <?php if ($dribbble != null) : ?>
        <li><a href="<?php echo $dribbble; ?>" target="_blank"><i class="fab fa-dribbble"></i></a></li>
        <?php endif ?>
        <?php if ($behance != null) : ?>
        <li><a href="<?php echo $behance; ?>" target="_blank"><i class="fab fa-behance"></i></a></li>
        <?php endif ?>
        <?php if ($instagram != null) : ?>
        <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <?php endif ?>
        <?php if ($flickr != null) : ?>
        <li><a href="<?php echo $flickr; ?>" target="_blank"><i class="fab fa-flickr"></i></a></li>
        <?php endif ?>
        <?php if ($git != null) : ?>
        <li><a href="<?php echo $git; ?>" target="_blank"><i class="fab fa-github"></i></a></li>
        <?php endif ?>
        <?php if ($linkedin != null) : ?>
        <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
        <?php endif ?>
    </ul>
</div>