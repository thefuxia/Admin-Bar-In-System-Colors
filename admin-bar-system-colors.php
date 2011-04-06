<?php
/*
Plugin Name: Admin Bar In System Colors
Description: Takes away all the fancy stuff and enables a readable interface.
Version:     1.1
Required:    3.1
Author:      Thomas Scholz
Author URI:  http://toscho.de
License:     GPL v2

Changelog:
	v 1.1
		Switch to system colors
	v 1.0
		Initial release, white on black.
*/
! defined( 'ABSPATH' ) and exit;

add_action( 'wp_head',    'abse_print_style', 40 );
add_action( 'admin_head', 'abse_print_style', 40 );

function abse_print_style()
{
	if ( is_admin_bar_showing() )
	{
		?>
<style media="screen,projection">
#wpadminbar
{
	border-bottom:	1px solid ButtonShadow;
}
#wpadminbar,
#wpadminbar .quicklinks a,
#wpadminbar .shortlink-input,
.adminbar-button
{
	background:		ButtonFace !important;
	color:			ButtonText !important;
	text-shadow:	none;
}
#wpadminbar *
{
	font-family:	'Segoe UI', sans-serif !important;
}
#wpadminbar #adminbarsearch .adminbar-input
{
	border:			1px solid							!important;
	border-color:	ButtonShadow ButtonHighlight
					ButtonHighlight ButtonShadow		!important;
	box-shadow:		none								!important;
	width:			250px								!important;
}
#wpadminbar #adminbarsearch .adminbar-input:focus
{
	background:		#fff								!important;
}
#wpadminbar .quicklinks a:hover
{
	background:		Highlight !important;
	color:			HighlightText !important;
}
#wpadminbar .quicklinks a
{
	border-width:	0 1px 1px	!important;
	border-color:	ButtonFace ButtonShadow ButtonShadow ButtonHighlight	!important;
}
#wpadminbar .quicklinks a span#ab-awaiting-mod,
#wpadminbar .quicklinks a span#ab-updates
{
	background:		ButtonText !important;
	color:			ButtonFace !important;
	border-radius:	0			!important;
}
</style>
		<?php
	}
}