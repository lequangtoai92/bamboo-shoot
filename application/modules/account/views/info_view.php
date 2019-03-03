<div class="content-body container">
  <div class="row">
    <div class="content-sup col-md-9" id="account_user">
      <div class="header row">
        <div class="avatar col-md-3">
          <a>
            <img class="avatar_sup" src="<?=base_url();?>html/images/avatar/mm.png">
          </a>
          <div class="bottom-avatar">
            <span class="position">cu ly</span>
          </div>
        </div>
        <div class="biography col-md-9">
          <h4>Tiểu sử</h4>
          <p> Tiểu sử của tác giả........</p>
        </div>
      </div>

      <!-- <div class=row>
				<div class="btn-to-fb col-md-6">
					<div class="fb-like"
						data-href="https://developers.facebook.com/docs/plugins/"
						data-layout="button_count" data-action="like"
						data-size="small" data-show-faces="true"
						data-share="true"></div>
				</div>
				<div class="btn-to-img col-md-6">
					<button class="btn btn-success">Hay</button>
					<button class="btn btn-warning">Chán</button>
				</div>
			</div> -->
      <hr>
      <div class="question item-in-here">
        <h4>Các bài viết</h4>
        <div class="list-story item-article" v-for="item in items">
          <?php echo $this->load->view('include/article/article_home'); ?>
        </div>
      </div>
    </div>
    <div class="content-sub col-md-3">
      <p><img src="<?= base_url(); ?>images/image.jpg" height="310" width="255" alt="thẻ img" /></p>
    </div>

  </div>
</div>