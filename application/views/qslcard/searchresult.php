<div class="table-responsive">
	<table class="table table-sm table-striped table-hover">
		<tr class="titles">
			<td><input type="checkbox" id="selectAll" class="form-check-input"></td>
			<td><?php echo lang('general_word_date'); ?></td>
			<?php if(($this->config->item('use_auth') && ($this->session->userdata('user_type') >= 2)) || $this->config->item('use_auth') === FALSE || ($this->config->item('show_time'))) { ?>
				<td><?php echo lang('general_word_time'); ?></td>
			<?php } ?>
			<td><?php echo lang('gen_hamradio_call'); ?></td>
			<?php
			echo '<td>';
			switch($this->session->userdata('user_column1')==""?'Mode':$this->session->userdata('user_column1')) {
				case 'Mode': echo lang('gen_hamradio_mode'); break;
				case 'RSTS': echo lang('gen_hamradio_rsts'); break;
				case 'RSTR': echo lang('gen_hamradio_rstr'); break;
				case 'Country': echo lang('general_word_country'); break;
				case 'IOTA': echo lang('gen_hamradio_iota'); break;
				case 'SOTA': echo lang('gen_hamradio_sota'); break;
				case 'State': echo lang('gen_hamradio_state'); break;
				case 'Grid': echo lang('gen_hamradio_gridsquare'); break;
				case 'Distance': echo lang('gen_hamradio_distance'); break;
				case 'Band': echo lang('gen_hamradio_band'); break;
				case 'Frequency': echo lang('gen_hamradio_frequency'); break;
				case 'Operator': echo lang('gen_hamradio_operator'); break;
			}
			echo '</td>';
			echo '<td>';
			switch($this->session->userdata('user_column2')==""?'RSTS':$this->session->userdata('user_column2')) {
				case 'Mode': echo lang('gen_hamradio_mode'); break;
				case 'RSTS': echo lang('gen_hamradio_rsts'); break;
				case 'RSTR': echo lang('gen_hamradio_rstr'); break;
				case 'Country': echo lang('general_word_country'); break;
				case 'IOTA': echo lang('gen_hamradio_iota'); break;
				case 'SOTA': echo lang('gen_hamradio_sota'); break;
				case 'State': echo lang('gen_hamradio_state'); break;
				case 'Grid': echo lang('gen_hamradio_gridsquare'); break;
				case 'Distance': echo lang('gen_hamradio_distance'); break;
				case 'Band': echo lang('gen_hamradio_band'); break;
				case 'Frequency': echo lang('gen_hamradio_frequency'); break;
				case 'Operator': echo lang('gen_hamradio_band'); break;
			}
			echo '</td>';
			echo '<td>';
			switch($this->session->userdata('user_column3')==""?'RSTR':$this->session->userdata('user_column3')) {
				case 'Mode': echo lang('gen_hamradio_mode'); break;
				case 'RSTS': echo lang('gen_hamradio_rsts'); break;
				case 'RSTR': echo lang('gen_hamradio_rstr'); break;
				case 'Country': echo lang('general_word_country'); break;
				case 'IOTA': echo lang('gen_hamradio_iota'); break;
				case 'SOTA': echo lang('gen_hamradio_sota'); break;
				case 'State': echo lang('gen_hamradio_state'); break;
				case 'Grid': echo lang('gen_hamradio_gridsquare'); break;
				case 'Distance': echo lang('gen_hamradio_distance'); break;
				case 'Band': echo lang('gen_hamradio_band'); break;
				case 'Frequency': echo lang('gen_hamradio_frequency'); break;
				case 'Operator': echo lang('gen_hamradio_operator'); break;
			}
			echo '</td>';
			echo '<td>';
			switch($this->session->userdata('user_column4')==""?'Band':$this->session->userdata('user_column4')) {
				case 'Mode': echo lang('gen_hamradio_mode'); break;
				case 'RSTS': echo lang('gen_hamradio_rsts'); break;
				case 'RSTR': echo lang('gen_hamradio_rstr'); break;
				case 'Country': echo lang('general_word_country'); break;
				case 'IOTA': echo lang('gen_hamradio_iota'); break;
				case 'SOTA': echo lang('gen_hamradio_sota'); break;
				case 'State': echo lang('gen_hamradio_state'); break;
				case 'Grid': echo lang('gen_hamradio_gridsquare'); break;
				case 'Distance': echo lang('gen_hamradio_distance'); break;
				case 'Band': echo lang('gen_hamradio_band'); break;
				case 'Frequency': echo lang('gen_hamradio_frequency'); break;
				case 'Operator': echo lang('gen_hamradio_operator'); break;
			}
			echo '</td>';
			echo '<td>';
			switch($this->session->userdata('user_column5')==""?'Country':$this->session->userdata('user_column5')) {
				case 'Mode': echo lang('gen_hamradio_mode'); break;
				case 'RSTS': echo lang('gen_hamradio_rsts'); break;
				case 'RSTR': echo lang('gen_hamradio_rstr'); break;
				case 'Country': echo lang('general_word_country'); break;
				case 'IOTA': echo lang('gen_hamradio_iota'); break;
				case 'SOTA': echo lang('gen_hamradio_sota'); break;
				case 'State': echo lang('gen_hamradio_state'); break;
				case 'Grid': echo lang('gen_hamradio_gridsquare'); break;
				case 'Distance': echo lang('gen_hamradio_distance'); break;
				case 'Band': echo lang('gen_hamradio_band'); break;
				case 'Frequency': echo lang('gen_hamradio_frequency'); break;
				case 'Operator': echo lang('gen_hamradio_operator'); break;
			}
			echo '</td>';
			?>
			<td>操作</td>
		</tr>
		<?php
		$i = 0;
		foreach ($results->result() as $row) {
			echo '<tr>';
			echo '<td><input type="checkbox" class="form-check-input qso-checkbox" value="'.$row->COL_PRIMARY_KEY.'"></td>';
			echo '<td>'; $timestamp = strtotime($row->COL_TIME_ON); echo date('Y-m-d', $timestamp); echo '</td>';
			if(($this->config->item('use_auth') && ($this->session->userdata('user_type') >= 2)) || $this->config->item('use_auth') === FALSE || ($this->config->item('show_time'))) {
				echo '<td>'; $timestamp = strtotime($row->COL_TIME_ON); echo date('H:i', $timestamp); echo '</td>';
			}
			echo '<td>'; echo str_replace("0","&Oslash;",strtoupper($row->COL_CALL)); echo '</td>';
			echo '<td>'; echo $row->COL_MODE; echo '</td>';
			echo '<td>'; echo $row->COL_RST_SENT; echo '</td>';
			echo '<td>'; echo $row->COL_BAND; echo '</td>';
			echo '<td>'; echo $row->COL_COUNTRY; echo '</td>';
			echo '<td><button onclick="addQsoToQsl(\''.$row->COL_PRIMARY_KEY.'\', \''.$filename.'\', \''.$i.'\')" class="btn btn-sm btn-success">添加</button></td>';
			echo '</tr>';
			$i++;
		}
		?>
	</table>
