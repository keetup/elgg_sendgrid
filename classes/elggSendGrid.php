<?php

/**
 * Description of elgg_sendgrid
 *
 * @author german
 */
class elggSendGrid {

	/**
	 * Send an email using phpmailer
	 *
	 * @param string $from       From address
	 * @param string $from_name  From name
	 * @param string $to         To address
	 * @param string $to_name    To name
	 * @param string $subject    The subject of the message.
	 * @param string $body       The message body
	 * @param array  $bcc        Array of address strings
	 * @param bool   $html       Set true for html email, also consider setting
	 *                           altbody in $params array
	 * @param array  $files      Array of file descriptor arrays, each file array
	 *                           consists of full path and name
	 * @param array  $params     Additional parameters
	 * @return bool
	 */
	public static function sendEmail($from, $from_name, $to, $to_name, $subject, $body, array $bcc = NULL, $html = false, array $files = NULL, array $params = NULL) {
		
	}

}
