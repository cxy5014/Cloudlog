		<form method="post" onsubmit="return false;" action="" id="search_box" name="test">
			<div class="mb-3 row col-sm-12">
				<label for="callsign" class="col-sm-2 col-form-label">Callsign</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="callsign" value="">
				</div>
				<div class="col-sm-2">
					<button onclick="searchAdditionalQsos('<?php echo $filename; ?>')" class="btn btn-sm btn-success" type="button"><i class="fas fa-search"></i> 搜索</button>
				</div>
			</div>
			
			<div class="mb-3 row col-sm-12">
				<div class="col-sm-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="filterExisting" checked>
						<label class="form-check-label" for="filterExisting">
							过滤已有QSL卡的记录
						</label>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="multiSelect" checked>
						<label class="form-check-label" for="multiSelect">
							允许多选记录
						</label>
					</div>
				</div>
			</div>
		</form>

		<div id="searchresult"></div>
