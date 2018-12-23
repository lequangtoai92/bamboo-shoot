<div class="content-body container">
  <form id="form_creat" method="post">
    <div class="row">
      <div class="content-left col-3">
        <div class="form-group">
          <label for="compact">Mô tả </label><label class="field-important-compact"> (*)</label>
          <textarea class="form-control" placeholder="Mô tả, tóm tắt câu truyện" rows="11" v-model="compact"></textarea>
        </div>
        <div class="form-group">
          <label for="virtues">Đức tính </label><label class="field-important-virtues"> (*)</label>
          <textarea class="form-control" rows="2" placeholder="Trung thực, dũng cảm, lịch sự, lòng tốt" v-model="virtues"></textarea>
        </div>
        <div class="form-group">
          <label for="author">Tên tác giả</label>
          <input type="text" class="form-control"  v-model="author" name="author" placeholder="<?php echo ($this->session->userdata('B_USER')['name']); ?>">
        </div>
        <div class="form-group">
          <label for="age">Lứa tuổi </label><label class="field-important-age"> (*)</label>
          <div class="checkbox">
            <label><input type="radio" id="age_1" value="1" v-model="checkedAge">Mầm</label>
          </div>
          <div class="checkbox">
            <label><input type="radio" id="age_2" value="2" v-model="checkedAge">Chồi</label>
          </div>
          <div class="checkbox">
            <label><input type="radio" id="age_3" value="3" v-model="checkedAge">Lá</label>
          </div>
          <div class="checkbox">
            <label><input type="radio" id="age_4" value="4" v-model="checkedAge">Măng non</label>
          </div>

        </div>
        <div class="form-group">
          <!-- <label for="usr">Nguồn:</label> -->
          <input type="text" class="form-control" name="source" v-model="source" placeholder="Nguồn (sưu tầm, sáng tác,..)">
        </div>
      </div>
      <div class="content-right col-9">
        <div class="name-title form-group">
          <label for="titlename">Tên tác phẩm </label><label class="field-important-titlename"> (*)</label>
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
    </div>
  </form>
</div>