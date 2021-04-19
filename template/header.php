<!-- 導覽 -->
<header class="container-fluid position-fixed fixed-top">
    <!-- xl -->
    <div class="container-sm d-none d-xl-block">
        <div class="d-flex justify-content-between align-items-center p-1">
            <a href="index.php" class="logo"></a>
            <!-- <div class="menu">    -->
            <div class="nav justify-content-end">   
                <a href="bookmark.php" class="nav-link p-3 head_icon">
                    <!-- <img src="images/headerIcon/bookmark.svg" alt=""> -->
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FC9545"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </a>
                <span class="dropdown bagInfo head_icon">
                    <a href="carts_lists.php" class="nav-link p-3">
                        <div class="calling-2"></div>
                        <!-- <img src="images/headerIcon/bag.svg" class="headIcon" alt=""> -->
                        <svg class="headIcon" width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.2 6.99539V5.51152C14.2 2.18021 11.6 0 9 0C6.4 0 3.8 2.14643 3.8 5.47774V6.99539H0V19.2241C0 21.3095 0.998973 23 2.97143 23H15.0286C17.001 23 18 21.3095 18 19.2241V6.99539H16.1H14.2ZM5.4 5.47774C5.4 3.35792 7.2 1.48387 9 1.48387C10.8 1.48387 12.6 3.39171 12.6 5.51152V6.99539H5.4V5.47774ZM13.4 10.8111C13 10.8111 12.6 10.3871 12.6 9.96313C12.6 9.53917 13 9.11521 13.4 9.11521C13.8 9.11521 14.2 9.53917 14.2 9.96313C14.2 10.3871 13.8 10.8111 13.4 10.8111ZM4.6 10.8111C4.2 10.8111 3.8 10.4136 3.8 9.96313C3.8 9.53917 4.2 9.11521 4.6 9.11521C5 9.11521 5.4 9.53917 5.4 9.96313C5.4 10.3871 5 10.8111 4.6 10.8111Z" fill="white" fill-opacity="0.7"/></svg>
                    </a>
                    <div class="dropdown-menu bagList" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-item d-flex align-items-center justify-content-around py-3">
                            <a href="#" class="logo"></a>
                            <span class="text-muted">Company Name</span>
                            <span class="text-right text-alert">NT$200</span>
                            <!-- <span class="material-icons md-18 text-black-50">clear</span> -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="rgba(0,0,0,.5)"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                        </div>
                        <div class="dropdown-item d-flex align-items-center justify-content-around py-3">
                            <a href="#" class="logo"></a>
                            <span class="text-muted">Company Name</span>
                            <span class="text-right text-alert">NT$200</span>
                            <!-- <span class="material-icons md-18 text-black-50">clear</span> -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="rgba(0,0,0,.5)"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
                        </div>
                        <!-- <a href="carts_lists.php" class="btn btn-outline-logoColor-2 mr-3" type="button">查看我的購物袋</a> -->
                        <a href="carts_lists.php" class="btn btn-outline-logoColor-2 mt-2 mr-3">查看我的購物袋</a>
                    </div>
                </span>
                <a href="sysInfo.php" class="nav-link p-3 head_icon sysInfo position-relative">
                    <div class="calling-2 call-2"></div>
                    <!-- <img src="images/headerIcon/message.svg" class="headIcon" alt=""> -->
                    <svg class="headIcon" width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M9.9774 22.9797C11.5506 22.9797 12.8267 21.5691 12.8267 19.8285H7.12806C7.12806 21.5691 8.40419 22.9797 9.9774 22.9797ZM19.5713 15.8295C18.7107 14.8073 17.1005 13.2696 17.1005 8.23265C17.1005 -3.14258 2.85427 -2.2332 2.85427 8.23265C2.85427 13.2696 1.24408 14.8073 0.383536 15.8295C0.116285 16.1471 -0.0021963 16.5267 3.07957e-05 16.8984C0.0049304 17.7059 0.578184 18.474 1.42982 18.474H18.525C19.3766 18.474 19.9503 17.7059 19.9548 16.8984C19.957 16.5267 19.8385 16.1466 19.5713 15.8295Z" fill="white" fill-opacity="0.7"/></g><defs><clipPath id="clip0"><rect width="20" height="23" fill="white"/></clipPath></defs></svg>
                </a>
                <span class="dropdown userInfo head_icon">
                    <a href="userInfo.php" class="nav-link p-3" id="dropdownMenulink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <img src="images/headerIcon/user.svg" class="headIcon" alt=""> -->
                        <svg class="headIcon" width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.5875 10.8101C13.5147 9.96508 14.1645 8.85967 14.4515 7.639C14.7386 6.41832 14.6495 5.13945 14.196 3.97028C13.7425 2.80111 12.9457 1.79628 11.9103 1.08772C10.8748 0.379168 9.64916 0 8.39416 0C7.13916 0 5.91349 0.379168 4.87806 1.08772C3.84264 1.79628 3.04585 2.80111 2.59232 3.97028C2.13879 5.13945 2.04971 6.41832 2.33677 7.639C2.62384 8.85967 3.27363 9.96508 4.20084 10.8101C1.69086 11.9401 0 14.05 0 16.4677C0 20.0755 3.75746 23 8.39416 23C13.0309 23 16.7883 20.0755 16.7883 16.4677C16.7883 14.05 15.0975 11.9401 12.5875 10.8101Z" fill="white" fill-opacity="0.7"/></svg>
                    </a>
                    <div class="dropdown-menu userList pt-3 pb-2" aria-labelledby="dropdownMenuLink">
                        <a href="userInfo.php" class="dropdown-item">帳戶管理</a>
                        <a href="order.php" class="dropdown-item">我的訂單</a>
                        <a href="customizeCenter.php" class="dropdown-item">客製中心</a>
                        <a href="#" class="dropdown-item">登出</a>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <!-- sm/md -->
    <div class="container-sm d-block d-sm-block d-xl-none">
        <div class="d-flex justify-content-between align-items-center p-2">
            <a href="index.php" class="logo"></a>
            <div class="sideMenuBtn py-4 position-relative" data-toggle="collapse" data-target="#collapseMenu-sm" aria-expanded="false" aria-controls="collapseMenu-sm">
                <div class="sideMenuBtnCall"></div>
                <div class="menuBurger"></div>
            </div>
        </div>
    </div>
    <!-- sm/md menu -->
    <div class="container-fluid position-fixed d-xl-none flex-column align-items-start py-3 collapse" id="collapseMenu-sm">
        <div class="container-sm px-1">
            <div class="d-flex flex-column col-12 col-md-3 align-items-center">
                <a href="index.php" class="text-alert py-1">首頁</a>
                <a href="#" class="py-1">購買流程</a>
                <a href="search.php" class="py-1">熱門商品</a>
            </div>
            <a href="#" class="d-flex justify-content-between my-3 menulist" data-toggle="collapse" data-target="#userCollapse" aria-expanded="false" aria-controls="userCollapse">
                <svg width="16" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="col-3 icon">
                    <path d="M12.5875 10.8101C13.5147 9.96508 14.1645 8.85967 14.4515 7.639C14.7386 6.41832 14.6495 5.13945 14.196 3.97028C13.7425 2.80111 12.9457 1.79628 11.9103 1.08772C10.8748 0.379168 9.64916 0 8.39416 0C7.13916 0 5.91349 0.379168 4.87806 1.08772C3.84264 1.79628 3.04585 2.80111 2.59232 3.97028C2.13879 5.13945 2.04971 6.41832 2.33677 7.639C2.62384 8.85967 3.27363 9.96508 4.20084 10.8101C1.69086 11.9401 0 14.05 0 16.4677C0 20.0755 3.75746 23 8.39416 23C13.0309 23 16.7883 20.0755 16.7883 16.4677C16.7883 14.05 15.0975 11.9401 12.5875 10.8101Z" fill="#DBDBDB"/></svg>
                <span class="col-9">我的帳戶</span>
            </a>
            <div class="collapse my-3" id="userCollapse">
                <div class="d-flex flex-column col-3 offset-3">
                    <h6 class="font-weight-normal">帳戶管理</h6>
                    <ul>
                        <li class="my-1 font-weight-light font8rem"><a href="userInfo.php" class="">個人資訊</a></li>
                        <li class="my-1 font-weight-light font8rem"><a href="password.php" class="">密碼變更</a></li>
                        <li class="my-1 font-weight-light font8rem"><a href="customizeCenter.php" class="">客製中心</a></li>
                    </ul>
                    <h6 class="font-weight-normal">我的訂單</h6>
                    <ul>
                        <li class="my-1 font-weight-light font8rem"><a href="order.php" class="">全部訂單</a></li>
                        <li class="my-1 font-weight-light font8rem"><a href="order.php" class="">修改中訂單</a></li>
                        <li class="my-1 font-weight-light font8rem"><a href="order.php" class="">已完成訂單</a></li>
                    </ul>
                    <h6 class="font-weight-normal"><a href="customizeCenter.php">客製中心</a></h6>
                    <a href="#" class="nav-link text-secondary">登出</a>
                </div>
            </div>
            <a href="carts_lists.php" class="d-flex justify-content-between my-3 menulist carts position-relative">
                <div class="calling-3"></div>
                <svg width="16" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="col-3 icon">
                    <path d="M14.2 6.99539V5.51152C14.2 2.18021 11.6 0 9 0C6.4 0 3.8 2.14643 3.8 5.47774V6.99539H0V19.2241C0 21.3095 0.998973 23 2.97143 23H15.0286C17.001 23 18 21.3095 18 19.2241V6.99539H16.1H14.2ZM5.4 5.47774C5.4 3.35792 7.2 1.48387 9 1.48387C10.8 1.48387 12.6 3.39171 12.6 5.51152V6.99539H5.4V5.47774ZM13.4 10.8111C13 10.8111 12.6 10.3871 12.6 9.96313C12.6 9.53917 13 9.11521 13.4 9.11521C13.8 9.11521 14.2 9.53917 14.2 9.96313C14.2 10.3871 13.8 10.8111 13.4 10.8111ZM4.6 10.8111C4.2 10.8111 3.8 10.4136 3.8 9.96313C3.8 9.53917 4.2 9.11521 4.6 9.11521C5 9.11521 5.4 9.53917 5.4 9.96313C5.4 10.3871 5 10.8111 4.6 10.8111Z" fill="#DBDBDB"/></svg>
                <span class="col-9">購物袋</span>
            </a>
            <a href="sysInfo.php" class="d-flex justify-content-between my-3 menulist sysInfo position-relative">
                <div class="call show"></div>
                <svg width="16" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="col-3 icon">
                    <g clip-path="url(#clip0)">
                    <path d="M9.9774 22.9797C11.5506 22.9797 12.8267 21.5691 12.8267 19.8285H7.12806C7.12806 21.5691 8.40419 22.9797 9.9774 22.9797ZM19.5713 15.8295C18.7107 14.8073 17.1005 13.2696 17.1005 8.23265C17.1005 -3.14258 2.85427 -2.2332 2.85427 8.23265C2.85427 13.2696 1.24408 14.8073 0.383536 15.8295C0.116285 16.1471 -0.0021963 16.5267 3.07957e-05 16.8984C0.0049304 17.7059 0.578184 18.474 1.42982 18.474H18.525C19.3766 18.474 19.9503 17.7059 19.9548 16.8984C19.957 16.5267 19.8385 16.1466 19.5713 15.8295Z" fill="#DBDBDB"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="20" height="23" fill="#DBDBDB"/>
                    </clipPath>
                    </defs></svg>
                <span class="col-9">訊息中心</span>
            </a>
            <a href="bookmark.php" class="d-flex justify-content-between my-3 menulist heart position-relative">
                <!-- <svg width="16" height="23" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg" class="col-3 icon">
                    <path d="M0 23V2.15625C0 0.965371 0.895417 0 2 0H14C15.1046 0 16 0.965371 16 2.15625V23L8 17.9688L0 23Z" fill="#DBDBDB"/></svg> -->
                <div class="calling"></div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="23px" height="23px" class="col-3 icon">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="#DBDBDB" />
                </svg>
                <span class="col-9">我的收藏</span>
            </a>
            <a href="helpCenter.php" class="d-flex justify-content-between my-3 menulist">
                <svg width="16" height="23" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="col-3 icon">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z" fill="#D8D8D8"/>
                    <path d="M10.061 12.1667C10.061 10.5 11.3744 10.2211 11.8266 9.76996C12.2803 9.31738 12.561 8.69147 12.561 8C12.561 6.61929 11.4418 5.5 10.061 5.5C9.31445 5.5 8.64429 5.82727 8.1862 6.34618C7.97439 6.58612 7.80792 6.86703 7.7002 7.17551" stroke="white" stroke-linecap="round"/>
                    <path id="quesDot" fill-rule="evenodd" clip-rule="evenodd" d="M10.0609 15.4999C10.5211 15.4999 10.8942 15.1268 10.8942 14.6666C10.8942 14.2063 10.5211 13.8333 10.0609 13.8333C9.60064 13.8333 9.22754 14.2063 9.22754 14.6666C9.22754 15.1268 9.60064 15.4999 10.0609 15.4999Z" fill="white"/>
                </svg>
                <span class="col-9">幫助中心</span>
            </a>
        </div>
    </div>
</header>