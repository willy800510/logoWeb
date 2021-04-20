<div  class="col-2 leftbar bg-cloud d-none d-xl-flex flex-column align-items-stretch justify-content-start mb-1">
    <div class="d-flex align-items-center justify-content-center mt-4">
        <img src="images/headerIcon/usery.svg" alt="" width="25px" style="margin-right: 25px;">
        <h5 class="mt-2">會員名稱</h5>
    </div>
    <div class="nav flex-column align-items-center justify-content-center leftblock py-4 mt-3">
        <h5>帳戶管理</h5>
        <div class="nav-item">
            <a class="nav-link linka" href="userInfo.php">個人資訊</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="password.php">密碼變更</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="sysInfo.php">系統消息</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="bookmark.php">我的收藏</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="customizeCenter.php">客製中心</a>
        </div>
    </div>
    <div class="nav flex-column align-items-center justify-content-center leftblock py-4">
        <h5>我的訂單</h5>
        <div class="nav-item">
            <a class="nav-link linka" href="order.php">全部訂單</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="order.php">修改訂單</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="order.php">已完成訂單</a>
        </div>
    </div>
    <div class="nav flex-column align-items-center justify-content-center leftblock py-4">
        <h5>幫助中心</h5>
        <div class="nav-item">
            <a class="nav-link linka" href="helpCenter.php">常見問題</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="contact.php">聯絡我們</a>
        </div>
    </div>
</div>
<nav id="helper_guide" class="d-xl-none col-3 leftbar leftbar-ori bg-0_8 flex-nowrap flex-column align-items-stretch justify-content-start mb-1 position-fixed z-index-100 navbar collapse overflow-auto">
    <div class="d-flex align-items-center justify-content-center mt-4">
        <img src="images/headerIcon/usery.svg" alt="" width="25px" style="margin-right: 25px;">
        <h5 class="mt-2">會員名稱</h5>
    </div>
    <div class="nav flex-column align-items-center justify-content-center leftblock py-3 mt-3">
        <h5>帳戶管理</h5>
        <div class="nav-item">
            <a class="nav-link linka" href="userInfo.php">個人資訊</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="password.php">密碼變更</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="sysInfo.php">系統消息</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="bookmark.php">我的收藏</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="customizeCenter.php">客製中心</a>
        </div>
    </div>
    <div class="nav flex-column align-items-center justify-content-center leftblock py-3">
        <h5>我的訂單</h5>
        <div class="nav-item">
            <a class="nav-link linka" href="order.php">全部訂單</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="order.php">修改訂單</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="order.php">已完成訂單</a>
        </div>
    </div>
    <div class="nav flex-column align-items-center justify-content-center leftblock py-3">
        <h5>幫助中心</h5>
        <div class="nav-item">
            <a class="nav-link linka" href="helpCenter.php">常見問題</a>
        </div>
        <div class="nav-item">
            <a class="nav-link linka" href="contact.php">聯絡我們</a>
        </div>
    </div>
</nav>

<script>
    var no = $('body').attr('data-no');
    $('.linka').eq(no-1).addClass('active');
    $('#helper_guide .linka').eq(no-1).addClass('active');

    // order
    $('#order-categ a').click(function(){ //order.php line 27
        var no2 = $("#order-categ a").hasClass('active').index();
        $('body').attr('data-no',no2-1)
    })
</script>