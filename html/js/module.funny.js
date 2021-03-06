var funnyView = new Vue({
    el: '#funnyView',
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
      goToContent: function (data) {
        console.log(data);
        document.location.href = "/bamboo-shoot/content?storyId=" + data;
      },
  
      render_ddMMyyyy: function (data) {
        return get_ddMMyyyy(data);
      },
  
      initdata: function () {
        var self = this;
        var url = "/bamboo-shoot/home/get_list_story?limit=15"
        $.ajax({
          type: "GET",
          url: url,
          dataType: 'json',
          success: function (result) {
            if(result.status == 'success'){
            console.log(result);
            self.items = result.data;
            //phan trang
            // $('.bb-pagination.image').doPagination(10, url, 2, function (res) {
            //   if (res.status === 'success') {
            //     self.loadItems = res.data;
            //     this.items = self.loadItems;
            //   }
            // });
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