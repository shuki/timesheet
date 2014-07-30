$(function(){
	$("#tabs").tabs();
	$("#tabs").height($('.ui-tabs-nav:first', $("#tabs")).height());

	$(window).bind('beforeunload', function(e){
		if($("#timeout").dialog( "isOpen" ) === true)
			return;
			
		var message = 'Data has been changed, are you sure you wnat to leave the page?',
		stay = false,
		e = e || window.event,
		activeTab = $("#tabs").tabs( "option", "active");
		
		
		stay = fn_tamir.closeFromsInTab($('div[id="tabs"] ul .ui-tabs-active a'), activeTab);		
		if(stay){
			// For IE and Firefox
			if(e)
				e.returnValue = message;
			return message;			
		}
		
		$('div[id="tabs"] li a.ui-tabs-anchor').each(function(i){
			if(!stay)
				stay = fn_tamir.closeFromsInTab(this, i);
		});

		if(stay){
			if(e)
				e.returnValue = message;
			return message;			
		}
		
		$("#tabs").tabs( "option", "active", activeTab);
 	});
	
	$("#tabs").bind("tabsshow", function(event, ui){
		var timesheet_item = $('table[id="timesheet_item"]');
		var job = $('table[id="job"]');
		var client = $('table[id="client"]');
		var worker = $('table[id="worker"]');
		var report = $('table[id="report"]');
		//switch(ui.index)
		switch($(ui.panel).attr('id'))
		{
			case 'tabs-1':
				if(!timesheet_item.jset('defined'))
					timesheet_item.jset($.extend(true, {}, $.jset.defaults, $.jset.fn.getGridDefinition('timesheet_item')));
				else
					if(timesheet_item.data('pending_reload'))
						timesheet_item.jset('reload', [true]);
			break;
			case 'tabs-2':
				if(!job.jset('defined'))
					job.jset($.extend(true, {}, $.jset.defaults, $.jset.fn.getGridDefinition('job')));
				else
					if(job.data('pending_reload'))
						job.jset('reload', [true]);
			break;
			case 'tabs-3':
				if(!client.jset('defined'))
					client.jset($.extend(true, {}, $.jset.defaults, $.jset.fn.getGridDefinition('client')));
				else
					if(client.data('pending_reload'))
						client.jset('reload', [true]);
			break;
			case 'tabs-4':
				if(!worker.jset('defined'))
					worker.jset($.extend(true, {}, $.jset.defaults, $.jset.fn.getGridDefinition('worker')));
				else
					if(worker.data('pending_reload'))
						worker.jset('reload', [true]);
			break;
			case 'tabs-5':
				if(!report.jset('defined'))
					report.jset($.extend(true, {}, $.jset.defaults, $.jset.fn.getGridDefinition('report')));
			break;
			default:
		}
	});

	$("#tabs").trigger('tabsshow', [fn_tamir.currentTab()]);
});

var fn_tamir = {
	apply: function(formid){
		var grid = $(this);
		switch(user_attributes.group){
			case '3':
			case '4':
				$.jset.fn.readonlySet(grid, formid, $($.jset.fn.get_form_field(formid, 'creator')).val() != user_attributes.id);
				break;
			default:
				;
		}
	},
	
	currentTab: function(){
		var currentTabId = $('div[id="tabs"] ul .ui-tabs-active a').attr("href");
		var tui = {};
		tui.panel = $('<div/>');
		tui.panel.attr('id', currentTabId.replace('#', ''));
		return tui;
	},
	
	closeFromsInTab: function(a, i){
		var stay = false;
		var div_id = $(a).attr('href').replace('#', '');
		var currentDiv = $('div[id="' + div_id + '"]');
		var exclude = $("div.ui-jqgrid[id^='gbox_'] div.ui-jqgrid[id^='gbox_']", currentDiv);
		if(currentDiv.find('div[id^="gbox_"]').not(exclude).length > 0){
			$("#tabs").tabs( "option", "active", i );
			currentDiv.find('div[id^="gbox_"]').not(exclude).each(function(){
				var form = $.jset.fn.closeForm($.jset.fn.get_grid_from_container($(this)));
				if(form.is(':visible'))
					stay = true;				
			});
		}
		return stay;
	}
};
