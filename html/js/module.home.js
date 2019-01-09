var firstTable = new Vue({
  el: '#firstTable',
  data: {
    items: [],
    loadItems: [],
    input_type: $('#input_type').val()
  },
  watch: {
    loadItems: function () {
      this.items = this.loadItems;
    }
  },

  mounted: function () {
    $("#firstTable .item").hide();
    this.initdata();
  },

  methods: {
    goToContent: function (data) {
      console.log(data);
      document.location.href = '/content?storyId=' + data;
    },

    goToUser: function (data) {
      console.log(data);
      document.location.href = '/account_user?userId=' + data;
    },

    render_ddMMyyyy: function (data) {
      return get_ddMMyyyy(data);
    },

    rendder_virtues: function (data) {
      if (data !== null) {
        var arr = data.split(",");
        var str = '';
        for(var i = 0; i < arr.length; i++){
          str = str + ' ' + '<span>' + arr[i] + '</span>'
        }
        return str;
      }
      // return get_ddMMyyyy(data);
    },

    initdata: function () {
      var self = this;
      var url = "/home/get_list_story?limit=15&type_story=" + self.input_type;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
          console.log(result);
          $("#firstTable .item").show();
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