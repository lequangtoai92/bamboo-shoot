var viewStory = new Vue({
  el: '#admin_feedback_view',
  data: {
    items: [],
    loadItems: [],
    type : '',
    cause: '',
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
    toAccount: function (data) {
      console.log(data);
      // document.location.href = '/content?storyId=' + data;
    },

    render_ddMMyyyy: function (data) {
      return get_ddMMyyyy(data);
    },

    render_age : function(data) {
      return convert_age(data);
    },

    confirmation: function(data) {
      var self = this;
      var dataPost = {
        GY100: data,
        // KD150: self.cause,
        GY152: self.type
      }
      console.log(dataPost);
      $.ajax({
        type: "POST",
        url: '/admin/g2018_updateFeedback',
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

    initdata: function () {
      var self = this;
      var url = "/feedback/get_feedback?limit=15"
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
