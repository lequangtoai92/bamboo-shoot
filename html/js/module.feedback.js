var feedback = new Vue({
  el: '#id_feedback',
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
        error: function (result) { console.log('error', result); $(".save-content").removeAttr("disabled"); },
        complete: function () {

        }
      });
    },

    initdata: function () {
      var self = this;
      var url = "/feedback/get_feedback?limit=2"
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