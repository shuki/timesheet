$(function(){
	$.jset.fn.registerGridDefinition('add_timesheet', {
	  	source: 'timesheet_item',
	  	item_name: 'Timesheet Entry',
		load_edit_record: false,
		reopen_after_add: false,
		spacing: '10px',
		persist:false,
		template: {
			use: true,
			columns: 1
		},
		single_record: {
			active: true,
			displayAlert: true,
			mode: 'new',
			options:{
				closeOnEscape: false,
				closeAfterEdit: false,
				closeAfterAdd: false,
				reloadAfterSubmit: false,
				drag: false,
				resize: false,
				viewPagerButtons: false,
				editCaption: 'Edit',
				addCaption: 'Add'
			}
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
		loadComplete: function(data){
			$('div#add').show();
		},
		onInitializeForm: function(formid){
			var grid = $(this);
			$(formid).closest('.ui-jqdialog').offset({ top: -1});
		},
		afterSubmit: function(response, postdata){
			location.reload(false);
			return [true];
		},
	    grid: {
		    sortname: 'date',
		    sortorder: 'desc',
			//footerrow : true,
			//userDataOnFooter : true,
			width: 60,
			height: 60
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

	$('table#add_timesheet').jset($.extend(true, {}, $.jset.defaults, $.jset.fn.getGridDefinition('add_timesheet')));
});