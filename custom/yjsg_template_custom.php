<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) since 2007  Youjoomla.com. All Rights Reserved.      ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
defined( '_JEXEC' ) or die( 'Restricted index access' );
/*  
  !!! DO NOT EDIT THIS FILE. IT MIGHT BE CHANGED ON UPDATE
  this file is custom for this template only. if you wish to edit or add 
  own code to the template, use template_name/custom/yjsg_custom_params.php
  
*/
/*

	the $cc_css variable is for custom link color. you can use it to style any HTML elements
	see instructions here:
	http://www.yjsimplegrid.com/documentation/advanced/elements-styling-based-on-link-color.html
	

*/
	
$cc_css ="a,.highlight,[class*='facolor'].fa:before,#features-tabs .yjsgShortcodeTabs li.active a,.eximium-list li a:hover,.yjsgmenu li a:hover{color:".$style_color.";}";
$cc_css .=".yjsg1,.eximium-intro .fa-border,#features-tabs .yjsgShortcodeTabs li a,[class*='yjsg-button-color']{background:".$style_color.";}";
$cc_css .="::selection{background:".$style_color.";}";
$cc_css .="::-moz-selection{background:".$style_color.";}";
$cc_css .=".eximium-intro .fa-border:after{border-color:".$style_color." transparent;}";
$cc_css .="#features-tabs .yjsgShortcodeTabs{border-color:".$style_color.";}";
$cc_css .="a:focus,a:hover,.yjsg1 a:hover{color:".$yjsg_color->darker('15%').";}[class*='yjsg-button-color']:hover{background:".$yjsg_color->darker('10%').";}";

$cc_css .="[class*='yjsg-button-color']{background:".$style_color.";}[class*='yjsg-button-color']:hover{background:".$yjsg_color->darker('5%').";}";
$cc_css .="#typosticky.yjsg-sticky.fixed{max-width:".$css_width.$css_widthdefined.";margin:0 auto;padding:15px;}";
$cc_css .=".yjsg-sub-heading,.yjsg-sticky-menu a.active-scroll,[data-sticky-block] a.active-scroll:before{border-color:".$style_color.";}";
$cc_css .="[class*='facolor'].fa:before{color:".$style_color.";}";



$yjsg2_before='<div class="yjsg2_out yjsgouts">';
$yjsg2_after='</div>';
$yjsg4_before='<div class="yjsg4_out yjsgouts">';
$yjsg4_after='</div>';
$yjsg6_before='<div class="yjsg6_out yjsgouts">';
$yjsg6_after='</div>';
$yjsg7_before='<div class="yjsg7_out yjsgouts">';
$yjsg7_after='</div>';
?>