<div class="content-body container">
  <form id="form_creat" method="post">
    <div class="row">
      <div class="content-left col-3">
        <div class="form-group">
          <label for="compact">Mô tả:</label>
          <textarea class="form-control" placeholder="Mô tả, tóm tắt câu truyện" rows="11" v-model="compact"></textarea>
        </div>
        <div class="form-group">
          <label for="virtues">Đức tính:</label>
          <textarea class="form-control" rows="2" placeholder="Trung thực, dũng cảm, lịch sự, lòng tốt" v-model="virtues"></textarea>
        </div>
        <div class="form-group">
          <label for="author">Tên tác giả:</label>
          <input type="text" class="form-control" name="source" placeholder="Tác giả">
        </div>
        <div class="form-group">
          <label for="age">Lứa tuổi:</label>
          <div class="checkbox">
            <label><input type="checkbox" id="age_1" value="1" v-model="checkedAge">Mầm</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" id="age_2" value="2" v-model="checkedAge">Chồi</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" id="age_3" value="3" v-model="checkedAge">Lá</label>
          </div>
          <div class="checkbox">
            <label><input type="checkbox" id="age_4" value="4" v-model="checkedAge">Măng non</label>
          </div>


          <div class="squaredcheck">
            <input type="checkbox" value="None" id="squaredcheck" class="checkbox1" name="check" checked />
            <label for="squaredcheck"><span>Checkbox Blue Color</span></label>
          </div>
          <div class="squaredcheck">
            <input type="checkbox" value="None" id="squaredcheck2" class="checkbox2" name="check" />
            <label for="squaredcheck2"><span>Checkbox Green Color</span></label>
          </div>
          <div class="squaredcheck">
            <input type="checkbox" value="None" id="squaredcheck3" class="checkbox3" name="check" />
            <label for="squaredcheck3"><span>Checkbox Violet Color</span></label>
          </div>


        </div>
        <div class="form-group">
          <!-- <label for="usr">Nguồn:</label> -->
          <input type="text" class="form-control" name="source" v-model="source" placeholder="Nguồn (sưu tầm, sáng tác)">
        </div>
      </div>
      <div class="content-right col-9">
        <div class="name-title form-group">
          <label for="usr">Tên tác phẩm:</label>
          <input text="text" placeholder="tên truyện" name="titlename" class="form-control" v-model="title_name">
        </div>
        <div class="content-main">
          <label for="usr">Nội dung:</label>
          <textarea id="content_main" rows="4" name="maincontent" class="form-control">

                    </textarea>
        </div>
        <div class="footer-save form-group">
          <button type="button" class="btn btn-primary save-content" value="Submit" v-on:click="saveContent">Lưu lại</button>
        </div>
      </div>
    </div>
  </form>
</div>