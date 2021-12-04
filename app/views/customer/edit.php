<?php require APPROOT . 'views/inc/header.php'; ?>

<?php if(count($data) <= 0):?>
    <h4><font color="red">!資料不存在!</font></h4>
    <a class="btn btn-success" href="/customer/edit_search">回修改畫面</a>
    <a class="btn btn-danger" href="/">回主畫面</a>
<?php else: ?>
    
    <form action="/customer/update" method="POST">
        <div class="mb-3">
            <label class="form-label">客戶代號:</label>
            <input type="text" class="form-control" name="cust_no" readonly="readonly" value="<?= $data['cust_no'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">姓名:</label>
            <input type="text" class="form-control" name="name" value="<?= $data['name'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">統一編號:</label>
            <input type="text" class="form-control" name="id" value="<?= $data['id'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">電話號碼:</label>
            <input type="text" class="form-control" name="tel_no" value="<?= $data['tel_no'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">地址:</label>
            <input type="text" class="form-control" name="address" value="<?= $data['address'] ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="送出">
        <input type="reset" class="btn btn-danger" value="清除">
        <a class="btn btn-success" href="/">回主畫面</a>
    </form>
        
<?php endif ?>




<?php require APPROOT . 'views/inc/footer.php'; ?>