<?php 
//首页产品列表
?>
<div class="col-sm-6 col-md-3 col-lg-3  <?php echo sys_menu_info('menuName',false,$data['channelId'])?>">
    <div class="post">
        <div class="item-container wow fadeInUp" data-wow-delay="200ms">
            <div class="item-caption">
                <div class="item-caption-inner">
                    <div class="item-caption-inner1">
                        <a class="example-image-link" href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <img src="<?php echo $data['originalPic'];?>" />
        </div>
        <span><?php echo $data['title'];?></span>
    </div>
</div>