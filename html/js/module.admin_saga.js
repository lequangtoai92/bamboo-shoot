var firstTable = new Vue({
    el: '#admin_saga_view',
    data: {
      items: [],
      loadItems: [],
      type: []
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
  
      rendder_virtues: function (data) {
        if (data !== null) {
          var arr = data.split(",");
          var str = '';
          for(var i = 0; i < arr.length; i++){
            str = str + ' ' + '<span>' + arr[i] + '</span>'
          }
          return str;
        }
      },
  
      initdata: function () {
        var self = this;
        var url = "/home/get_list_story?limit=15"
        $.ajax({
          type: "GET",
          url: url,
          dataType: 'json',
          success: function (result) {
            console.log(result);
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