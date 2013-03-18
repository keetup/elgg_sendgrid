<?php

/**
 * Main hooks functions autocomatically loaded
 * 
 * Use this file to add the functions that handle the plugin hooks
 */



/**
 * Overrides the default email send method of Elgg
 * @note Will need to add code to handle from and to if using: name <email>
 */
function elgg_sendgrid_mail_override($hook, $entity_type, $returnvalue, $params) {
	return elggSendGrid::sendEmail(
			$params["from"],
			$params["from"],
			$params["to"],
			'',
			$params["subject"],
			$params["body"]);
}