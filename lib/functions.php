<?php

/**
 * Main functions autocomatically loaded
 * 
 * Use this file, to make helpers functions for your module
 */

/**
 * Determine the best from email address
 *
 * @return string with email address
 */
function elgg_sendgrid_extract_from_email() {

	$from_email = '';
	$site = elgg_get_site_entity();
	
	// If there's an email address, use it - but only if its not from a user.
	if ((isset($from->email)) && (!($from instanceof ElggUser))) {
		$from_email = $from->email;
	// Has the current site got a from email address?
	} else if (($site) && (isset($site->email))) {
		$from_email = $site->email;
	// If we have a url then try and use that.
	} else if (isset($from->url)) {
		$breakdown = parse_url($from->url);
		$from_email = 'noreply@' . $breakdown['host']; // Handle anything with a url
	// If all else fails, use the domain of the site.
	} else {
		$from_email = 'noreply@' . get_site_domain($site->getGUID());
	}
	
	return $from_email;
}      