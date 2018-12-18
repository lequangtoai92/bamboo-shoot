<div class="content-body container" id="id_feedback">
	<div class="row">
		<div class="content-left ">
			<textarea class="form-control" rows="2" id="content_feedback" placeholder="Nội dung góp ý"></textarea>
		</div>
		<div class="content-right footer-save form-group row">
			<div class="text-thank col-9">
				<span>Cám ơn những đóng góp của các bạn, chúng tôi sẽ cố gắng giải quyết để đem đến trãi nghiệm tốt nhất</span>
			</div>
			<div class="button-right col-3">
				<button type="button" class="btn btn-primary save-content" v-on:click="sendFeedBack">Gửi</button>
			</div>
		</div>
	</div>
	<hr>
	<div v-for="item in items" class="content-feedback-result">
		<p>{{item.FC150}}</p>
		<div class="daytime">
			<span>{{item.FD151}}</span>
		</div>
	</div>

</div>