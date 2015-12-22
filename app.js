$(function () {

	$('a.item').click(function(){
		$('.item').removeClass('active');
		$(this).addClass('active');
	});


	$('button.submit').click(function(){
		$('div.modal').modal('show');
	});




});