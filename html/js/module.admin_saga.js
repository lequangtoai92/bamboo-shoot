var viewStory = new Vue({
  el: '#admin_saga_view',
  data: {
    items: [],
    loadItems: [],
    type : '',
    cause: '',
    select: 0,
    itemShow: [],
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
    selectType: function () {
      var self = this;
      self.select = this.select;
      this.initdata();
    },

    render_age : function(data) {
      return convert_age(data);
    },

    goToContent: function (data) {
      console.log(data);
      document.location.href = '/content?storyId=' + data;
    },

    showContent : function (data) {
      var self = this;
      var url = "/admin/get_storyAll?storyId=" + data;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
          console.log(result);
          self.itemShow = result.data;
          $(".admin-modal-show-content").addClass("show");
          $(".admin-modal-show-content").css("display", "block");
        },
        error: function (error) {
          console.log(error);
        }
      });
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
      var url = "/admin/get_listBambo?BV151=1&type=" + self.select;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
          if(result.status == 'success'){
          console.log(result);
          self.items = result.data;
          //phan trang
          $('.bb-pagination.image').doPagination(result.data[0].ROWS, url, 15, function (res) {
            if (res.status === 'success') {
              self.loadItems = res.data;
              this.items = self.loadItems;
            }
          });
        }
        hideLoading();
        },
        error: function (error) {
          console.log(error);
        }
      });
    }
  }
});

$(".btn-close-admin-modal").click(function () {
  $(".admin-modal-show-content").removeClass("show");
  $(".admin-modal-show-content").css("display", "");
})