<?php require APPROOT . 'views/inc/header.php'; ?>

    <form action="/customer/store" method="POST">
        <div class="mb-3">
            <label class="form-label">客戶代號:</label>
            <input type="text" class="form-control" name="cust_no">
        </div>
        <div class="mb-3">
            <label class="form-label">姓名:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">統一編號:</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="mb-3">
            <label class="form-label">電話號碼:</label>
            <input type="text" class="form-control" name="tel_no">
        </div>
        <div class="mb-3">
            <label class="form-label">地址:</label>
            <input type="text" class="form-control" name="address">
        </div>
        <input type="submit" class="btn btn-primary" value="送出">
        <input type="reset" class="btn btn-danger" value="清除">
    </form>



<?php require APPROOT . 'views/inc/footer.php'; ?>