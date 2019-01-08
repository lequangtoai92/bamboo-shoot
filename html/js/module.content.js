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
  },
  watch: {
    loadItems: function () {
      this.items = this.loadItems;
    }
  },

  mounted: function () {
    this.initdata();
    this.getListQuestion();
    this.getListComment();
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
          self.items = result.data;
          // $('#inset_content').html(result.data[0].ND150);
        },
        error: function (error) {
          console.log(error);
        }
      });
    },

    getListQuestion: function () {
      var param =  getUrlParameter('storyId')
      var self = this;
      var url = "/content/get_question?storyId=" + param;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
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
      var url = "/content/get_comment?storyId=" + param;
      $.ajax({
        type: "GET",
        url: url,
        dataType: 'json',
        success: function (result) {
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