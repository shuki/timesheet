$.jset.fn.registerGridDefinition('report', {
  	source: 'report', 
	load_edit_record: false,
	persist:false,
	copy:{
		navButtonAdd: false,
	},
	beforeShowForm: function(formid){
	},
	loadCompleteInit: function(data){
	},
	beforeSubmit: function(postdata, formid){
		return [true];
	},
	beforeRequest: function(){
	},
    grid: {
    	//width:500
  	},
  	navigation:{
		options : {
			add:false,
			edit: false,
			del: false,
			search: false,
			view: false,
		},
		edit:{
		},
		add:{
		},
		del:{
		},
		search:{
		},
		view:{
		}
	}
});
