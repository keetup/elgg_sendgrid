<?php

$success = FALSE;

try {
	$success = elggSendGrid::doAction(__FILE__);
} catch (Exception $exc) {
	register_error($exc->getMessage());
}

forward(REFERER);

