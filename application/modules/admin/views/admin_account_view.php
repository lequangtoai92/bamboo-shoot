<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-12" id="admin_account_view">
      <table id="firstTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th class="th-1">Họ tên</th>
            <th class="th-2">Tên đăng nhập</th>
            <th class="th-3">Email</th>
            <th class="th-4">Giới tính</th>
            <th class="th-5">Địa chỉ</th>
            <th class="th-6">Số điện thoại</th>
            <th class="th-7">Biệt danh</th>
            <th class="th-8">Ngày đăng ký</th>
            <th class="th-9">Duyệt</th>
            <!-- <th class="th-10">Lý do</th> -->
            <th class="th-11"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in items" class="td-hover">
            <td class="td-1" v-on:click="toAccount(item.TK100)">{{item.BV150}}</td>
            <td class="td-2" v-on:click="toAccount(item.TK100)">{{(item.BV158)}}</td>
            <td class="td-3">{{(item.BV153)}}</td>
            <td class="td-4">{{(item.BV153)}}</td>
            <td class="td-5">{{item.BV154}}</td>
            <td class="td-6">{{item.BV154}}</td>
            <td class="td-7">Biệt danh</td>
            <td class="td-8">{{render_ddMMyyyy(item.BV155)}}</td>
            <td class="td-9">
              <select class="form-control select-option" v-model="type">
                <option class="select-option" disabled value="">Duyệt</option>
                <option class="select-option" value="1">Admin</option>
                <option class="select-option" value="2">Admin 1</option>
                <option class="select-option" value="3">Người dùng</option>
                <option class="select-option" value="4">Người dùng 1</option>
                <option class="select-option" value="5">Khóa</option>
                <option class="select-option" value="6">Xóa</option>
              </select>
            </td>
            <!-- <td class="td-10">
              <input class="form-control" v-model="cause">
            </td> -->
            <td class="td-11">
              <button  v-on:click="confirmation(item.BV100)">Duyệt</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>