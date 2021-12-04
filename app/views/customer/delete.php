<?php require APPROOT . 'views/inc/header.php'; ?>


<?php if(count($data) <= 0):?>
    <h4>客戶代號：<?= $_POST["cust_no"] ?></h4>
    <h4><font color="red">!資料不存在!</font></h4>
    <a class="btn btn-success" href="/customer/delete_search">回刪除畫面</a>
    <a class="btn btn-danger" href="/">回主畫面</a>
<?php else: ?>

    <h4>客戶代號：<?= $data['cust_no'] ?></h4>
    <h4>姓名：<?= $data['name'] ?></h4>
    <h4>統一編號：<?= $data['id'] ?></h4>
    <h4>電話號碼：<?= $data['tel_no'] ?></h4>
    <h4>地址：<?= $data['address'] ?></h4>
    <h4><font color="red">是否真的要刪除?</font></h4>
    <form action="/customer/destroy" method="POST">
        <input type="hidden" name="cust_no" value="<?= $data['cust_no'] ?>">
        <input type="submit" class="btn btn-danger" value="是">
        <a class="btn btn-success" href="/customer/delete_search">否</a>
    </form>
    
<?php endif ?>


<?php require APPROOT . 'views/inc/footer.php'; ?>