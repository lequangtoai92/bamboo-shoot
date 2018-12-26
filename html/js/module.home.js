var firstTable = new Vue({
  el: '#firstTable',
  data: {
    items: [],
    loadItems: []
  },
  watch: {
    loadItems: function () {
      this.items = this.loadItems;
    }
  },
  // data: {
  //   rows: [
  //     { id: 1, name: "Chú mèo con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
  //     { id: 2, name: "Chú chó con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
  //     { id: 3, name: "Chú heo con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
  //     { id: 4, name: "Chú gà con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' },
  //     { id: 5, name: "Chú chuột con", describe: 'Chú mèo con ham ăn nên bị bạn bè xa lánh', virtues: 'Chia sẻ, nhường nhịn', age: 'Mầm', rate: '8/10' }
  //   ]
  // },

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