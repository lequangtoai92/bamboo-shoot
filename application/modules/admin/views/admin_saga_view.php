<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-12" id="admin_saga_view">
      <table id="firstTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Tên truyện</th>
            <th>Mô tả</th>
            <th>Đức tính</th>
            <th>Lứa tuổi</th>
            <th>Tác giả</th>
            <th>Ngày viết</th>
            <th>Đánh giá</th>
            <th>Duyệt</th>
            <th>Lý do</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in items" class="td-hover" v-on:click="goToContent(row)">
            <td v-on:click="goToContent(row)">{{item.BV150}}</td>
            <td v-on:click="goToContent(row)">{{(item.BV153)}}</td>
            <td>{{(item.BV158)}}</td>
            <td class="for-age">Tuổi</td>
            <td>{{item.BV154}}</td>
            <td>{{render_ddMMyyyy  (item.BV155)}}</td>
            <td>Đánh giá</td>
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