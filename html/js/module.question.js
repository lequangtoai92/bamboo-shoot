var question = new Vue({
    el: '#id_question',
    data: {
      items: [],
      loadItems: [],
      listStory: [],
      selected: 0,
      question: '',
      answer: ''
    },
    watch: {
      loadItems: function () {
        this.items = this.loadItems;
      }
    },
  
    mounted: function () {
      this.initlistStory();
      this.initdata();
    },
  
    methods: {
      selectType: function () {
        var self = this;
        self.selected = this.selected;
        this.initdata();
  
      },

      sendQuestion: function () {
        var self = this;
        if (!checkNull(self.question)){return;}
        if (!checkNull(self.answer)){return;}
        var dataPost = {
          BV100: self.selected,
          contentQuestion: self.question,
          contentAnswer: self.answer
        }
        $.ajax({
          type: "POST",
          url: '/question/send_question',
          data: dataPost,
          dataType: 'json',
          success: function (result) {
            console.log('success', result);
            self.question = '';
            self.answer = '';
            self.loadItems = self.items;
            self.loadItems.unshift(item);
            this.items = self.loadItems;
          },
          error: function (result) { console.log('error', result); $(".save-content").removeAttr("disabled"); },
          complete: function () {
  
          }
        });
      },

      initlistStory: function () {
        var self = this;
        var url = "/account/get_list_story?limit=500"
        $.ajax({
          type: "GET",
          url: url,
          dataType: 'json',
          success: function (result) {
            self.listStory = result.data;
          },
          error: function (error) {
            console.log(error);
          }
        });
      },

      initdata: function () {
        var self = this;
        var url = "/question/get_question?type=" + self.selected;
        $.ajax({
          type: "GET",
          url: url,
          dataType: 'json',
          success: function (result) {
            if(result.status == 'success'){
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