	$(document).ready(function(){
		$('.item').click(function(){
			const value =$(this).attr('data-filter');
			if(value == 'All'){
				$('.card').show('1000');
			}
			else{
				$('.card').not('.'+value).hide('1000');
				$('.card').filter('.'+value).show('1000');
			}
		})
		//add active class on selected item
		$('.item').click(function(){
			$(this).addClass('active').siblings().removeClass('active')
		})
	})