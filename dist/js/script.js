API.Plugins.url = {
	init:function(){},
	load:{
		index:function(){
			API.request('url','load',function(result){
				var dataset = JSON.parse(result);
				if(dataset.success != undefined){}
			});
		},
	},
}

API.Plugins.url.init();
