$.jset.fn.registerGridDefinition('client', {
  	source: 'client',
  	item_name: 'Client',
	load_edit_record: false,
	reopen_after_add: false,
	spacing: '10px',
	persist:false,
	template: {
		use: true,
		columns: 1
	},
	filterToolbar:{
		hide: false,
		navButtonAdd: false,
	},
	help:{
		hide: false,
		navButtonAdd: true,
		dialog: {
			autoOpen: false,
			title: 'Help',
			width: 600,
			position: 'top'
		},
		options: {
			caption:'',
			title:'Help', 
			buttonicon :'ui-icon-lightbulb', 
			position: 'last'
		}
	},
	columnChooser:{
		navButtonAdd: true,
	},
	clearPersist: {
		navButtonAdd: true,
		options: {
		    caption: "",
		    buttonicon: "ui-icon-closethick",
		    title: $.jset.nav.clearPersistTitle,
		    onClickButton: function () {
		    	grid = $(this);
		    	$.jset.fn.storeFilterToolbar.call(grid);
		        $.jset.fn.removeObjectFromLocalStorage($.jset.fn.myColumnStateName(grid));
		        grid.jset('reload');
		        //localStorage.clear();
		    }
		}				
	},
	onInitializeForm: function(formid){
		var grid = $(this);
		$(formid).closest('.ui-jqdialog').offset({ top: -1});
	},
	afterSubmit: function(response, postdata){
		return [true];
	},
    grid: {
	    sortname: 'date',
	    sortorder: 'desc',
  	},
  	navigation:{
		options : {
			del: user_attributes.group == 1,
			search: false,
			view: false
		},
		edit:{
		},
		add:{
			closeAfterAdd: true
		},
		del:{
		},
		search:{
		},
		view:{
		}
	}
});
