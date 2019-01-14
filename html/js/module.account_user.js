var infoAccount = new Vue({
	el: '#account_user',
	data: {
		items: [],
		loadItems: [],
		sex: []
	},
	watch: {
		loadItems: function () {
			this.items = this.loadItems;
		}
	},

	mounted: function () {
		this.initdata(); 
		this.initListStory(); 
	},

	methods: {

		initdata: function () {
            var param =  getUrlParameter('userName')
			var self = this;
			var url = "/account/get_info_account?userName=" + param;
			$.ajax({
				type: "GET",
				url: url,
				dataType: 'json',
				success: function (result) {
					console.log( result.data[0]);
					self.items = result.data[0];
				},
				error: function (error) {
					console.log(error);
				}
			});
        },
        
        initListStory: function () {
            var param =  getUrlParameter('userName')
			var self = this;
			var url = "/account/get_list_story?userName=" + param;
			$.ajax({
				type: "GET",
				url: url,
				dataType: 'json',
				success: function (result) {
					if(result.status == 'success'){
					console.log( result.data[0]);
					self.items = result.data;
					//phan trang
					// $('.bb-pagination.image').doPagination(10, url, 2, function (res) {
					// 	if (res.status === 'success') {
					// 		this.loadItems = res.data;
					// 		this.items = this.loadItems;
					// 	}
					// });
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		}
	}
});
