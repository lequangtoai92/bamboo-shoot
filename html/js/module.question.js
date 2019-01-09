var question = new Vue({
    el: '#id_question',
    data: {
      items: [],
      loadItems: [],
      listStory: []
    },
    watch: {
      loadItems: function () {
        this.items = this.loadItems;
      }
    },
  
    mounted: function () {
      this.initlistStory();
      this.initdata();
    },
  
    methods: {
      sendQuestion: function () {
        $(".save-content").attr("disabled", "disabled");
        if ($('#content_question').val().trim() == "") {
          $(".save-content").removeAttr("disabled");
          return;
        }
        var dataPost = {
          contentQuestion: $('#content_question').val(),
          contentAnswer: $('#content_answer').val()
        }
        $.ajax({
          type: "POST",
          url: '/question/sendQuestion',
          data: dataPost,
          dataType: 'json',
          success: function (result) {
            console.log('success', result);
            $('#content_question').val("");
            $('#content_answer').val("");
          },
          error: function (result) { console.log('error', result); $(".save-content").removeAttr("disabled"); },
          complete: function () {
  
          }
        });
      },

      initlistStory: function () {
        var self = this;
        var url = "/account/getListStory?limit=500"
        $.ajax({
          type: "GET",
          url: url,
          dataType: 'json',
          success: function (result) {
            self.listStory = result.data;
          },
          error: function (error) {
            console.log(error);
          }
        });
      },

      initdata: function () {
        var self = this;
        var url = "/question/getQuestion?limit=15"
        $.ajax({
          type: "GET",
          url: url,
          dataType: 'json',
          success: function (result) {
            self.items = result.data;
            //phan trang
            // $('.bb-pagination.image').doPagination(10, url, 2, function (res) {
            //   if (res.status === 'success') {
            //     self.loadItems = res.data;
            //     this.items = self.loadItems;
            //   }
            // });
          },
          error: function (error) {
            console.log(error);
          }
        });
      }
    }
  });