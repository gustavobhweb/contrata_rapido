$(function() {
			
	$( '#ri-grid' ).gridrotator( {
		rows: 4,
		columns: 12,
		maxStep: 15,
		w320 : {
			rows : 3,
			columns : 4
		},
		w240 : {
			rows : 3,
			columns : 3
		}
	} );

	initSlide();

});

function initSlide()
{
	var $itemSlide = $('.perfil-profissional .item');
	var arrSlide = [];

	$itemSlide.each(function(i){
		arrSlide.push(i);
		$(this).attr('data-id', i);
		if (arrSlide.length > 4) {
			$(this).hide();
		}
	});

	// console.log(Math.ceil(arrSlide.length / 4));
}