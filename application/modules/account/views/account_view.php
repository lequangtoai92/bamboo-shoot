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
      <div class="col-6">
        <div class="form-group">
          <label for="user_name">Họ và tên</label><label class="user-name-import">(*)</label>
          <input type="text" class="form-control" id="user_name" placeholder="Họ và tên" name="user_name">
        </div>
        <div class="form-group">
          <label for="user_id">Tên đăng nhập:</label>
          <input type="text" class="form-control" id="user_id" placeholder="Tên đăng nhập" name="user_id" disalbe>
        </div>
        <div class="form-group">
          <label for="email">Email</label><label class="email-import">(*)</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
        
        <div class="form-group">
          <label for="sex">Giới tính</label><label class="sex-import">(*)</label>
          <!-- <input type="text" class="form-control" id="sex" placeholder="Giới tính" name="sex"> -->
          <select class="form-control select-option" v-model="sex">
              <option class="select-option" disabled value="">Giới tính</option>
              <option class="select-option" value="1">Nam</option>
              <option class="select-option" value="2">Nữ</option>
              <option class="select-option" value="3">Khác</option>
            </select>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="address">Địa chỉ:</label>
          <input type="text" class="form-control" id="address" placeholder="Địa chỉ" name="address">
        </div>
        
        <div class="form-group">
          <label for="telephone">Số điện thoại:</label>
          <input type="text" class="form-control" id="telephone" placeholder="Số điện thoại" name="telephone">
        </div>
        <div class="form-group">
          <label for="nickname">Biệt danh</label><label class="nickname-import">(*)</label>
          <input type="text" class="form-control" id="nickname" placeholder="nick name" name="nickname">
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-primary" id="update_info">Cập nhật</button>
        </div>
      </div>
    </div>
  </div>

  <div id="list_story" class="tabcontent">
  <div class="list-story">
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