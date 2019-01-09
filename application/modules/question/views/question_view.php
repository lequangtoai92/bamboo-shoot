<div class="content-body container" id="id_question">
	<div class="row">
		<div class="content-left ">
			<div class="form-group col-5 conten-select">
				<select class="form-control select-option" v-model="selected">
					<option v-for="story in listStory" v-bind:value="story.BV100">
						{{ story.BV150 }}
					</option>
				</select>
			</div>
			<div class="content-quesion ">
				<textarea class="form-control" rows="2" v-model="question" placeholder="Câu hỏi"></textarea>
			</div>
			<div class="content-answer ">
				<textarea class="form-control" rows="2" v-model="answer" placeholder="Câu trả lời"></textarea>
			</div>
			<div class="button-right">
				<button type="button" class="btn btn-primary save-content" v-on:click="sendQuestion">Gửi</button>
			</div>
		</div>
		<hr>
		<div v-for="item in items" class="content-question-result">
			<h6>{{item.CH150}}</h6>
			<p>{{item.CH151}}</p>
		</div>
		<?php echo $this->load->view('include/paging'); ?>
	</div>
</div>