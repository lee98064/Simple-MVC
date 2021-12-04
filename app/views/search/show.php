<?php require APPROOT . 'views/inc/header.php'; ?>


<?php if(count($data) <= 0):?>
    <h4><font color="red">!資料不存在!</font></h4>

<?php else: ?>
    
    <h4>客戶代號：<?= $data['cust_no'] ?></h4>
    <h4>姓名：<?= $data['name'] ?></h4>
    <h4>統一編號：<?= $data['id'] ?></h4>
    <h4>電話號碼：<?= $data['tel_no'] ?></h4>
    <h4>地址：<?= $data['address'] ?></h4>
    
<?php endif ?>

<a class="btn btn-success" href="/search/index">回查詢畫面</a>
<a class="btn btn-danger" href="/">回主畫面</a>

<?php require APPROOT . 'views/inc/footer.php'; ?>