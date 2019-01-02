/*
 * Author: Toailq
 * Create: 15/07/2018
 */


var content = new Vue({
    el: '#account_user',
    data: {
      items: []
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
      initdata: function () {
        var param =  getUrlParameter('storyId')
        var self = this;
        var url = "/content/get_content?storyId=" + param;
        $.ajax({
          type: "GET",
          url: url,
          dataType: 'json',
          success: function (result) {
            console.log(result);
            self.items = result.data[0];
            $('#inset_content').html(result.data[0].ND150);
          },
          error: function (error) {
            console.log(error);
          }
        });
      }
    }
  });