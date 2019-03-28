/**
 * 
 *	Checking for mobile screen size, alter top menu to function for mobile.
 * 
 * 
 */

jQuery(document).ready(function(){
	if (jQuery(window).width() < 720 ){
		jQuery('#menu-primary-menu').removeClass('dropdown menu');
		jQuery('#menu-primary-menu').wrap("<div class='is-drilldown' style='min-height: 383.75px; max-width: 400;px;'></div>");
		jQuery('#menu-primary-menu').wrap("<ul id='mobile-menu' class='vertical menu' data-drilldown data-parent-link='true' role='menubar'></ul>");
		jQuery('#menu-primary-menu').addClass('vertical menu');
		jQuery('#menu-primary-menu').removeAttr('data-dropdown-menu');
		jQuery('#menu-primary-menu').removeAttr('role');
		jQuery('#menu-primary-menu').before('<li role="menuitem"><a href="/" alt="Link back to LCCC Home Page" tabindex="0">Home</a></li>');
		jQuery('ul#menu-primary-menu').removeClass('opens-right');
		jQuery('.first-sub').removeClass('first-sub');
		jQuery('ul#menu-primary-menu li').removeAttr('id');
		jQuery('.is-dropdown-submenu-parent').addClass('is-drilldown-submenu-parent').removeClass('is-dropdown-submenu-parent opens-right');
		jQuery('.is-dropdown-submenu-item').addClass('is-submenu-parent-item is-drilldown-submenu-item').removeClass('is-dropdown-submenu-item');
		jQuery('.is-dropdown-submenu').addClass('is-drilldown-submenu').removeClass('is-dropdown-submenu');
		jQuery('#mobile-menu').append("<ul id='mobile-header-shortcuts' class='vertical menu'></ul>")
		jQuery('#menu-header-shortcuts').children().clone().appendTo('#mobile-header-shortcuts');
	}

 });