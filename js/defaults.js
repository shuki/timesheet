$(function(){
	$.extend(true, $.jset.defaults, {
		persist: false,
		clearPersist: {
			navButtonAdd: false
		},
	    grid: {
	    	direction: 'ltr',
		    width: $(window).width() - 24,
		    height: $(window).height() - 135,
			rownumWidth: 30
	  	},
	  	navigation:{
			options : {
				del: user_attributes.group == 1,
				search: false,
				view: false
			},
			edit:{
				checkOnUpdate:true
			},
			add:{
				checkOnUpdate:true
			},
			del:{
			},
			search:{
			},
			view:{
			}
		}
	});
});

