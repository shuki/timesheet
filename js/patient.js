$.jset.fn.registerGridDefinition('patient', {
  	source: 'patient',
  	item_name: 'חבר/ה',
	load_edit_record: false,
	reopen_after_add: true,
	spacing: '10px',
	persist:false,
	template: {
		use: true,
		columns: 3
	},
	filterToolbar:{
		hide: false,
		navButtonAdd: false,
	},
	copy:{
		properties: {
			editCaption: 'העתק'
		},
		options: {
			title: 'העתק'
		}
	},
	help:{
		hide: false,
		navButtonAdd: true,
		dialog: {
			autoOpen: false,
			title: 'הסבר',
			width: 600,
			position: 'top'
		},
		options: {
			caption:'',
			title:'הסבר', 
			buttonicon :'ui-icon-lightbulb', 
			position: 'last'
		}
	},
	columnChooser:{
		navButtonAdd: true,
		multiselect:{
		    locale: {
		        addAll: 'הצג את כל העמודות',
		        removeAll: 'הסתר את כל העמודות',
		        itemsCount: 'עמודות מוצגות'
		    }
		},
		col:{
		    width: 420,
		    modal: true,
		    msel_opts: {dividerLocation: 0.5},
		    dialog_opts: {
		        minWidth: 470,
		        minHeight: 370,
		        show: 'blind',
		        hide: 'explode'
		    }
		}
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
		/*$.jset.fn.append_fields(formid, 'birth_date', 1);
		if($.jset.fn.get_column(grid, 'dormitory').hidden != 1 || $.jset.fn.get_column(grid, 'dormitory').edithidden == 1)
			$.jset.fn.append_fields(formid, 'dormitory', 1);
		
		$.jset.fn.get_form_field(formid, 'age').css('width', '16px');
		$.jset.fn.get_form_field(formid, 'birth_date').on('change.patient', function(){
			$.jset.fn.get_form_field(formid, 'age').val('');
		});*/
	},
	afterSubmit: function(response, postdata){
		return [true];
	},
    grid: {
	    sortname: 'first_name',
	    sortorder: 'asc',
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
			closeAfterAdd: false
		},
		del:{
		},
		search:{
		},
		view:{
		}
	}
});
