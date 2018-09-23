
<div class="content-body container">
    <form  enctype="multipart/form-data" name="frm_save_content" onsubmit="saveContent()" method="post">
        <div class="row">
            <div class="content-left col-3">
                <!-- <div class="form-group">
                    <label for="compact">Mô tả:</label>
                    <textarea rows="4" class="form-control" id="compact"></textarea>
                </div> -->
                <div class="form-group">
                  <label for="compact">Mô tả:</label>
                  <textarea class="form-control" rows="4" id="compact"></textarea>
                </div>
                <div class="form-group">
                  <label for="comment">Đức tính:</label>
                  <textarea class="form-control" rows="2" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="compact">Lứa tuổi:</label>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Mầm</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Chồi</label>
                    </div>
                    <div class="checkbox disabled">
                      <label><input type="checkbox" value="">Lá</label>
                    </div>
                    <div class="checkbox disabled">
                      <label><input type="checkbox" value="">Măng non</label>
                    </div>
                </div>
                <div class="form-group">
                    <!-- <label for="usr">Nguồn:</label> -->
                    <input type="text" class="form-control" name="source" placeholder="Nguồn" >
                </div>
            </div>
            <div class="content-right col-9">
                <div class="name-title form-group">
                    <label for="usr">Tên tác phẩm:</label>
                    <input text="text" name="titlename" class="form-control" >
                </div>
                <div class="content-main">
                    <label for="usr">Nội dung:</label>
                    <textarea id="content_main" rows="4" name="maincontent" class="form-control" >
                    </textarea>         
                </div>
                <div class="footer-save form-group">
                    <button type="button" class="btn btn-primary save-content" value="Submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </form>
</div>