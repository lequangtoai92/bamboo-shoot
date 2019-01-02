<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-12" id="admin_feedback_view">
      <table id="firstTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Người viết</th>
            <th>Nội dung</th>
            <th>Thiết bị</th>
            <th>Trình duyệt</th>
            <th>Phiên bản</th>
            <th>Ngày viết</th>
            <th>Duyệt</th>
            <th>Lý do</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in items" class="td-hover" v-on:click="goToContent(row)">
            <td>{{item.BV150}}</td>
            <td>{{(item.BV158)}}</td>
            <td>{{(item.BV153)}}</td>
            <td class="for-age">Tuổi</td>
            <td>{{item.BV154}}</td>
            <td>{{render_ddMMyyyy  (item.BV155)}}</td>
            <td>
              <select class="form-control select-option" v-model="type">
                <option class="select-option" disabled value="">Duyệt</option>
                <option class="select-option" value="1">Truyện cổ tích Việt Nam</option>
                <option class="select-option" value="2">Truyện cổ tích Nhật Bản</option>
                <option class="select-option" value="3">Truyện cổ Grym</option>
                <option class="select-option" value="4">Truyện thần thoại Hi Lạp</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>