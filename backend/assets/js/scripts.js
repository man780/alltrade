jQuery(document).ready(function() {
	jQuery('#category-id_parent').change(function(){
		if(this.value == 0){
			$('.field-category-id_menu').show();
		}else{
			$('.field-category-id_menu').hide();
		}		
	})
})