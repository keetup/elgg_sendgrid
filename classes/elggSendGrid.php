<?php

/**
 * Description of elgg_sendgrid
 *
 * @author german
 */
class elggSendGrid {
	public static function doAction($file) {
		throw new Exception(elgg_echo('elgg_sendgrid:exceptions:not_implemented', array($file)));
	}
}
