<div class="modal fade admin-modal-show-content" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- -------- dang nhap ------- -->
      <div class="tab-content">
        <div class="tab-pane fade in active show">
          <div class="modal-body">
            <div class="content-sup col-md-9" v-for="item in itemShow">
              <div class="header">
                <h2>{{item.BV150}}</h2>
              </div>
              <div class="body">
                <label>Mô tả</label>
                <p>{{item.BV153}}</p>
                <label>Đức tính</label>
                <p>{{item.BV158}}</p>
                <label>Lứa tuổi</label>
                <p>{{render_age(item.BV157)}}</p>
                <label>Nội dung</label>
                <p v-html="item.ND150"></p>
                <div class="author">
                  <span>{{item.BV154}} - {{item.BV156}}</span>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-close" data-dismiss="modal">Đóng</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>