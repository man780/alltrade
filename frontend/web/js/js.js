$(function(){
	$('.level-1').click(function(){
		if($(this).parent().find('.level-2').html() != undefined){
			//alert($(this).parent().find('.level-2').html());
			var countLevelone2 = $(this).parent().find('.level-2').length;
			var j = 0;
			for (var i = 0; i <= countLevelone2 - 1; i++) {
				if ($(this).parent().find('.level-2').eq(i).prop("checked")) {
					j++;
				}
			}
			if (j > 0) {
				$(this).prop("checked", true);
			}
			else {
				$(this).prop("checked", false);
			}
		}
		if($(this).parent().find('.level-2').html() != undefined && $(this).next().next().css('display') != 'block'){
			$(this).next().removeClass('cat-plus');
			$(this).next().addClass('cat-minus');
			$(this).next().next().css('display', 'block');
		}
		else {
			if($(this).parent().find('.level-2').html() != undefined) {
				$(this).next().removeClass('cat-minus');
				$(this).next().addClass('cat-plus');
			}
			$(this).next().next().css('display', 'none');
		}
	});
	$('.level-2').click(function(){
		if($(this).parent().find('.level-3').html() != undefined){
			var countLevelone3 = $(this).parent().find('.level-3').length;
			var j = 0;
			for (var i = 0; i <= countLevelone3 - 1; i++) {
				if ($(this).parent().find('.level-3').eq(i).prop("checked")) {
					j++;
				}
			}

			if (j > 0) {
				$(this).prop("checked", true);
			}
			else {
				$(this).prop("checked", false);
			}
		}
		else {
			var countLevelone3 = $(this).parent().parent().find('.level-2').length;
			var j = 0;
			for (var i = 0; i <= countLevelone3 - 1; i++) {
				if ($(this).parent().parent().find('.level-2').eq(i).prop("checked")) {
					j++;
				}
			}
			if (j > 0) {
				$(this).parent().parent().prev().prev().prop("checked", true);
			}
			else {
				$(this).parent().parent().prev().prev().prop("checked", false);
			}
		}
		if($(this).parent().find('.level-3').html() != undefined && $(this).next().next().css('display') != 'block'){
			$(this).next().removeClass('cat-plus');
			$(this).next().addClass('cat-minus');
			$(this).next().next().css('display', 'block');
		}
		else {
			if($(this).parent().find('.level-3').html() != undefined) {
				$(this).next().removeClass('cat-minus');
				$(this).next().addClass('cat-plus');
			}
			$(this).next().next().css('display', 'none');
		}
	});
	$('.level-3').click(function(){
		if($(this).parent().find('.level-4').html() != undefined){
			var countLevelone4 = $(this).parent().find('.level-4').length;
			//alert(countLevelone4);
			var j = 0;
			for (var i = 0; i <= countLevelone4 - 1; i++) {
				if ($(this).parent().find('.level-4').eq(i).prop("checked")) {
					j++;
				}
			}
			if (j > 0) {
				$(this).prop("checked", true);
			}
			else {
				$(this).prop("checked", false);
			}
		}
		else {
			var countLevelone4 = $(this).parent().parent().find('.level-3').length;
			//alert(countLevelone4);
			var j = 0;
			for (var i = 0; i <= countLevelone4 - 1; i++) {
				if ($(this).parent().parent().find('.level-3').eq(i).prop("checked")) {
					j++;
				}
			}
			//alert(j);
			if (j > 0) {
				$(this).parent().parent().prev().prev().prop("checked", true);
				$(this).parent().parent().parent().parent().prev().prev().prop("checked", true);
			}
			else {
				//alert(j);
				$(this).parent().parent().prev().prev().prop("checked", false);
				var countLevelone51 = $(this).parent().parent().parent().parent().find('.level-2').length;
				var j1 = 0;
				for (var i = 0; i <= countLevelone51 - 1; i++) {
					if ($(this).parent().parent().parent().parent().find('.level-2').eq(i).prop("checked")) {
						j1++;
					}
				}
				if (j1 > 0) {
					$(this).parent().parent().parent().parent().prev().prev().prop("checked", true);
				}
				else {
					$(this).parent().parent().parent().parent().prev().prev().prop("checked", false);		
				}
			}
		}
		if($(this).parent().find('.level-4').html() != undefined && $(this).next().next().css('display') != 'block'){
			$(this).next().removeClass('cat-plus');
			$(this).next().addClass('cat-minus');
			$(this).next().next().css('display', 'block');
		}
		else {
			if($(this).parent().find('.level-4').html() != undefined){
				$(this).next().removeClass('cat-minus');
				$(this).next().addClass('cat-plus');
			}
			$(this).next().next().css('display', 'none');
		}
	});
	$('.level-4').click(function(){
		var countLevelone5 = $(this).parent().parent().find('.level-4').length;
		//alert(countLevelone5);
		var j = 0;
		for (var i = 0; i <= countLevelone5 - 1; i++) {
			if ($(this).parent().parent().find('.level-4').eq(i).prop("checked")) {
				j++;
			}
		}
		//alert(j);
		if (j > 0) {
			$(this).parent().parent().prev().prev().prop("checked", true);
			$(this).parent().parent().parent().parent().prev().prev().prop("checked", true);
			$(this).parent().parent().parent().parent().parent().parent().prev().prev().prop("checked", true);
		}
		else {
			$(this).parent().parent().prev().prev().prop("checked", false);
			var countLevelone51 = $(this).parent().parent().parent().parent().find('.level-3').length;
			//alert(countLevelone51);
			var j1 = 0;
			for (var i = 0; i <= countLevelone51 - 1; i++) {
				if ($(this).parent().parent().parent().parent().parent().parent().find('.level-3').eq(i).prop("checked")) {
					j1++;
				}
			}
			if (j1 > 0) {
				//alert(j1);
				$(this).parent().parent().parent().parent().prev().prev().prop("checked", true);
			}
			else {
				//alert(j1);
				$(this).parent().parent().parent().parent().prev().prev().prop("checked", false);
				var countLevelone52 = $(this).parent().parent().parent().parent().parent().parent().find('.level-2').length;
				var j2 = 0;
				for (var i = 0; i <= countLevelone52 - 1; i++) {
					if ($(this).parent().parent().parent().parent().parent().parent().find('.level-2').eq(i).prop("checked")) {
						j2++;
					}
				}
				if (j2 > 0) {
					$(this).parent().parent().parent().parent().parent().parent().prev().prev().prop("checked", true);
				}
				else {
					$(this).parent().parent().parent().parent().parent().parent().prev().prev().prop("checked", false);
				}
			}
		}

	});
	var countLevel2 = $('.level-2').length;
	for (var i = 0; i <= countLevel2 - 1; i++) {
		var element = '.level-2:eq('+i+')';
		if ($(element).prop("checked")) {
			$(element).parent().parent().css('display', 'block');
		}
	}
	var countLevel3 = $('.level-3').length;
	for (var i = 0; i <= countLevel3 - 1; i++) {
		var element = '.level-3:eq('+i+')';
		if ($(element).prop("checked")) {
			$(element).parent().parent().css('display', 'block');
		}
	}
	var countLevel4 = $('.level-4').length;
	for (var i = 0; i <= countLevel4 - 1; i++) {
		var element = '.level-4:eq('+i+')';
		if ($(element).prop("checked")) {
			$(element).parent().parent().css('display', 'block');
		}
	}

	var countLevelparent1 = $('.level-1').length;
	for (var i = 0; i <= countLevelparent1 - 1; i++) {
		if($('.level-1').eq(i).parent().find('.level-2').html() != undefined){
			if ($('.level-1').eq(i).next().next().css('display') != 'block') {
				$('.level-1').eq(i).next().addClass('cat-plus');
			}
			else {
				$('.level-1').eq(i).next().addClass('cat-minus');
			}
		}
	}
	var countLevelparent2 = $('.level-2').length;
	for (var i = 0; i <= countLevelparent2 - 1; i++) {
		if($('.level-2').eq(i).parent().find('.level-3').html() != undefined){
			if ($('.level-2').eq(i).next().next().css('display') != 'block') {
				$('.level-2').eq(i).next().addClass('cat-plus');
			}
			else {
				$('.level-2').eq(i).next().addClass('cat-minus');
			}
		}
	}
	var countLevelparent3 = $('.level-3').length;
	for (var i = 0; i <= countLevelparent3 - 1; i++) {
		if($('.level-3').eq(i).parent().find('.level-4').html() != undefined){
			if ($('.level-3').eq(i).next().next().css('display') != 'block') {
				$('.level-3').eq(i).next().addClass('cat-plus');
			}
			else {
				$('.level-3').eq(i).next().addClass('cat-minus');
			}
		}
	}

});