var modifyPassword = new Vue({
    el: '#md_modify_pass',
    data: {
        old_pass: '',
        new_pass: '',
        com_pass: ''
    },

    methods: {
        modifyPass: function () {
            var self = this;
            console.log(self.new_pass, self.com_pass)
            if(self.new_pass != self.com_pass){
                return console.log('xác nhận lại mật khẩu');
            }
            var dataPost = {
                old_pass: self.old_pass,
                new_pass: self.new_pass,
                com_pass: self.com_pass
              }
            $.ajax({
                type: "POST",
                url: '/account/update_pass',
                data: dataPost,
                dataType: 'json',
                success: function (result) {
                    console.log('success', result);
                },
                error: function (result) {
                    console.log('error', result);
                },
                complete: function () {

                }
            });
        },

    }
});