<?php require APPROOT . 'views/inc/header.php'; ?>


<?php if($data['success']):?>
    <h4>!資料新增成功!</h4>
<?php else: ?>
    <h4><font color="red">!資料新增失敗!</font></h4>
<?php endif?>

<a class="btn btn-success" href="/customer/new">回新增畫面</a>
<a class="btn btn-danger" href="/">回主畫面</a>


<?php require APPROOT . 'views/inc/footer.php'; ?>