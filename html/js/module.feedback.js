var feedback = new Vue({
  el: '#id_feedback',
  data: {
    items: [],
    loadItems: [],
    feedback: ''
  },
  watch: {
    loadItems: function () {
      this.items = this.loadItems;
    }
  },

  mounted: function () {
    $("#id_feedback .content-feedback-result").hide();
    this.initdata();
  },

  methods: {
    render_ddMMyyyy: function (data) {
      return get_ddMMyyyy(data);
    },

    sendFeedBack: function () {
      var self = this;
      $(".save-content").attr("disabled", "disabled");
      if (!checkNull(self.feedback)) {
        $(".save-content").removeAttr("disabled");
        return;
      }
      var dataPost = {
        contentFeedback: self.feedback
      }
      var item = {GY150: self.feedback, GY151: 'now'}
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
          self.feedback = '';
          self.loadItems = self.items;
          self.loadItems.unshift(item);
          this.items = self.loadItems;
        },
        error: function (result) { console.log('error', result); $(".save-content").removeAttr("disabled"); },
        complete: function () {

        }
      });
    },


    initdata: function () {
      var self = this;
      var url = "/feedback/get_feedback?limit=15"
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
          if(result.status == 'success'){
          self.items = result.data;
          $("#id_feedback .content-feedback-result").show();
          //phan trang
          $('.bb-pagination.image').doPagination(result.data[0].ROWS, url, 15, function (res) {
            if (res.status === 'success') {
              self.loadItems = res.data;
              this.items = self.loadItems;
            }
          });
        }
        },
        error: function (error) {
          console.log(error);
        }
      });
    }
  }
});