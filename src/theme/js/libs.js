$(function(){
	var $modal = $('#modalW');
	var $modal_form = $('#modalW').find('form');
	var $modal_close_but = $modal.find('#close');

	function close_modal(){
		$modal.attr('data-visible', 'hide');
	}

	function open_modal(){
		$modal.attr('data-visible', 'show');
	}
	function clear_form(){
		$modal_form.trigger("reset");
	}

	$modal_close_but.click(function(){
		close_modal();
		clear_form();
		return false;
	});


	$('[data-modal_show]').click(function(){
		open_modal();
		return false;
	});
});