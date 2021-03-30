<!-- 商品預覽 -->
<div id="logoDisplay" class="container-fluid modal fade">
    <div class="modal-dialog">
        <div class="container-sm position-relative" style="pointer-events: auto;">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <img src="images/AdobeStock_250566348 [轉換].svg" class="w-100 height-200 position-fixed z-index-1" id="scoll_overlay" alt="...">
                <ol class="carousel-indicators align-items-center pt-3">
                    <button type="submit" class="btn btn-outline-pink mr-5">加入購物袋</button>
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" id="underBar1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" id="underBar2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2" id="underBar3"></li>
                    <!-- <button type="submit" class="btn btn-outline-pink ml-5">查看商品</button> -->
                    <a href="product.php" type="btn" class="btn btn-outline-pink ml-5">查看商品</a>
                </ol>
                <div class="carousel-inner mb-2 mb-xl-0 height-500 mToTop">
                    <div class="carousel-item bg-brown rounded active">
                        <div class="d-flex justify-content-center p-5 w-100 height-500">
                            <img src="images/AdobeStock_250566348 [轉換].svg" class="w-100 height-200 opacity-3" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block text-dark">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item bg-brown rounded">
                        <div class="d-flex justify-content-center p-5 w-100 height-500">
                            <img src="images/carousel/65911.png" class="d-block w-auto height-400" alt="...">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item bg-brown rounded">
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