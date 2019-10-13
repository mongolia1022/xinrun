<!-- 产品图 -->
<?php 
//2011-09-10
$data=$tag['data.row'];
$originalPic = explode('|',$data['originalPic']);
$middlePic   = explode('|',$data['middlePic']);
$smallPic    = explode('|',$data['smallPic']);
?>
<!-- ////////////Content Box -->
<section class="box-content">
    <div class="container">
        <div class="post">
            <h1 class="entry-title"><?php echo $data['title']; ?></h1>
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo ispic($originalPic[0])?>" width="100%">
                </div>
                <div class="col-md-6">
                    <p><?php echo $data; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
