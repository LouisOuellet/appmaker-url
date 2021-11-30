API.Plugins.url = {
	init:function(){},
	load:{
		index:function(){
			API.request(url.searchParams.get("p"),'load',function(result){
				var dataset = JSON.parse(result);
				if(dataset.success != undefined){}
			});
		},
	},
}

API.Plugins.url.init();
