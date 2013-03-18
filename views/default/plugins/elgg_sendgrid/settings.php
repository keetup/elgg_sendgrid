<?php
$entity = elgg_extract('entity', $vars);
if (!($entity instanceof ElggPlugin)) {
	return;
}

$username = $entity->sendgrid_username;
$password = $entity->sendgrid_password;
$enabled = $entity->sendgrid_enabled;

$checked = '';
if ($enabled == 'yes') {
	$checked = 'checked="checked"';
}

$sendgrid_username = elgg_view('input/text', array('name' => "params[sendgrid_username]", 'value' => $username, 'id' => 'sendgrid_username'));
$sendgrid_passwd = elgg_view('input/password', array('name' => "params[sendgrid_password]", 'value' => $password, 'id' => 'sendgrid_password'));


elgg_load_css('elgg.elgg_sendgrid');
?>

<div class="sendgridEnabledOptions">
	<input name="params[sendgrid_enabled]" type="hidden" value="0" />
	<input name="params[sendgrid_enabled]" id="sendgrid_enabled" type="checkbox" value="yes" <?php echo $checked ?> />
	<label for="sendgrid_enabled"><?php echo elgg_echo('elgg_sendgrid:input:enabled'); ?></label>
</div>

<div class="sendgridFormInput">
	<label for="sendgrid_username"><?php echo elgg_echo('elgg_sendgrid:input:username'); ?></label>
	<?php echo $sendgrid_username ?>
</div>

<div class="sendgridFormInput">
	<label for="sendgrid_password"><?php echo elgg_echo('elgg_sendgrid:input:password'); ?></label>
	<?php echo $sendgrid_passwd ?>
</div>