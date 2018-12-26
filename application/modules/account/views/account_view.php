<div class="content-body container">
  <div class="tab">
    <button class="tablinks active" onclick="openTabAccount(event, 'info_account')">Thông tin</button>
    <button class="tablinks" onclick="openTabAccount(event, 'list_story')">Bài viết</button>
    <button class="tablinks" onclick="openTabAccount(event, 'list_messenger')">Tin nhắn</button>
    <button class="tablinks" onclick="openTabAccount(event, 'list_notifiction')">Thông báo</button>
  </div>

  <div id="info_account" class="tabcontent" style="display: block;">
    <h3>Thông tin cá nhân</h3>
    <hr>
    <div class="row">
      <div class="col-6 body-info">
        <div class="form-group">
          <label for="user_name">Họ và tên</label><label class="user-name-import">(*)</label>
          <input type="text" class="form-control" :value="items.TK151" v-model="TK151" id="user_name" placeholder="Họ và tên" name="user_name">
        </div>
        <div class="form-group">
          <label for="user_id">Tên đăng nhập:</label>
          <input type="text" class="form-control" value="<?php echo ($this->session->userdata('B_LOGIN')['LI150']); ?>" id="user_id" placeholder="Tên đăng nhập" name="user_id" readonly>
        </div>
        <div class="form-group">
          <label for="email">Email</label><label class="email-import">(*)</label>
          <input type="email" class="form-control" :value="items.TK156" v-model="TK156" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group">
          <label for="birthday">Ngày sinh</label><label class="birthday-import">(*)</label>
          <input type="birthday" class="form-control" :value="items.TK152" v-model="TK152" id="birthday" placeholder="Ngày sinh" name="birthday">
        </div>
        
      </div>
      <div class="col-6 body-info">
        <div class="form-group">
          <label for="sex">Giới tính</label><label class="sex-import">(*)</label>
          <!-- <input type="text" class="form-control" id="sex" placeholder="Giới tính" name="sex"> -->
          <select class="form-control select-option" :value="items.TK153">
            <option class="select-option" disabled value="items.TK153"></option>
            <option class="select-option" value="1">Nam</option>
            <option class="select-option" value="2">Nữ</option>
            <option class="select-option" value="3">Khác</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">Địa chỉ:</label>
          <input type="text" class="form-control" :value="items.TK154" v-model="TK154" id="address" placeholder="Địa chỉ" name="address">
        </div>

        <div class="form-group">
          <label for="telephone">Số điện thoại:</label>
          <input type="text" class="form-control" :value="items.TK155" v-model="TK155" id="telephone" placeholder="Số điện thoại" name="telephone">
        </div>
        <div class="form-group">
          <label for="nickname">Biệt danh</label><label class="nickname-import">(*)</label>
          <input type="text" class="form-control" :value="items.TK157" v-model="TK157" id="nickname" placeholder="nick name" name="nickname">
        </div>
      </div>
      <div class="col-12 footer-info">
        <div class="form-group button-form">
          <button type="button" class="btn btn-primary" id="update_info" v-on:click="updateInfo">Cập nhật</button>
        </div>
        <hr>
        <div class="form-group">
          <label>Cấp bậc:</label><span>{{items.TK159}}</span><br>
          <label>Tổng điểm:</label><span>5000</span><br>
          <label>Đã sử dụng:</label><span>3000</span><br>
          <label>Còn lại:</label><span>2000</span><br>
        </div>
      </div>
    </div>
  </div>

  <div id="list_story" class="tabcontent">
    <div class="list-story" v-for="item in items">
      <div class="info">
        <div class="meta-info">
          <div class="meta-info-name">
            <a href="/u/nhantambin">{{item.BV154}}</a>
          </div>
          <div class="meta-info-time">
            <span>{{item.BV155}}</span>
          </div>
        </div>

        <div class="title-info" v-on:click="goToContent(item.BV100)">
          <h4>{{item.BV150}}</h4>
          <div class="title-tag">
            <span>{{item.BV158}}</span>
          </div>
        </div>

        <div class="content-info">
          <p>{{item.BV153}}</p>
        </div>

        <div class="comment-info">
          <span class="comment-item">
            <i class="far fa-eye item-tooltip">
              <span class="tooltiptext">Số lượt xem</span>
            </i>(314)
          </span>
          <span class="comment-item">
            <i class="far fa-thumbs-up item-tooltip">
              <span class="tooltiptext">Lượt chọn hay</span>
            </i>(253)
          </span>
          <span class="comment-item">
            <i class="far fa-thumbs-down item-tooltip">
              <span class="tooltiptext">Lượt chọn chán</span>
            </i>(12)
          </span>
          <span class="comment-item">
            <i class="far fa-comment-dots item-tooltip">
              <span class="tooltiptext">Lượt bình luận</span>
            </i>(86)
          </span>
          <span class="comment-item">
            <i class="fas fa-exclamation-triangle item-tooltip">
              <span class="tooltiptext">Lượt báo cáo</span>
            </i>(7)
          </span>
        </div>
      </div>
    </div>
  </div>

  <div id="list_messenger" class="tabcontent">
    <p>list tin nhắn</p>
  </div>

  <div id="list_notifiction" class="tabcontent">
    <p>list thông báo</p>
  </div>
</div>