<div class="form-group">
    <label for="qsoids">选择QSO</label>
    <select multiple class="form-control" id="qsoids" name="qsoids[]">
        <?php foreach($qsos as $qso): ?>
        <option value="<?php echo $qso->COL_PRIMARY_KEY; ?>">
            <?php echo $qso->COL_CALL; ?> - <?php echo $qso->COL_TIME_ON; ?>
        </option>
        <?php endforeach; ?>
    </select>
</div>

<div class="form-group">
    <label for="filename">QSL卡片文件名</label>
    <input type="text" class="form-control" id="filename" name="filename" required>
</div>

<button type="button" class="btn btn-primary" onclick="addMultipleQsosToQsl()">添加选中的QSO到QSL卡片</button>

<script>
function addMultipleQsosToQsl() {
    var qsoids = $('#qsoids').val();
    var filename = $('#filename').val();
    
    if(!qsoids || qsoids.length === 0) {
        alert('请至少选择一个QSO');
        return;
    }
    
    if(!filename) {
        alert('请输入QSL卡片文件名');
        return;
    }
    
    $.ajax({
        url: '<?php echo site_url('qsl/addMultipleQsosToQsl'); ?>',
        type: 'POST',
        data: {
            qsoids: qsoids,
            filename: filename
        },
        success: function(response) {
            if(response.status === 'Success') {
                alert('成功添加选中的QSO到QSL卡片');
                location.reload();
            } else {
                alert('添加失败: ' + response.message);
            }
        },
        error: function() {
            alert('添加失败,请重试');
        }
    });
}
</script> 