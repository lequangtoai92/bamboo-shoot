<div class="modal fade admin-modal-show-content" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- -------- dang nhap ------- -->
      <div class="tab-content">
        <div class="tab-pane fade in active show">
          <div class="modal-body">
            <div class="content-sup" v-for="item in itemShow">
              <div class="header">
                <h2>{{item.BV150}}</h2>
              </div>
              <hr>
              <div class="body">
                <label>Mô tả</label>
                <p>{{item.BV153}}</p>
                <hr>
                <label>Đức tính</label>
                <p>{{item.BV158}}</p>
                <hr>
                <label>Lứa tuổi</label>
                <p>{{render_age(item.BV157)}}</p>
                <hr>
                <label>Nội dung</label>
                <p v-html="item.ND150"></p>
                <hr>
                <label>Đánh giá</label>
                <p>{{render_age(item.BV157)}}</p>
                <hr>
                <div class="author">
                  <span>{{item.BV154}} - {{item.BV156}}</span>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-close-admin-modal" data-dismiss="modal">Đóng</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>