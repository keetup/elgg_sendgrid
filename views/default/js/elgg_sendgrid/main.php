<?php if (FALSE) { ?> <script type='text/javascript'> <?php } ?>

elgg.provide('elgg.elgg_sendgrid');

elgg.elgg_sendgrid.init = function() {
	
};

elgg.register_hook_handler('init', 'system', elgg.elgg_sendgrid.init);