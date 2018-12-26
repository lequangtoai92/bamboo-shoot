function openTabAccount(evt, tabName) {
	// Declare all variables
	var i, tabcontent, tablinks;

	// Get all elements with class="tabcontent" and hide them
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	// Get all elements with class="tablinks" and remove the class "active"
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}

	// Show the current tab, and add an "active" class to the link that opened the tab
	document.getElementById(tabName).style.display = "block";
	evt.currentTarget.className += " active";
}

var infoAccount = new Vue({
	el: '#info_account',
	data: {
		items: [],
		loadItems: []
	},
	watch: {
		loadItems: function () {
			this.items = this.loadItems;
		}
	},

	mounted: function () {
		this.initdata();
	},

	methods: {
		sendFeedBack: function () {
			$(".save-content").attr("disabled", "disabled");
			if ($('#content_feedback').val().trim() == "") {
				$(".save-content").removeAttr("disabled");
				return;
			}
			var dataPost = {
				contentFeedback: $('#content_feedback').val()
			}
			$.ajax({
				type: "POST",
				url: '/feedback/send_feedback',
				data: dataPost,
				dataType: 'json',
				success: function (result) {
					console.log('success', result);
					setTimeout(function () {
						$(".save-content").removeAttr("disabled");
					}, 15000);
					$('#content_feedback').val("");

					// self.items.push(dataPost);
					// console.log(self.items);
				},
				error: function (result) {
					console.log('error', result);
					$(".save-content").removeAttr("disabled");
				},
				complete: function () {

				}
			});
		},

		initdata: function () {
			var self = this;
			var url = "/account/get_info_account"
			$.ajax({
				type: "GET",
				url: url,
				dataType: 'json',
				success: function (result) {
					self.items = result.data;
					//phan trang
					$('.bb-pagination.image').doPagination(10, url, 2, function (res) {
						if (res.status === 'success') {
							self.loadItems = res.data;
							this.items = self.loadItems;
						}
					});
				},
				error: function (error) {
					console.log(error);
				}
			});
		}
	}
});



var listStory = new Vue({
	el: '#list_story',
	data: {
		items: [],
		loadItems: []
	},
	watch: {
		loadItems: function () {
			this.items = this.loadItems;
		}
	},

	mounted: function () {
		this.initdata();
	},

	methods: {
		sendFeedBack: function () {
			$(".save-content").attr("disabled", "disabled");
			if ($('#content_feedback').val().trim() == "") {
				$(".save-content").removeAttr("disabled");
				return;
			}
			var dataPost = {
				contentFeedback: $('#content_feedback').val()
			}
			$.ajax({
				type: "POST",
				url: '/account/send_feedback',
				data: dataPost,
				dataType: 'json',
				success: function (result) {
					console.log('success', result);
					setTimeout(function () {
						$(".save-content").removeAttr("disabled");
					}, 15000);
					$('#content_feedback').val("");

					// self.items.push(dataPost);
					// console.log(self.items);
				},
				error: function (result) {
					console.log('error', result);
					$(".save-content").removeAttr("disabled");
				},
				complete: function () {

				}
			});
		},

		initdata: function () {
			var self = this;
			var url = "/account/get_feedback?limit=2"
			$.ajax({
				type: "GET",
				url: url,
				dataType: 'json',
				success: function (result) {
					self.items = result.data;
					//phan trang
					$('.bb-pagination.image').doPagination(10, url, 2, function (res) {
						if (res.status === 'success') {
							self.loadItems = res.data;
							this.items = self.loadItems;
						}
					});
				},
				error: function (error) {
					console.log(error);
				}
			});
		}
	}
});

var listMessenger = new Vue({
	el: '#list_messenger',
	data: {
		items: [],
		loadItems: []
	},
	watch: {
		loadItems: function () {
			this.items = this.loadItems;
		}
	},

	mounted: function () {
		this.initdata();
	},

	methods: {
		sendFeedBack: function () {
			$(".save-content").attr("disabled", "disabled");
			if ($('#content_feedback').val().trim() == "") {
				$(".save-content").removeAttr("disabled");
				return;
			}
			var dataPost = {
				contentFeedback: $('#content_feedback').val()
			}
			$.ajax({
				type: "POST",
				url: '/feedback/send_feedback',
				data: dataPost,
				dataType: 'json',
				success: function (result) {
					console.log('success', result);
					setTimeout(function () {
						$(".save-content").removeAttr("disabled");
					}, 15000);
					$('#content_feedback').val("");

					// self.items.push(dataPost);
					// console.log(self.items);
				},
				error: function (result) {
					console.log('error', result);
					$(".save-content").removeAttr("disabled");
				},
				complete: function () {

				}
			});
		},

		initdata: function () {
			var self = this;
			var url = "/account/get_feedback?limit=2"
			$.ajax({
				type: "GET",
				url: url,
				dataType: 'json',
				success: function (result) {
					self.items = result.data;
					//phan trang
					$('.bb-pagination.image').doPagination(10, url, 2, function (res) {
						if (res.status === 'success') {
							self.loadItems = res.data;
							this.items = self.loadItems;
						}
					});
				},
				error: function (error) {
					console.log(error);
				}
			});
		}
	}
});

var listNotifiction = new Vue({
	el: '#list_notifiction',
	data: {
		items: [],
		loadItems: []
	},
	watch: {
		loadItems: function () {
			this.items = this.loadItems;
		}
	},

	mounted: function () {
		this.initdata();
	},

	methods: {
		sendFeedBack: function () {
			$(".save-content").attr("disabled", "disabled");
			if ($('#content_feedback').val().trim() == "") {
				$(".save-content").removeAttr("disabled");
				return;
			}
			var dataPost = {
				contentFeedback: $('#content_feedback').val()
			}
			$.ajax({
				type: "POST",
				url: '/feedback/send_feedback',
				data: dataPost,
				dataType: 'json',
				success: function (result) {
					console.log('success', result);
					setTimeout(function () {
						$(".save-content").removeAttr("disabled");
					}, 15000);
					$('#content_feedback').val("");

					// self.items.push(dataPost);
					// console.log(self.items);
				},
				error: function (result) {
					console.log('error', result);
					$(".save-content").removeAttr("disabled");
				},
				complete: function () {

				}
			});
		},

		initdata: function () {
			var self = this;
			var url = "/account/get_feedback?limit=2"
			$.ajax({
				type: "GET",
				url: url,
				dataType: 'json',
				success: function (result) {
					self.items = result.data;
					//phan trang
					$('.bb-pagination.image').doPagination(10, url, 2, function (res) {
						if (res.status === 'success') {
							self.loadItems = res.data;
							this.items = self.loadItems;
						}
					});
				},
				error: function (error) {
					console.log(error);
				}
			});
		}
	}
});