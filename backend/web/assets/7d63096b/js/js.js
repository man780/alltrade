$(function(){
	$('.ads-izbranie').click(function(){
		var adsClass =$(this).attr('class').split(' ');
		var adsIP = $(this).attr('data-ip');
		var adsID = $(this).attr('data-id');
		var adsDelete = $(this).attr('data-deleteid');
		adsClass = adsClass[1];
		if (adsClass == 'ads-izbranie0') {
			$.ajax({
	            url: '/elect/add',
	            type: 'get',
	            data: {
	            	ip_user: adsIP,
	            	id_ad: adsID
	            },
	            success: function (data) {
	                if(data){
	                    var adsElectCount = $('.elect').html();
	                    adsElectCount++;
	                    $('.elect').html(adsElectCount);
	                    $('.ads-izbranie').attr('data-deleteid', data);
	                    $('.ads-izbranie').removeClass('ads-izbranie0');
	                    $('.ads-izbranie').addClass('ads-izbranie1');
	                    $('.ads-izbranie').find('p').html('Удалить');
	                }
	            }
	        });
		}
		if (adsClass == 'ads-izbranie1') {
			$.ajax({
	            url: '/elect/delete',
	            type: 'get',
	            data: {
	            	ip_user: adsIP,
	            	id_delete: adsDelete
	            },
	            success: function (data) {
	                if(data){
	                    $('.elect').html(data);
	                    $('.ads-izbranie').removeClass('ads-izbranie1');
	                    $('.ads-izbranie').addClass('ads-izbranie0');
	                    $('.ads-izbranie').find('p').html('В избранные');
	                }
	            }
	        });
		}
	});
	$('.desirable').click(function(){
		var goodsClass = $(this).attr('class').split(' ');
		var goodsIP = $(this).attr('data-ip');
		var goodsID = $(this).attr('data-id');
		var goodsDelete = $(this).attr('data-deleteid');
		goodsClass = goodsClass[1];

		if (goodsClass == 'desirable-false') {
			$.ajax({
	            url: '/cart/desiredadd',
	            type: 'get',
	            data: {
	            	ip_user: goodsIP,
	            	id_good: goodsID
	            },
	            success: function (data) {
	                if(data){
	                    var goodsElectCount = $('.desired-goods').html();
	                    goodsElectCount++;
	                    $('.desired-goods').html(goodsElectCount);
	                    $('.desirable').attr('data-deleteid', data);
	                    $('.desirable').removeClass('desirable-false');
	                    $('.desirable').addClass('desirable-true');
	                }
	            }
	        });
		}
		if (goodsClass == 'desirable-true') {
			$.ajax({
	            url: '/cart/desireddelete',
	            type: 'get',
	            data: {
	            	ip_user: goodsIP,
	            	id_delete: goodsDelete
	            },
	            success: function (data) {
	                if(data){
	                    $('.desired-goods').html(data);
	                    $('.desirable').removeClass('desirable-true');
	                    $('.desirable').addClass('desirable-false');
	                }
	            }
	        });
		}
	});


	$('.add2cart').click(function(){
        $.ajax({
            url: '/cart/add',
            type: 'get',
            data: {
                id: $(this).attr('data-id'),
                count: $('#number').val(),
                color: $('.goodColor:checked').val(),
                size: $('.goodSize:checked').val(),
                idcompany: $('.idcompany').val()
            },
            success: function (data) {
                if(data){
                    $('.catrgoods').html(data);
                    $('.product-popup-cart').css('display', 'block');
                }
            }
        });
    });

    $('.add3cart').click(function(){
        $('.product-popup-cart-guest').css('display', 'block');
    });


	var clickFilter = 0;
	var clickFilterRating = 0;
	var jelaymie = 0;
	$('.philipsmenusub01 > li').click(function(){
		if ($(this).find('.philipsmenusub11').css('display') == 'none') {
			$(this).find('.philipsmenusub11').slideDown(150);
			$(this).find('.submenu-name').removeClass('submenu-name-plus');
			$(this).find('.submenu-name').addClass('submenu-name-minus');
		}
		else {
			$(this).find('.philipsmenusub11').slideUp(150);
			$(this).find('.submenu-name').removeClass('submenu-name-minus');
			$(this).find('.submenu-name').addClass('submenu-name-plus');
		}
	});
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	if (winWidth > 801) {
		adsHeight = winHeight - 150;
		if (adsHeight > 620) {
			adsHeight = 620;
		}
		$('.ads-img-popup').css('height', adsHeight);
		adsHeight = adsHeight -5;
		adsHeightpx = adsHeight + 'px';
		$('.ads-img-popup').css('line-height', adsHeightpx);
	}
	else {
		adsHeight = winHeight;
		$('.ads-img-popup').css('height', adsHeight);
		adsHeight = adsHeight -5;
		adsHeightpx = adsHeight + 'px';
		$('.ads-img-popup').css('line-height', adsHeightpx);
	}

	hPopup = $('.ads-img-popup').height();
	hPopup = hPopup/2;
	hPopup = hPopup - 22;
	$('.ads-prev').css('top', hPopup);
	$('.ads-next').css('top', hPopup);

	$('.close-ads').click(function(){
		$('.ads-popup').css('display', 'none');
		$("html,body").css("overflow","auto");
	});
	$('.ads-overlay').click(function(){
		$('.ads-popup').css('display', 'none');
		$("html,body").css("overflow","auto");
	});

	$('.ads-prev').click(function(){
		var countImg = $('.ads-popup .ads-img-min-popup .ads-it').length;
		//alert(countImg);
		var activeImgId = $('.ads-popup .ads-img-popup img').attr('id');
		activeImgId--;
		if (activeImgId < 0) {
			activeImgId = countImg - 1;
		}
		$('.ads-img-popup img').attr('id', activeImgId);
		activeImgId = '#' + activeImgId;
		//alert(activeImgId);
		var srcAdsImg = $(activeImgId).attr('src');
		$('.ads-img-popup img').attr('src', srcAdsImg);
	});
	$('.ads-next').click(function(){
		var countImg = $('.ads-popup .ads-img-min-popup .ads-it').length;
		//alert(countImg);
		var activeImgId = $('.ads-popup .ads-img-popup img').attr('id');
		activeImgId++;
		if (activeImgId > countImg - 1) {
			activeImgId = 0;
		}
		//alert(activeImgId);
		$('.ads-img-popup img').attr('id', activeImgId);
		activeImgId = '#' + activeImgId;
		//alert(activeImgId);
		var srcAdsImg = $(activeImgId).attr('src');
		$('.ads-img-popup img').attr('src', srcAdsImg);
	});
	$('.menucategoryleft').click(function(){
		$('#leftmenu').addClass('active');
		$('html, body').css('overflow', 'hidden');
	});
	$('.menu-categories-nazad').click(function(){
		$('#leftmenu').removeClass('active');
		$('html, body').css('overflow', 'auto');
	});
	$('.leftmenu-inner-bg').click(function(){
		$('#leftmenu').removeClass('active');
		$('html, body').css('overflow', 'auto');
	})
	if (winWidth < 800) {
		$('#leftmenu ul li p').click(function(){
			if($(this).next().css('display') == 'none') {
				$('#leftmenu ul li .leftmenusub').slideUp(500);
				$(this).next().slideDown(500);
			}
			else {
				$(this).next().slideUp(500);
			}
		});
		$('.login1').click(function(){
			if($('.profile-submenu').css('display') == 'none'){
				$('.profile-submenu').slideDown(300);
				$(this).removeClass('login-up');
				$(this).addClass('login-down');
			}
			else {
				$('.profile-submenu').slideUp(300);
				$(this).removeClass('login-down');
				$(this).addClass('login-up');
			}
		});
	}
	$(window).scroll(function() {
		var winWidht = $(window).width();
	    var top = $(document).scrollTop();
	    if (winWidht < 800) {
	        if (top > 50) {
	    		//alert('katta');
	        	$('.logotopsearchcatreglog').css('display', 'block');
	        }
	        else {
	    		//alert('kichik');
	        	$('.logotopsearchcatreglog').css('display', 'none');
	        }
	    }
	});
	$('.philips-sub-800').click(function(){
		$('.philipsmenu-800-menu').addClass('active');
		$('html, body').css('overflow', 'hidden');
	});
	$('.leftmenu-inner-bg1').click(function(){
		$('.philipsmenu-800-menu').removeClass('active');
		$('html, body').css('overflow', 'auto');
	});
	$('.philips-menu').click(function(){
		if ($(this).next().css('display') == 'none') {
			$(this).next().slideDown(300);
			$('.double-srtelka').addClass('double-srtelka-90');
		}
		else {
			$(this).next().slideUp(300);
			$('.double-srtelka').removeClass('double-srtelka-90');
		}
	});
	$('.elect1').click(function(){
		if ($(this).css('color') == 'rgb(0, 65, 98)') {
			$(this).html('Удалить подписку');
			$(this).css({
				'color' : '#fff',
				'background' : '#004162'
			});
		}
		else {
			$(this).html('Подписаться в магазин');
			$(this).css({
				'color' : '#004162',
				'background' : 'none'
			});
		}
	});
	$('.cat-cost').click(function(){
		clickFilter++;
		if (clickFilter == 1) {
			$(this).removeClass('filter-none');
			$(this).removeClass('filter-top');
			$(this).addClass('filter-bottom');
		}
		else if (clickFilter == 2) {
			$(this).removeClass('filter-bottom');
			$(this).removeClass('filter-none');
			$(this).addClass('filter-top');
		}
		else {
			$(this).removeClass('filter-top');
			$(this).removeClass('filter-bottom');
			$(this).addClass('filter-none');
			clickFilter = 0;
		}
	});
	$('.cat-rating').click(function(){
		clickFilterRating++;
		if (clickFilterRating == 1) {
			$(this).removeClass('filter-none');
			$(this).removeClass('filter-top');
			$(this).addClass('filter-bottom');
		}
		else if (clickFilterRating == 2) {
			$(this).removeClass('filter-bottom');
			$(this).removeClass('filter-none');
			$(this).addClass('filter-top');
		}
		else {
			$(this).removeClass('filter-top');
			$(this).removeClass('filter-bottom');
			$(this).addClass('filter-none');
			clickFilterRating = 0;
		}
	});
});
$(window).resize(function(){
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	if (winWidth > 801) {
		adsHeight = winHeight - 150;
		if (adsHeight > 620) {
			adsHeight = 620;
		}
		$('.ads-img-popup').css('height', adsHeight);
		adsHeight = adsHeight -5;
		adsHeightpx = adsHeight + 'px';
		$('.ads-img-popup').css('line-height', adsHeightpx);
	}
	else {
		adsHeight = winHeight;
		$('.ads-img-popup').css('height', adsHeight);
		adsHeight = adsHeight -5;
		adsHeightpx = adsHeight + 'px';
		$('.ads-img-popup').css('line-height', adsHeightpx);	
	}
	hPopup = $('.ads-img-popup').height();
	hPopup = hPopup/2;
	hPopup = hPopup - 22;
	$('.ads-prev').css('top', hPopup);
	$('.ads-next').css('top', hPopup);
});
function formminus() {
	var n = $('#number').attr('value');
	if( n>=2 ) {
		n = n - 1;
	}
	$('#number').attr('value', n);
}

