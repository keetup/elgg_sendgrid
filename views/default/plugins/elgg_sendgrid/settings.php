<?php
$entity = elgg_extract('entity', $vars);
if (!($entity instanceof ElggPlugin)) {
	return;
}

$username = $entity->sendgrid_username;
$password = $entity->sendgrid_password;

$sendgrid_username = elgg_view('input/text', array('name' => "params[sendgrid_username]", 'value' => $username, 'id' => 'sendgrid_username'));
$sendgrid_passwd = elgg_view('input/password', array('name' => "params[sendgrid_password]", 'value' => $password, 'id' => 'sendgrid_password'));


elgg_load_css('elgg.elgg_sendgrid');
?>

<div class="sendgridFormInput">
	<label for="sendgrid_username"><?php echo elgg_echo('elgg_sendgrid:input:username'); ?></label>
	<?php echo $sendgrid_username ?>
</div>

<div class="sendgridFormInput">
	<label for="sendgrid_password"><?php echo elgg_echo('elgg_sendgrid:input:password'); ?></label>
	<?php echo $sendgrid_passwd ?>
</div>