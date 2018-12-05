var creatBamboo = new Vue({
  el: '#form_creat',
  data: {
    compact: '',
    title_name: '',
    virtues: '',
    source: '',
    checkedAge: ''
  },

  mounted: function () {
    tinymce.remove();
    tinymce.init({
      height: 500,
      selector: "#content_main",
      plugins: "code link textcolor colorpicker emoticons visualchars searchreplace wordcount charmap anchor textpattern preview",
      menubar: "edit format insert view ",
      toolbar: 'fontselect | fontsizeselect | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons',
      removed_menuitems: 'newdocument',
      relative_urls: false,
      remove_script_host: false,
      document_base_url: (!window.location.origin ? window.location.protocol + "//" + window.location.host : window.location.origin) + "/",
      file_browser_callback: function (field_name, url, type, win) {},
    });
  },

  methods: {
    saveContent: function () {
      var self = this;
      var data_post = {
        compact: self.compact,
        title_name: self.title_name,
        virtues: self.virtues,
        source: self.source,
        content_main: tinymce.editors['content_main'].getContent()
      }
      console.log(data_post);
      // $.ajax({
      //   type: "POST",
      //   url: '/creat/creat_bambo',
      //   data: data_post,
      //   dataType: 'json',
      //   success: function (result) {
      //   },
      //   error: function () {},
      //   complete: function () {

      //   }
      // });
    }
  }
});