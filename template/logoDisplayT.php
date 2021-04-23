<!-- 商品預覽 -->
<div id="logoDisplay" class="container-fluid modal fade">
    <div class="modal-dialog">
        <div class="container-sm position-relative" style="pointer-events: auto;">
            <form action="product.php" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" method="post">
                <img src="images/logo5.svg" class="w-100 height-200 position-absolute mg-70 z-index-1" id="scoll_overlay" alt="...">
                <input type="hidden" name="pd-pick" value="<?php echo "images/logo5.svg"?>">
                <div class="position-absolute z-index-100 addCart">
                    <button class="btn btn-outline-logoColor px-2 addcarts">加入購物袋</button>
                </div>
                <div class="position-absolute z-index-100 prodDetail">
                    <!-- <a href="product.php" class="btn btn-outline-logoColor px-3">查看商品</a> -->
                    <button type="submit" class="btn btn-outline-logoColor px-3">查看商品</button>
                </div>
                <ol class="carousel-indicators align-items-center pt-3">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" id="underBar1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" id="underBar2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2" id="underBar3"></li>
                </ol>
                <div class="carousel-inner mb-2 mb-xl-0 height-500 mToTop">
                    <div class="carousel-item bg-0_8 rounded active">
                        <div id="logoDpSm" class="d-flex justify-content-center p-5 w-100 height-500">
                            <img src="images/logo5.svg" class="w-100 height-200 opacity-3 mg-70" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item bg-0_8 rounded">
                        <div class="d-flex justify-content-center p-5 w-100 height-500">
                            <img src="images/carousel/65911.png" class="d-block w-auto height-400" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item bg-0_8 rounded">
                        <div class="d-flex justify-content-center p-5 w-100 height-500">
                            <img src="images/carousel/business-cards.png" class="d-block w-auto height-400" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </form>
        </div>
    </div>
</div>