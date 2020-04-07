<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package healthexx
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-lg-4 col-md-4 col-12" id="secondary">
    <aside class="sidebar mt-5 mt-lg-0">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside>
</div>