<div class="content-body container">
  <div class="row">
    <div class="content-sup col-9" id="firstTable">

      <div class="item" v-for="item in items">
        <div class="avatar">
          <a href="/u/nhantambin">
            <img src="https://viblo.asia/images/mm.png">
          </a>
          <div class="bottom-avatar">
            <span class="star">****</span>
            <span class="position">cu ly</span>
            <span class="posts">123</span>
          </div>
        </div>

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
              <!-- <span>thông minh</span> -->
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
        <hr class="hr-end">
      </div>


      <!-- <table id="firstTable" class="table table-striped table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên truyện</th>
            <th>Mô tả</th>
            <th>Đức tính</th>
            <th>Lứa tuổi</th>
            <th>Đánh giá</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(row, index) in rows" class="td-hover"
            v-on:click="goToContent(row)">
            <td>{{index +1}}</td>
            <td>{{row.name}}</td>
            <td>{{row.describe}}</td>
            <td>{{row.virtues}}</td>
            <td class="for-age">{{row.age}}</td>
            <td>{{row.rate}}</td>
          </tr>
        </tbody>
      </table> -->
    </div>
    <div class="content-sub col-3">
      <p><img src="<?=base_url();?>images/image.jpg" height="310" width="255"
        alt="thẻ img" /></p>
    </div>

  </div>
</div>