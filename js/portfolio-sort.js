$(document).ready(function() {
	$('ul.filter a').click(function() {
		$(this).css('outline','none');
		$('ul.filter .active').removeClass('active');
		$(this).parent().addClass('active');		
		var filterVal = $(this).text().toLowerCase().replace(' ','-');				
		if(filterVal == 'all') {
			$('ul.portfolio li.hidden').fadeIn('slow').removeClass('hidden');
		} else {			
			$('ul.portfolio li').each(function() {
				if(!$(this).hasClass(filterVal)) {
					$(this).fadeOut('normal').addClass('hidden');
				} else {
					$(this).fadeIn('slow').removeClass('hidden');
				}
			});
		}		
		return false;
	});
});