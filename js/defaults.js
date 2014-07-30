$(function(){
	$.extend(true, $.jset.defaults, {
		control:{
			upload_file:{
				align:'left',
				formatoptions:{
					picture_lable: 'Picture',
					file_lable: 'File'
				},
				editoptions:{
					custom_options:{
						row_height: '80',
						max_width: '200',
						browse_title: 'Upload File',
						delete_title: 'Remove File',
						show_image: false,
						show_target: false,
						show_link: false,
						show_icon: true,
					}
				},
				formoptions:{
					label_hide: false
				}
			}
		},
		persist: false,
		clearPersist: {
			navButtonAdd: false
		},
	    grid: {
	    	direction: 'ltr',
		    width: $(window).width() - 24,
		    height: $(window).height() - 133,
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