function formpilus() {
	var n = $('#number').attr('value');
	/*n = (int )n - 1;
	n = n + 0;*/
	/*n = */n++;
	$('#number').attr('value', n);
}

function formminusnumber(element) {
	var n = $(element).attr('value');
	if( n>=2 ) {
		n = n - 1;
	}
	$(element).attr('value', n);
}

function formpilusnumber(element) {
	var n = $(element).attr('value');
	n = n - 1;
	n = n + 1;
	n = n + 1;
	$(element).attr('value', n);
}

function categoryleftmenu() {
	if ($('.leftsub > .sub').css('display') == "block") {
		$('.leftsub > .sub').css('display', 'none');
		$('.leftsub > p > span').text('+');
	}
	else {
		$('.leftsub > .sub').css('display', 'block');
		$('.leftsub > p > span').text('-');
	}
}

function topmenu(element) {
	if ($(element).css('display') == 'none') {
		$(element).slideDown(300);
	}
	else {
		$(element).slideUp(300);
	}
}

function adsImg(img) {
	var srcImg = img.src;
	//alert(srcImg);
	$('.ads-img').find('img').attr('src', srcImg);
	var idImg = img.id;
	//alert(idImg);
	$('.ads-img').find('img').attr('id', idImg);
}

function adsImgView(img) {
	var srcImg = img.src;
	//alert(srcImg);
	$('.ads-img-popup').find('img').attr('src', srcImg);
	var idImg = img.id;
	//alert(idImg);
	$('.ads-img-popup').find('img').attr('id', idImg);
}

function adsImgPopup(img) {
	var srcImg = img.src;
	$('.ads-img-popup').find('img').attr('src', srcImg);
	var idImg = img.id;
	$('.ads-img-popup').find('img').attr('id', idImg);
	$('.ads-popup').css('display', 'block');
	$("html,body").css("overflow","hidden");
}