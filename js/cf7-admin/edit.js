jQuery(document).ready(function($) {
	// row
	jQuery('span#tag-generator-list a[href$="wpt_row"').removeClass('thickbox');
	jQuery('span#tag-generator-list a[href$="wpt_row"').on("click", function(e){
		e.preventDefault();
		wpt_cf7_divi.insertShortcode("wpcf7_row");
	});

	// one_half
	jQuery('span#tag-generator-list a[href$="wpt_one"').removeClass('thickbox');
	jQuery('span#tag-generator-list a[href$="wpt_one"').on("click", function(e){
		e.preventDefault();
		wpt_cf7_divi.insertShortcode("wpcf7_one");
	});

	// one_half
	jQuery('span#tag-generator-list a[href$="wpt_one_half"').removeClass('thickbox');
	jQuery('span#tag-generator-list a[href$="wpt_one_half"').on("click", function(e){
		e.preventDefault();
		wpt_cf7_divi.insertShortcode("wpcf7_one_half");
	});

	// one_third
	jQuery('span#tag-generator-list a[href$="wpt_one_third"').removeClass('thickbox');
	jQuery('span#tag-generator-list a[href$="wpt_one_third"').on("click", function(e){
		e.preventDefault();
		wpt_cf7_divi.insertShortcode("wpcf7_one_third");
	});

	// one_fourth
	jQuery('span#tag-generator-list a[href$="wpt_one_fourth"').removeClass('thickbox');
	jQuery('span#tag-generator-list a[href$="wpt_one_fourth"').on("click", function(e){
		e.preventDefault();
		wpt_cf7_divi.insertShortcode("wpcf7_one_fourth");
	});


	// two_third
	jQuery('span#tag-generator-list a[href$="wpt_two_third"').removeClass('thickbox');
	jQuery('span#tag-generator-list a[href$="wpt_two_third"').on("click", function(e){
		e.preventDefault();
		wpt_cf7_divi.insertShortcode("wpcf7_two_third");
	});

	// three_fourth
	jQuery('span#tag-generator-list a[href$="wpt_three_fourth"').removeClass('thickbox');
	jQuery('span#tag-generator-list a[href$="wpt_three_fourth"').on("click", function(e){
		e.preventDefault();
		wpt_cf7_divi.insertShortcode("wpcf7_three_fourth");
	});

});

var wpt_cf7_divi = {
	insertShortcode: function(name) {
		var selected = this.getSelection();
		var shortcode_start = "[" + name + "]";
		this.insertAt(selected.start, shortcode_start );
		var shortcode_end = "[/" + name + "]";
		this.insertAt((selected.finish + shortcode_end.length - 1), shortcode_end);
	},
	insertAt : function(index, text){
		var value = jQuery('#wpcf7-form').val();
		var updated_value = [value.slice(0, index), text, value.slice(index)].join('')
		jQuery('#wpcf7-form').val(updated_value);
	},
	getSelection: function(){
		var txtarea = document.getElementById("wpcf7-form");
    	var start = txtarea.selectionStart;
    	var finish = txtarea.selectionEnd;
    	return {start: start, finish: finish}
	}
}