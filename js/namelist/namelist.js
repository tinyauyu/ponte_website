function printNamelist(year){
	$.getJSON( "js/namelist/"+year+".json", function( choir ) {
		sections = Object.keys(choir)
		$.each(sections, function( index, section ) {
			$.each(choir[section], function(index, member){
				var chiname = member.name_chi
				var engname = member.name_eng
				var row = "<div class='css_tr'>"
				row += "<div class='css_td'>"+member.name_chi+"</div>"
				row += "<div class='css_td'>"+member.name_eng+"</div>"
				row += "</div>"
				$('div.'+year+"."+section).append(row);
			});
		});
	});
}