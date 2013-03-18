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

	 * @param string $to         To address

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
	public static function sendEmail($from, $to, $subject, $body, array $bcc = NULL, $html = false, array $files = NULL, array $params = NULL) {

		$plugin = elgg_get_plugin_from_id('elgg_sendgrid');
		
		$username = $plugin->sendgrid_username;
		$password = $plugin->sendgrid_password;
		
		$sendgrid = new SendGrid($username, $password);

		$mail = new SendGrid\Mail();
		$mail->addTo($to)->
				setFrom($from)->
				setSubject($subject)->
				setText(elgg_strip_tags($body))->
				setHtml($body);

		if ($files && is_array($files)) {
			foreach ($files as $file) {
				$mail->addAttachment($file);
			}
		}

		$success = $sendgrid->smtp->send($mail);
		return $success;
	}

}
