var viewStory = new Vue({
  el: '#admin_story_view',
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
    goToContent: function (data) {
      console.log(data);
      document.location.href = '/content?storyId=' + data;
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
        KD100: data,
        KD150: self.cause,
        KD151: self.type
      }
      console.log(dataPost);
      $.ajax({
        type: "POST",
        url: '/admin/a2018_updateKD100',
        data: dataPost,  
        dataType: 'json',
        success: function (result) {
          console.log('success', result);
          setTimeout(function () {
            $(".save-content").removeAttr("disabled");
          }, 15000);
          $('#content_feedback').val("");
        },
        error: function (result) {
          console.log('error', result);
          $(".save-content").removeAttr("disabled");
        },
        complete: function () {

        }
      });
    },

    deleteStory: function () {
      var self = this;
      $(".save-content").attr("disabled", "disabled");
      if ($('#content_feedback').val().trim() == "") {
        $(".save-content").removeAttr("disabled");
        return;
      }
      var dataPost = {
        KD150: self.cause,
        KD151: self.type
      }
      $.ajax({
        type: "POST",
        url: '/admin/a2018_updateKD100',
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
      var url = "/admin/get_listBambo?limit=2"
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
