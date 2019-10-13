<?php 
//详细页推荐产品列表
?>
<div class="col-md-4">
    <div class="box-item" style="text-align: center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
        <div class="wrap-img">
            <img src="<?php echo ispic($data['originalPic']); ?>" class="img-circle" alt="">
        </div>
        <p>UV electronic ballast<br/><?php echo $data['title']; ?></p>
        <div class="info" style="text-align: center;">
            <a href="<?php echo $data['spec']; ?>">MORE +</a>
        </div>
    </div>
</div>