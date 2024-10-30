jQuery(document).ready(function($) {
	wpt_cf7_divi.init();
});

var wpt_cf7_divi = {
	init: function(){
		this.init_error_response();
		this.add_submit_parent_class();
	},
	init_error_response: function(){
		jQuery('section.et_pb_wpt_contact_form_7.response-at-top .wpcf7 .wpcf7-response-output').each(function(){
			var el = jQuery(this);
			el.closest('.wpcf7 form').prepend(el);
		});
	},

	add_submit_parent_class: function(){
		var submit_btn = jQuery('section.et_pb_wpt_contact_form_7 .wpcf7 .wpt-row  .wpt-col .wpcf7-submit');
		submit_btn.closest('.wpt-col').addClass('wpt-cf7-submit-btn-row');
	}
}