<div class="content-body container">
  <form id="form_creat" method="post">
    <div class="row">
      <div class="content-left col-md-3">
        
      </div>

      <div class="content-right col-md-6">
        <div class="form-group">
            <label for="type">Thể loại </label><label class="field-important-type"> (*)</label>
            <select class="form-control select-option" v-model="type">
              <option class="select-option" disabled value="">Thể loại</option>
              <option class="select-option" value="5">Truyện cười</option>
              <option class="select-option" value="6">Ca dao - tục ngữ</option>
              <option class="select-option" value="7">Lời hay ý đẹp</option>
            </select>
        </div>
        <div class="form-group">
          <label for="author">Tên tác giả</label>
          <input type="text" class="form-control"  v-model="author" name="author" placeholder="<?php echo ($this->session->userdata('B_USER')['name']); ?>">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="source" v-model="source" placeholder="Nguồn (sưu tầm, sáng tác,..)">
        </div>
        <div class="name-title form-group">
          <label for="titlename">Tên tác phẩm </label>
          <input text="text" placeholder="Tên truyện" name="titlename" class="form-control" v-model="title_name">
        </div>
        <div class="content-main">
          <label for="usr">Nội dung </label><label class="field-important-maincontent"> (*)</label>
          <textarea id="content_main" rows="4" name="maincontent" class="form-control"></textarea>
        </div>
        <div class="footer-save form-group">
          <button type="button" class="btn btn-primary save-content" value="Submit" v-on:click="saveContent">Lưu lại</button>
        </div>
      </div>

      <div class="content-left col-md-3">
        
      </div>
      
    </div>
  </form>
</div>