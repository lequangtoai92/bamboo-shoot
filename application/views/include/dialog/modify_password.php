<div class="modal fade modal-modify-pass" id="md_modify_pass" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- -------- dang nhap ------- -->
      <div class="tab-content">
        <div class="tab-pane fade in active show">
          <div class="modal-body">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="email">Mật khẩu cũ</label>
                  <input type="password" class="form-control" id="old_pass" placeholder="Mật khẩu cũ" name="old_pwd">
                </div>
                <div class="form-group">
                  <label for="email">Mật khẩu mới:</label>
                  <input type="password" class="form-control" id="new_pass" placeholder="Mật khẩu mới" name="new_pwd">
                </div>
                <div class="form-group">
                  <label for="email">Nhập lại mật khẩu:</label>
                  <input type="password" class="form-control" id="com_pass" placeholder="Nhập lại mật khẩu" name="com_pwd">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="submit_login">Đổi mật khẩu</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>