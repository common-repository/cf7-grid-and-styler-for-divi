jQuery(document).ready(function($) {
	wpt_cf7_divi.init();
});

var wpt_cf7_divi = {
	init: function(){
		this.init_error_response();
		this.add_submit_parent_class();
	},
	init_error_response: function(){
		var el = jQuery('section.et_pb_wpt_contact_form_7 .wpcf7 .wpcf7-response-output');
		if(el[0]) {
			el.closest('.wpcf7 form').prepend(el);
			el.bind('DOMSubtreeModified', function(e) {
				jQuery([document.documentElement, document.body]).scrollTop(jQuery(this).offset().top - 300)
						var el = jQuery('section.et_pb_wpt_contact_form_7 .wpcf7 .wpcf7-response-output');
				});
			}
	},

	add_submit_parent_class: function(){
		var submit_btn = jQuery('section.et_pb_wpt_contact_form_7 .wpcf7 .wpt-row  .wpt-col .wpcf7-submit');
		submit_btn.closest('.wpt-col').addClass('wpt-cf7-submit-btn-row');
	}
}