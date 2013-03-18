<?php

/**
 * Index elgg_sendgrid page
 *
 * @package elgg_sendgrid
 */

elgg_load_css('elgg.elgg_sendgrid');
elgg_load_js('elgg.elgg_sendgrid');

$title = elgg_echo('elgg_sendgrid:index:title');
elgg_push_breadcrumb($title);

$content = elgg_view('elgg_sendgrid/index');

$body = elgg_view_layout('content', array(
	'filter' => '',
	'content' => $content,
	'title' => $title,
));

echo elgg_view_page($title, $body);
