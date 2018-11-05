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


      <div class="tab-content">
        <div id="login" class="tab-pane fade in active show">
          <div class="modal-body">
            <p>Some text in the modal.</p>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email_login" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="email">Password:</label>
                  <input type="password" class="form-control" id="pwd_login" placeholder="Enter password" name="pwd">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Đăng nhập</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
        <div id="register" class="tab-pane fade">
          <div class="modal-body">
            <p>Some text in the modal.</p>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="user_name">Họ và tên:</label>
                  <input type="text" class="form-control" id="user_name_register" placeholder="Enter email" name="user_name">
                </div>
                <div class="form-group">
                  <label for="user_id">Tên đăng nhập:</label>
                  <input type="text" class="form-control" id="user_id_register" placeholder="Enter email" name="user_id">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email_register" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Mật khẩu:</label>
                  <input type="password" class="form-control" id="pwd_register" placeholder="Enter password" name="pwd">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="address">Địa chỉ:</label>
                  <input type="text" class="form-control" id="address_register" placeholder="Enter email" name="address">
                </div>
                <div class="form-group">
                  <label for="sex">Giới tính:</label>
                  <input type="text" class="form-control" id="sex_register" placeholder="Enter email" name="sex">
                </div>
                <div class="form-group">
                  <label for="telephone">Số điện thoại:</label>
                  <input type="text" class="form-control" id="telephone_register" placeholder="Enter email" name="telephone">
                </div>
                <div class="form-group">
                  <label for="nickname">Biệt danh:</label>
                  <input type="text" class="form-control" id="nickname_register" placeholder="Enter password" name="nickname">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Đăng ký</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
        <div id="quick_register" class="tab-pane fade">
          <div class="modal-body">
            <p>Sau khi đăng ký bạn muốn sử dụng hết chức năng thì phải vào mục tài khoản và bổ sung thêm thông tin.</p>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email_quick_register" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="email">Password:</label>
                  <input type="password" class="form-control" id="pwd_quick_register" placeholder="Enter password" name="pwd">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Đăng ký</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>