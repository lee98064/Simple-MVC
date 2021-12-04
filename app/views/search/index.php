<?php require APPROOT . 'views/inc/header.php'; ?>

    <form action="/search/show" method="POST">
        <div class="mb-3">
            <label class="form-label">客戶代號:</label>
            <input type="text" class="form-control" name="cust_no">
        </div>
        <input type="submit" class="btn btn-primary" value="送出">
        <input type="reset" class="btn btn-danger" value="清除">
    </form>


<?php require APPROOT . 'views/inc/footer.php'; ?>