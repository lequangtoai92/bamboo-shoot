<div class="content-body container">
	<div class="row">
		<div class="content-sup col-md-9" id="account_user">
			<div class="header">
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
			</div>
			<div class="body">
				<h4>Tiểu sử</h4>
				<p id="inset_content"></p>
			</div>
			<div class=row>
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
			</div>
			<hr>
			<div class="question">
				<h4>Các bài viết</h4>
				<div class="list-story">
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
							</div>
						</div>

						<div class="content-info">
							<p>{{item.BV153}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-sub col-md-3">
			<p><img src="<?= base_url(); ?>images/image.jpg" height="310"
				width="255" alt="thẻ img" /></p>
		</div>

	</div>
</div>