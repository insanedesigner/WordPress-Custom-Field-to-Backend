// Code with custom field fetch //

<?php 
$BookingURL= get_post_meta($post->ID, 'BookingURL', true);
if (!$BookingURL) { ?>
<li class="menu-item menu-item-type-post_type menu-item-object-page custom-btn"><a class="desk-link" target="_blank" style="color:white;padding: 7px 10px 7px 10px;box-shadow: -1px 1px 5px 0px black;background: #6f6157;border-radius: 5px;margin-top: 8px;" href="http://bit.ly/abadhotels">BOOK NOW</a></li>
<?php 
} else { ?>

<li class="menu-item menu-item-type-post_type menu-item-object-page custom-btn"><a class="desk-link" target="_blank" style="color:white;padding: 7px 10px 7px 10px;box-shadow: -1px 1px 5px 0px black;background: #6f6157;border-radius: 5px;margin-top: 8px;" href="<?php echo get_post_meta($post->ID, 'BookingURL', true); ?>">BOOK NOW</a></li>
<?php

}
?>
