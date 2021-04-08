<!-- 商品預覽 -->
<div id="logoDisplay" class="container-fluid modal fade">
    <div class="modal-dialog">
        <div class="container-sm position-relative" style="pointer-events: auto;">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <img src="images/AdobeStock_250566348 [轉換].svg" class="w-100 height-200 position-absolute z-index-1" id="scoll_overlay" alt="...">
                <div class="position-absolute z-index-100" style="left:18%; bottom: 4%;">
                    <button class="btn btn-outline-orange">加入購物袋</button>
                </div>
                <div class="position-absolute z-index-100" style="right:18%; bottom: 4%;">
                    <a href="product.php" class="btn btn-outline-orange">查看商品</a>
                </div>
                <ol class="carousel-indicators align-items-center pt-3">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" id="underBar1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" id="underBar2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2" id="underBar3"></li>
                </ol>
                <div class="carousel-inner mb-2 mb-xl-0 height-500 mToTop">
                    <div class="carousel-item bg-0_8 rounded active">
                        <div class="d-flex justify-content-center p-5 w-100 height-500">
                            <img src="images/AdobeStock_250566348 [轉換].svg" class="w-100 height-200 opacity-3" alt="...">
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
            </div>
        </div>
    </div>
</div>