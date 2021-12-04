<?php require APPROOT . 'views/inc/header.php'; ?>

<?php if($data['success']):?>
    <h4>!資料修改成功!</h4>
<?php else: ?>
    <h4><font color="red">!資料修改失敗!</font></h4>
<?php endif?>

<a class="btn btn-success" href="/customer/edit_search">回修改畫面</a>
<a class="btn btn-danger" href="/">回主畫面</a>



<?php require APPROOT . 'views/inc/footer.php'; ?>