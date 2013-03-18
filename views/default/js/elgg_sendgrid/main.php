<?php if (FALSE) { ?> <script type='text/javascript'> <?php } ?>

elgg.provide('elgg.elgg_sendgrid');


elgg.elgg_sendgrid.init = function() {
	$('.elgg_sendgridClickMe').live('click', elgg.elgg_sendgrid.onClickMe);
};

elgg.elgg_sendgrid.onClickMe = function(event) {
	event.preventDefault();
	
	var element = $(this);
	element.css('color', 'red');
	
	$('.elgg_sendgridShowContent').slideDown(function() {
		element.slideUp();
	});
};

elgg.register_hook_handler('init', 'system', elgg.elgg_sendgrid.init);