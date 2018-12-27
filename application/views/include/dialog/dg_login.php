<div class="modal fade modal-login" id="md_dialog" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <ul class="nav nav-login">
          <li><a data-toggle="tab" class="active show" href="#login">Đăng nhập</a></li>
          <li><a data-toggle="tab" href="#register">Đăng ký</a></li>
          <li><a data-toggle="tab" href="#quick_register">Đăng ký nhanh</a></li>
        </ul>
      </div>

      <!-- -------- dang nhap ------- -->
      <div class="tab-content">
        <div id="login" class="tab-pane fade in active show">
          <div class="modal-body">
            <p>Some text in the modal.</p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Tên đăng nhập:</label>
                  <input type="text" class="form-control" id="user_id_login" placeholder="Tên đăng nhập" name="email">
                </div>
                <div class="form-group">
                  <label for="email">Password:</label>
                  <input type="password" class="form-control" id="pwd_login" placeholder="Mật khẩu" name="pwd">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="submit_login">Đăng nhập</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
        <!-- -------- dang ky ------- -->
        <div id="register" class="tab-pane fade">
          <div class="modal-body">
            <p>Some text in the modal.</p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user_name">Họ và tên</label><label class="user-name-import">(*)</label>
                  <input type="text" class="form-control" id="user_name_register" placeholder="Họ và tên" name="user_name">
                </div>
                <div class="form-group">
                  <label for="user_id">Tên đăng nhập</label><label class="user-name-import">(*)</label>
                  <input type="text" class="form-control" id="user_id_register" placeholder="Tên đăng nhập" name="user_id">
                </div>
                <div class="form-group">
                  <label for="email">Email</label><label class="email-import">(*)</label>
                  <input type="email" class="form-control" id="email_register" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Mật khẩu</label><label class="password-import">(*)</label>
                  <input type="password" class="form-control" id="pwd_register" placeholder="Mật khẩu" name="pwd">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" class="form-control" id="address_register" placeholder="Địa chỉ" name="address">
                </div>
                <div class="form-group">
                  <label for="sex">Giới tính</label><label class="sex-import">(*)</label>
                  <select class="form-control select-option" v-model="sex">
                    <option class="select-option" disabled value="">Giới tính</option>
                    <option class="select-option" value="1">Nam</option>
                    <option class="select-option" value="2">Nữ</option>
                    <option class="select-option" value="3">Khác</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="telephone">Số điện thoại</label>
                  <input type="text" class="form-control" id="telephone_register" placeholder="Số điện thoại" name="telephone">
                </div>
                <div class="form-group">
                  <label for="nickname">Biệt danh</label><label class="nickname-import">(*)</label>
                  <input type="text" class="form-control" id="nickname_register" placeholder="Biệt danh" name="nickname">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="submit_register">Đăng ký</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
        <!-- ------- dang ky nhanh ------- -->
        <div id="quick_register" class="tab-pane fade">
          <div class="modal-body">
            <p>Sau khi đăng ký bạn muốn sử dụng hết chức năng thì phải vào mục tài khoản và bổ sung thêm thông tin.</p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user_name">Tên đăng nhập:</label>
                  <input type="text" class="form-control" id="user_id_quick_register" placeholder="Tên đăng nhập" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Mật khẩu:</label>
                  <input type="password" class="form-control" id="pwd_quick_register" placeholder="Mật khẩu" name="pwd">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="submit_quick_register">Đăng ký</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>