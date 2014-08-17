$.jset.fn.registerGridDefinition('worker', {
  	source: 'worker',
  	item_name: 'Employee',
	load_edit_record: false,
	reopen_after_add: true,
	spacing: '10px',
	persist:false,
	template: {
		use: true,
		columns: 2
	},
	filterToolbar:{
		hide: false,
		navButtonAdd: false,
	},
	help:{
		hide: false,
		navButtonAdd: true,
	},
	columnChooser:{
		navButtonAdd: true,
	},
	onInitializeForm: function(formid){
		$(formid).closest('.ui-jqdialog').offset({ top: -1});
		var button = $('<tr><td><button id="reset_password" class="CaptionField">Reset Password (1234)</button></td></tr>');
		button.appendTo($.jset.fn.get_form_field(formid, 'group').closest('table'))
		.on('click', function(){
			var title = $.jset.messages.changePasswordTitle;
			var message = '<div dir="ltr">' + $.jset.messages.changePasswordConfirm + '</div>';	
			$.jset.fn.confirm(title, message, function(){
				var params = {
					_method_: 'reset_password',
					id: $.jset.fn.get_form_field(formid, 'id').val()
				};
				
				$.jset.fn.hub('jset/server/hub.php', params, function(data){
					var message = (data == 0 || data == 1) ? '<div dir="ltr">' + $.jset.messages.changePasswordSuccess + '</div>' : '<div dir="ltr">' + $.jset.messages.changePasswordFailure + '</div>';	
					$.jset.fn.alert(title, message);					
				});
			});
		});
	},
	beforeShowForm: function(formid){
		var grid = $(this);
		grid.data('form_action') == 'edit' ? $('button#reset_password').show() : $('button#reset_password').hide();
	},
	afterSubmit: function(response, postdata){
		$('table.jset_table[id="patient"]').jset('pending_reload');
		return [true];
	},
	afterSubmitError: function(response, postdata, frmoper, obj){
		var message = obj.error.message;
		switch(obj.error.info[1]){
			case 1062: 
				message = $.jset.messages.userExists;
				break;
			default:
				;
		}
		return [false, message];
	},
    grid: {
	    sortname: 'first_name',
	    sortorder: 'asc',
  	},
  	navigation:{
		options : {
			add: user_attributes.group == 1,
			del: user_attributes.group == 1,
			search: true,
			view: false
		},
		edit:{
			checkOnUpdate:true
		},
		add:{
			checkOnUpdate:true,
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
