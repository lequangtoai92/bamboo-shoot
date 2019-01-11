<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-12" id="admin_feedback_view">
      <table id="firstTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th class="th-1">Người viết</th>
            <th class="th-2">Nội dung</th>
            <th class="th-3">Thiết bị</th>
            <th class="th-4">Trình duyệt</th>
            <th class="th-5">Phiên bản</th>
            <th class="th-6">Ngày viết</th>
            <th class="th-7">Duyệt</th>
            <th class="th-8"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in items" class="td-hover">
            <td class="td-1" v-on:click="openPopup(item.GY100)">{{item.TK100}}</td>
            <td class="td-2" v-on:click="openPopup(item.GY100)">{{(item.GY150)}}</td>
            <td class="td-3">{{(item.GY154)}}</td>
            <td class="td-4">{{(item.GY155)}}</td>
            <td class="td-5">{{item.GY156}}</td>
            <td class="td-6">{{render_ddMMyyyy  (item.GY151)}}</td>
            <td class="td-7">
              <select class="form-control select-option" v-model="type">
                <option class="select-option" disabled value="">Duyệt</option>
                <option class="select-option" value="1">Chấp nhận</option>
                <option class="select-option" value="2">Hoàn thành</option>
                <option class="select-option" value="3">Để sau</option>
                <option class="select-option" value="4">Bỏ qua</option>
              </select>
            </td>
            <td class="td-11">
              <button  v-on:click="confirmation(item.GY100)">Duyệt</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>