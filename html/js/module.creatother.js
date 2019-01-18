var creatOther = new Vue({
    el: '#form_creat',
    data: {
      compact: '',
      type: '',
      title_name: '',
      virtues: '',
      source: '',
      author: '',
      checkedAge: []
    },
  
    mounted: function () {
      hideLoading();
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
      saveContent2: function () {
        $("#dg_show_content").addClass("show");
        $("#dg_show_content").css("display", "block");

        $("#dg_show_content").removeClass("show");
        $("#dg_show_content").css("display", "none");
      },
      saveContent: function () {
        var self = this;
        if (!checkNull(self.type)){return $(".field-important-type").css("color", "red");}
        // if (!checkNull(self.virtues)){return $(".field-important-virtues").css("color", "red");}
        // if (self.checkedAge.length == 0){return $(".field-important-age").css("color", "red");}
        // if (!checkNull(self.title_name)){return $(".field-important-titlename").css("color", "red");}
        if (!checkNull(self.author)){self.author = undefined}
        if (!checkNull(self.source)){self.source = undefined}
        if (!checkNull(tinymce.editors['content_main'].getContent())){return $(".field-important-maincontent").css("color", "red");}
        var data_post = {
          compact: self.compact,
          type: self.type,
          title_name: self.title_name,
          virtues: self.virtues,
          source: self.source,
          age : self.checkedAge,
          name_author : self.author,
          content_main: tinymce.editors['content_main'].getContent()
        }
        console.log(data_post);
        $.ajax({
          type: "POST",
          url: '/creat/creat_bambo',
          data: data_post,
          dataType: 'json',
          success: function (result) {
            console.log(result);
            $("#dg_show_content #title_name").text(data_post.title_name);
            $("#dg_show_content #content_main").html(data_post.content_main);
            $("#dg_show_content #name_author").text(data_post.name_author + ' - ' + data_post.source);

            $("#dg_show_content").addClass("show");
            $("#dg_show_content").css("display", "block");
            self.compact= '';
            self.type= '';
            self.title_name= '';
            self.virtues= '';
            self.source= '';
            self.author= '';
            self.checkedAge= [];
          },
          error: function (result) {console.log(result);},
          complete: function () {
  
          }
        });
      },

      closeDidlog: function(){
        $("#dg_show_content").removeClass("show");
        $("#dg_show_content").css("display", "");
      }
    }
  });

  $(".btn-close").click(function(){
    $("#dg_show_content").removeClass("show");
    $("#dg_show_content").css("display", "");
  })