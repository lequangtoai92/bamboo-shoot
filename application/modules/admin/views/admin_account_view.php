<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-12" id="admin_account_view">
      <table id="firstTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Họ tên</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Biệt danh</th>
            <th>Ngày đăng ký</th>
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
            <td>Biệt danh</td>
            <td>Ngày đăng ký</td>
            <td>
              <select class="form-control select-option" v-model="type">
                <option class="select-option" disabled value="">Duyệt</option>
                <option class="select-option" value="1">Truyện cổ tích Việt Nam</option>
                <option class="select-option" value="2">Truyện cổ tích Nhật Bản</option>
                <option class="select-option" value="3">Truyện cổ Grym</option>
                <option class="select-option" value="4">Truyện thần thoại Hi Lạp</option>
              </select>
            </td>
            <td>
              <input class="form-control" v-model="cause">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>