<div class="content-body container">
    <div class="row">
        <div class="content-sup col-9">
            <table id="firstTable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên truyện</th>
                  <th>Tóm tắt</th>
                  <th>Đánh giá</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(row, index) in rows" class="td-hover" v-on:click="goToContent(row)">
                  <td>{{index +1}}</td>
                  <td>{{row.name}}</td>
                  <td>{{row.describe}}</td>
                  <td>{{row.rate}}</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="content-sub col-3">
            <p><img src="<?=base_url();?>images/image.jpg" height="310" width="255" alt="thẻ img" /></p>
        </div>

    </div>
</div>