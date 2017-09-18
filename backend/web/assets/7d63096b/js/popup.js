$(function(){
	$('.product-close').click(function(){
		$('.product-popup').css('display', 'none');
		$('.product-popup-cart').css('display', 'none');
		$('.product-popup-cart-guest').css('display', 'none');
	});
	$('.product-overlay').click(function(){
		$('.product-popup').css('display', 'none');
		$('.product-popup-cart').css('display', 'none');
		$('.product-popup-cart-guest').css('display', 'none');
	});
	$('.order').click(function(){
		$('.product-popup').css('display', 'block');
	});
	$('.order1').click(function(){
		$(this).next().css('display', 'block');
	});
})
