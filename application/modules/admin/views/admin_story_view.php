<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-12" id="admin_story_view">
    <div>
      <select class="form-control select-option" v-model="select" v-on:change="selectType()">
        <option class="select-option" value="0">Chưa Duyệt </option>
        <option class="select-option" value="1">Đã duyệt</option>
        <option class="select-option" value="2">Xóa</option>
      </select>
    </div>
      <table id="firstTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th class="th-1">Tên truyện</th>
            <th class="th-2">Mô tả</th>
            <!-- <th class="th-3">Đức tính</th> -->
            <th class="th-4">Tuổi</th>
            <th class="th-5">Tác giả</th>
            <th class="th-6">Ngày viết</th>
            <th class="th-7">Đánh giá</th>
            <th class="th-8">Duyệt</th>
            <th class="th-9">Lý do</th>
            <th class="th-10"></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in items" class="td-hover ">
            <td class="td-1" v-on:click="goToContent(item.BV100)">{{item.BV150}}</td>
            <td class="td-2" v-on:click="showContent(item.BV100)">{{(item.BV153)}}</td>
            <!-- <td>{{(item.BV158)}}</td> -->
            <td class="td-4">{{render_age(item.BV157)}}</td>
            <td class="td-5">{{item.BV154}}</td>
            <td class="td-6">{{render_ddMMyyyy(item.BV155)}}</td>
            <td class="td-7">Đánh giá</td>
            <td class="td-8">
              <select class="form-control select-option" v-model="type">
                <option class="select-option" disabled value="">Duyệt</option>
                <option class="select-option" value="1">Chấp nhận</option>
                <option class="select-option" value="2">Xóa</option>
              </select>
            </td>
            <td class="td-9">
              <input class="form-control" v-model="cause">
            </td>
            <td class="td-9">
              <button  v-on:click="confirmation(item.BV100)">Duyệt</button>
            </td>
          </tr>
        </tbody>
      </table>
      <?php echo $this->load->view('include/dialog/dg_admin_showContent'); ?>
    </div>
  </div>
</div>