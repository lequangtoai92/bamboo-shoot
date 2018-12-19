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
      $(".save-content").attr("disabled", "disabled");
      if($('#content_feedback').val().trim() == ""){
        $(".save-content").removeAttr("disabled");
        return;
      }
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
          setTimeout(function(){
            $(".save-content").removeAttr("disabled"); 
          }, 15000);
          $('#content_feedback').val("");
          // self.items.push(dataPost);
          // console.log(self.items);
        },
        error: function (result) {console.log('error', result);$(".save-content").removeAttr("disabled");},
        complete: function () {

        }
      });
    }
  }
});