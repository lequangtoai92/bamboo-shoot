<div class="content-body container" id="id_question">
	<div class="row">
    <div class="content-left ">
        <div class="form-group">
            <label for="type">Bài viết</label><label class="field-important-type"> (*)</label>
            <select class="form-control select-option" v-model="type">
              <option class="select-option" disabled value="">Thể loại</option>
              <option class="select-option" value="5">Truyện cười</option>
              <option class="select-option" value="6">Ca dao - tục ngữ</option>
              <option class="select-option" value="7">Châm ngôn</option>
            </select>
        </div>
		</div>
		<div class="content-left ">
			<textarea class="form-control" rows="2" id="content_question" placeholder="Câu hỏi"></textarea>
		</div>
        <div class="content-left ">
			<textarea class="form-control" rows="2" id="content_answer" placeholder="Câu trả lời"></textarea>
		</div>
		<div class="content-right footer-save form-group row">
			<div class="text-thank col-md-9">
				<span>Cám ơn những đóng góp của các bạn, chúng tôi sẽ cố gắng giải quyết để đem đến trãi nghiệm tốt nhất</span>
			</div>
			<div class="button-right col-md-3">
				<button type="button" class="btn btn-primary save-content" v-on:click="sendFeedBack">Gửi</button>
			</div>
		</div>
	</div>
	<hr>
	<div v-for="item in items" class="content-question-result">
		<p>{{item.GY150}}</p>
		<div class="daytime">
			<span>{{item.GY151}}</span>
		</div>
	</div>
	<?php echo $this->load->view('include/paging'); ?>
</div>


