<?php require APPROOT . 'views/inc/header.php'; ?>

<?php foreach($data as $row): ?>
    <h4>客戶代號：<?= $row['cust_no'] ?></h4>
    <h4>姓名：<?= $row['name'] ?></h4>
    <h4>統一編號：<?= $row['id'] ?></h4>
    <h4>電話號碼：<?= $row['tel_no'] ?></h4>
    <h4>地址：<?= $row['address'] ?></h4>
    <a class="btn btn-sm btn-success" href="/search/index">回查詢畫面</a>
    <a class="btn btn-sm btn-danger" href="/">回主畫面</a>
<?php endforeach ?>

<?php require APPROOT . 'views/inc/footer.php'; ?>