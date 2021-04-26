<!-- 暫時以$posts表示資料表 -->
<!--    

    商品資料表:
    id
    img
    title
    price
    logo_info //用在product.php 第36行
    designer
    category_id //食衣住行娛樂
    keyword //關鍵字～類似#hashtag,這個可多關鍵字？不知要不要這麼複雜
    created_at
    updated_at


    類別資料表:
    id
    title
    slug
    created_at
    updated_at

 -->
<?php foreach($posts as $post){?>
<div class="col-6 col-md-4 col-lg-3 p-1 logo-display">
    <form action="product.php" class="d-block p-4 bg-cloud rounded" method="post">
        <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
            <img src="<?php echo $post['img']?>" alt="" class="d-block m-auto">
            <input type="hidden" name="productImg" value="<?php $post['img']?>">
        </a>
        <button type="submit" class="d-block mx-auto">
            <a class="d-block mt-4 text-center"><?php echo $post['title'] ?></a>
            <input type="hidden" name="prodName" value="<?php $post['title'] ?>">
            <a class="d-block text-center">NT$<?php echo $post['price'] ?></a>
            <input type="hidden" name="prodPrice" value="<?php $post['price'] ?>">
        </button>
    </form>
    <div class="bkmk_1 d-block p-3 position-absolute">
        <img src="images/icon/MDIcon/favorite_border_orange_36dp.svg" data-swap='images/icon/MDIcon/favorite_orange_36dp.svg' data-src='images/icon/MDIcon/favorite_border_orange_36dp.svg' width="36px" height="36px" alt="" class="d-block ml-auto hrtCk">
    </div>
    <div class="bkmk_2 d-inline-block p-4 position-absolute">
        <a href=""><img src="images/icon/designer1.png" alt=""></a>
    </div>
</div>
<?php } ?>