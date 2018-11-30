$.ajax({
  type: "GET",
  url: '/feedback/get_feedback',
  dataType: 'json',
  success: function (result) {
    console.log('get_feedback', result)
  },
  error: function () {
    console.log('get_feedback error')
  },
  complete: function () {
    
  }
});


var feedback = new Vue({
    el: '#id_feedback',
    data: {
      itemrs: [
        { id: 1, content: 'trang web hoàn thiện kém, nội dung còn sơ sài, nhiều chức năng còn chưa chạy được', data: '29-11-2018'},
        { id: 1, content: 'giao diện quá xấu, ko thể nhin được', data: '29-11-2018'},
        { id: 1, content: 'cần có nhiều nội dung hơn', data: '29-11-2018'},
        { id: 1, content: 'vẫn chưa hoàn thiện, còn thiêu nhiều lắm', data: '29-11-2018'},
        { id: 1, content: 'có cố gắng là tốt rồi', data: '29-11-2018'},
        { id: 1, content: 'lần sau vào lại xem có gì mới không, chứ giờ vẫn không thấy có gì tốt cả', data: '29-11-2018'}
      ]
    },
  
    methods: {
      sendFeedBack: function () {
        var data = {
          contentFeedback : $('#content_feedback').val()
        }
          $.ajax({
            type: "POST",
            url: '/feedback/send_feedback',
            data: data,
            dataType: 'json',
            success: function (result) {
              
            },
            error: function () {
            },
            complete: function () {
              
            }
          });
      }
    }
  });