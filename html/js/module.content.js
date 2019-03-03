/*
 * Author: Toailq
 * Create: 15/07/2018
 */
var content = new Vue({
  el: '#content_item',
  data: {
    items: [],
    listQuestion: [],
    listComment: [],
    comment: ''
  },
  watch: {
    loadItems: function () {
      this.items = this.loadItems;
    }
  },

  mounted: function () {
    $('.content-sup .question').hide();
    $('.content-sup .footer .comment').hide();
    this.initdata();
    this.getListQuestion();
    this.getListComment();
  },

  methods: {
    sendComment: function (){
      var param =  getUrlParameter('storyId')
      var self = this;
      if (!checkNull(self.comment)){return;}
      var dataPost = {
        BV100: param,
        comment: self.comment}
      $.ajax({
        type: "POST",
        url: "/bamboo-shoot/content/creat_comment",
        data: dataPost,
        dataType: 'json',
        success: function (result) {
          console.log(result);
          self.comment = '';
        },
        error: function (result) {console.log(result);},
        complete: function () {

        }
      });
    },
    initdata: function () {
      var param =  getUrlParameter('storyId')
      var self = this;
      var url = "/bamboo-shoot/content/get_content?storyId=" + param;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
          console.log(result);
          self.items = result.data;
          // $('#inset_content').html(result.data[0].ND150);
          hideLoading();
        },
        error: function (error) {
          console.log(error);
        }
      });
    },

    getListQuestion: function () {
      var param =  getUrlParameter('storyId')
      var self = this;
      var url = "/bamboo-shoot/content/get_question?storyId=" + param;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
          $('.content-sup .question').show();
          console.log(result);
          self.listQuestion = result.data;
        },
        error: function (error) {
          console.log(error);
        }
      });
    },

    getListComment: function () {
      var param =  getUrlParameter('storyId')
      var self = this;
      var url = "/bamboo-shoot/content/get_comment?storyId=" + param;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
          $('.content-sup .footer .comment').show();
          console.log(result);
          self.listComment = result.data;
        },
        error: function (error) {
          console.log(error);
        }
      });
    }
  }
});