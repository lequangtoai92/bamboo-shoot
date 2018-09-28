<div class="content-body container">
  <div class="tab">
    <button class="tablinks active" onclick="openCity(event, 'London')">Thông tin</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Bài viết</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tin nhắn</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Thông báo</button>
  </div>

  <div id="London" class="tabcontent" style="display: block;">
    <h3>Thông tin cá nhân</h3>
    <hr>
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="user_name">Họ và tên:</label>
          <input type="text" class="form-control" id="user_name" placeholder="Enter email" name="user_name">
        </div>
        <div class="form-group">
          <label for="user_id">Tên đăng nhập:</label>
          <input type="text" class="form-control" id="user_id" placeholder="Enter email" name="user_id">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>  
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Mật khẩu:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="address">Địa chỉ:</label>
          <input type="text" class="form-control" id="address" placeholder="Enter email" name="address">
        </div>
        <div class="form-group">
          <label for="sex">Giới tính:</label>
          <input type="text" class="form-control" id="sex" placeholder="Enter email" name="sex">
        </div>
        <div class="form-group">
          <label for="telephone">Số điện thoại:</label>
          <input type="text" class="form-control" id="telephone" placeholder="Enter email" name="telephone">
        </div>
        <div class="form-group">
          <label for="nickname">Biệt danh:</label>
          <input type="text" class="form-control" id="nickname" placeholder="Enter password" name="nickname">
        </div>
      </div>
    </div>
  </div>

  <div id="Paris" class="tabcontent">
    <h3>Tất cả bài viết của bạn</h3>
    <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
    </table> 
  </div>

  <div id="Tokyo" class="tabcontent">
    <h3>Tokyo</h3>
    <hr>
    <p>Tokyo is the capital of Japan.</p>
  </div>
</div>