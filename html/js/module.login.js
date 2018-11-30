/* 
 * Author: Toailq
 * Create: 22/011/2018
 * creat module
 */
$(document).ready(function () {
	loginFormPlugin.init();
});


(function () {
	loginFormPlugin = {
		inited: false,
		init: function () {
			if (!this.inited) {
				this.evenListener();
				this.inited = true;
			}
		},
		evenListener: function () {
			var self = this;
			$(document).off('click', '#submit_login')
				.on('click', '#submit_login', function () {
					self.loginForm();
				});
			$(document).off('click', '#submit_register')
				.on('click', '#submit_register', function () {
					self.registerForm();
				});
			$(document).off('click', '#submit_quick_register')
				.on('click', '#submit_quick_register', function () {
					self.quickRegisterForm();
				});
		},
		loginForm: function () {
			var data = {
				userName: $('#user_id_login').val(),
				passWord: $('#pwd_login').val()
			}
			console.log('data', data);
			$.ajax({
				type: "POST",
				url: '/login/user_login',
				data: data,
				dataType: 'json',
				success: function (response) {
					console.log('success', response);
				},
				error: function (response) {
					console.log('error', response);
				},
				complete: function () {
					console.log('complete');
					// actionLoading('hide');
				}
			});

		},
		registerForm: function () {
			var data = {
				name: $('#user_name_register').val(),
				userName: $('#user_id_register').val(),
				email: $('#email_register').val(),
				passWord: $('#pwd_register').val(),
				address: $('#address_register').val(),
				sex: $('#sex_register').val(),
				telephone: $('#telephone_register').val(),
				nickname: $('#nickname_register').val(),
			}
			console.log('data', data);
			$.ajax({
				type: "POST",
				url: '/login/user_register',
				data: data,
				dataType: 'json',
				success: function (response) {
					console.log('success', response);
				},
				error: function (response) {
					console.log('error', response);
				},
				complete: function () {
					console.log('complete');
					// actionLoading('hide');
				}
			});

		},
		quickRegisterForm: function () {
			var data = {
				userName: $('#user_id_quick_register').val(),
				passWord: $('#pwd_quick_register').val()
			}
			console.log('data', data);
			$.ajax({
				type: "POST",
				url: '/login/user_quick_register',
				data: data,
				dataType: 'json',
				success: function (response) {
					console.log('success', response);
				},
				error: function (response) {
					console.log('error', response);
				},
				complete: function () {
					console.log('complete');
					// actionLoading('hide');
				}
			});

		},
	}
})();