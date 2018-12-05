var feedback = new Vue({
  el: '#id_feedback',
  data: {
    items: []
  },

  mounted: function () {
    var self = this;
    $.ajax({
      type: "GET",
      url: '/feedback/get_feedback',
      dataType: 'json',
      success: function (result) {
        self.items = result.data;
      },
      error: function (error) {
        console.log(error);
      }
    });
  },

  methods: {
    sendFeedBack: function () {
      var self = this;
      var dataPost = {
        contentFeedback: $('#content_feedback').val()
      }
      $.ajax({
        type: "POST",
        url: '/feedback/send_feedback',
        data: dataPost,
        dataType: 'json',
        success: function (result) {
          console.log('success', result);
          // self.items.push(dataPost);
          // console.log(self.items);
        },
        error: function (result) {console.log('error', result)},
        complete: function () {

        }
      });
    }
  }
});