</div>

<div class="row mt-3">
	<div class="col-12">
		<button id="addSelectedQsos" class="btn btn-primary" onclick="addSelectedQsos('<?php echo $filename; ?>')">添加选中的记录</button>
	</div>
</div>

<script>
$(document).ready(function() {
	// 全选/取消全选
	$('#selectAll').change(function() {
		$('.qso-checkbox').prop('checked', $(this).prop('checked'));
	});
	
	// 单个复选框变化时检查是否全部选中
	$('.qso-checkbox').change(function() {
		var allChecked = $('.qso-checkbox:checked').length === $('.qso-checkbox').length;
		$('#selectAll').prop('checked', allChecked);
	});
});

function addSelectedQsos(filename) {
	var selectedQsos = [];
	$('.qso-checkbox:checked').each(function() {
		selectedQsos.push($(this).val());
	});
	
	if(selectedQsos.length === 0) {
		alert('请至少选择一条记录');
		return;
	}
	
	// 发送选中的QSO ID到服务器
	$.ajax({
		url: base_url + 'index.php/qsl/addMultipleQsosToQsl',
		type: 'post',
		data: {
			'filename': filename,
			'qsoids': selectedQsos
		},
		success: function(response) {
			if(response.status === 'Success') {
				location.reload();
			} else {
				alert('添加记录时出错');
			}
		}
	});
}
</script>
