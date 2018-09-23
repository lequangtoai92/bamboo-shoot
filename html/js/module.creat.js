/* 
 * Author: Toailq
 * Create: 27/07/2018
 * creat module
 */
$(document).ready(function () {
    creatPlugin.init();
  });
  

  (function () {
    // 'use strict';
    creatPlugin = {
      inited: false,
      init: function () {
        if (!this.inited) {
          this.evenListener();
          this.inited = true;
          this.txtEditor();
        }
      },
      evenListener: function () {
        var self = this;
        //save cookie setting
        $(document).off('click', '.btn.save-content')
          .on('click', '.btn.save-content', function () { self.saveContent(); });
      },
      saveContent: function () {
        var self = this,
          data = new FormData($('#frm_save_content'));
        var form = document.forms.namedItem("frm_save_content");
        var oData = new FormData(form);
          console.log(oData);
        // $.ajax({
        //   type: "POST",
        //   url: frm_save_cookie_setting.action,
        //   data: data,
        //   contentType: false,
        //   processData: false,
        //   dataType: 'json',
        //   success: function (response) {
        //     if (response.status === "success")
        //       swalSuccess();
        //     else swalError();
        //   },
        //   error: function () { swalError(); },
        //   complete: function () { actionLoading('hide'); }
        // });
  
      },
      txtEditor: function () {
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
            file_browser_callback: function (field_name, url, type, win) {
          }
        });
      },
    }
  })();

