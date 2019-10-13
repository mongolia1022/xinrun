<!-- ////////////Content Box -->
<section class="box-content box-style-1">
    <div class="container">
        <div class="row heading">
            <div class="col-lg-12">
                <h2>OUR GALLERY</h2>
                <hr class="line02">
                <div class="intro">Lorem ipsum dolor sit amet</div>
            </div>
        </div>

        <div class="categories">
            <ul class="cat">
                <li>
                    <ol class="type list-inline">
                        <li <?php echo $params['id']==3?'class="now"':'' ?>><a href="<?php echo sys_href(3); ?>">all</a></li>
                        <?php nav_sub(21,1,0);?>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="row">
            <?php
            if( !empty( $tag['data.results'] ) )
            {
                $step=0;
                foreach($tag['data.results'] as $k =>$data)
                {
                    $step=$step+1;
                    if($step==1||($step-1)%3==0){?>
            <div class="col-md-4">
                    <?php }?>
                    <div class="post">
                        <div class="item-container">
                            <div class="item-caption">
                                <div class="item-caption-inner">
                                    <div class="item-caption-inner1">
                                        <a class="example-image-link" href="<?php echo sys_href($data['channelId'],'product',$data['id'])?>">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo $data['smallPic']; ?>"" />
                        </div>
                        <span><?php echo $data['title']; ?></span>
                    </div>
                <?php if($step%3==0||count($tag['data.results'])==$step){?>
                    </div>
                <?php }?>
                    <?php
                }
            }
            else
            {
                echo '<br />暂无产品列表。';
            }
            ?>
        </div>
    </div>
</section>
