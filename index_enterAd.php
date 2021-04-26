<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logoWeb</title>
    <?php include("template/bootstrapScript.php"); ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/icon_animate.css">
    <link rel="stylesheet" href="css/index_enterAd.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/material-icon.css"> -->
    <!-- Owl -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' integrity='sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==' crossorigin='anonymous'/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js' integrity='sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==' crossorigin='anonymous'></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>
<body>
    <?php include("template/header.php"); ?>
    <!-- < md -->
    <div class="container-fluid mToTop d-md-none">
        <nav id="enterAd-md" class="navbar position-fixed z-index-2" data-aos="fade-down" data-aos-easing="ease-in-sine" style="top: 20%; left:0%;">
            <div class="nav nav-pills flex-column">
                <a href="#welcome-md" id="nav_welcome" class="nav-link">首頁</a>
                <a href="#shopFlow-md" id="nav_shopFlow" class="nav-link">購買流程</a>
                <a href="#moreProduct-md" id="nav_moreProduct" class="nav-link">熱門商品</a>
                <a href="#enterIndex-md" id="nav_enterIndex" class="nav-link">Get Started</a>
            </div>
        </nav>
        <div data-spy="scroll" data-target="#enterAd-md" data-offset="-20">
            <div class="container-sm" id="welcome-md">
                <div class="row justify-content-around">
                    <div class="col-5" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="logoPlay-sm owl-carousel owl-theme">
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo.svg" class="h-140" alt=""></div>
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo1.svg" class="h-140" alt=""></div>
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo2.svg" class="h-140" alt=""></div>
                        </div>
                        <div class="logoPlay-sm owl-carousel owl-theme">
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo3.svg" class="h-140" alt=""></div>
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo4.svg" class="h-140" alt=""></div>
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo5.svg" class="h-140" alt=""></div>
                        </div>
                        <div class="logoPlay-sm owl-carousel owl-theme">
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo6.svg" class="h-140" alt=""></div>
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo7.svg" class="h-140" alt=""></div>
                            <div class="p-4 my-2 bg-0_8 rounded"><img src="images/logo8.svg" class="h-140" alt=""></div>
                        </div>
                    </div>
                    <div class="col-6 text-center text-orange my-auto">
                        <h5 class="font-weight-normal py-1" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">超過1000多種Logo挑選</h5>
                        <h5 class="font-weight-normal py-1" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-duration="1200">為您的公司打造專屬Logo</h5>
                    </div>
                </div>
            </div>
            <!-- 購物流程 -->
            <div class="row mt-5" id="shopFlow-md">
                <div class="col-2">
                    <svg class="position-absolute vw-100" style="left:-200%; height:100%;" viewBox="0 0 226 544" fill="none" xmlns="http://www.w3.org/2000/svg" data-aos="fade-right">
                        <g id="moveBlock" clip-path="url(#clip0)">
                        <rect id="greenBlock" x="-131.693" width="319.528" height="108.8" rx="54.4" fill="#7DE290"/>
                        <rect id="yellowBlock" x="-107.642" y="108.8" width="319.528" height="108.8" rx="54.4" fill="#F8D751"/>
                        <rect id="appleBlock" x="-142" y="217.6" width="319.528" height="108.8" rx="54.4" fill="#DEE453"/>
                        <rect id="orangeBlock" x="-124.821" y="326.4" width="319.528" height="108.8" rx="54.4" fill="#FF8425"/>
                        <rect id="pinkBlock" x="-93.8989" y="435.2" width="319.528" height="108.8" rx="54.4" fill="#FF9393"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="226" height="544" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="col-10 d-flex flex-column align-items-end">
                    <div class="col-9 d-flex align-items-center justify-content-around mx-3" data-aos="zoom-in-left">
                        <div class="col-6 text-right">Step 1：會員註冊</div>    
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <g id="shopFlowIconUser">
                            <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#7DE290" stroke-width="2"/>
                            <g id="headerIcon/userHover">
                            <path id="man" d="M47.7426 38.1502C49.5652 36.4969 50.8424 34.3341 51.4067 31.9459C51.971 29.5576 51.7959 27.0555 50.9044 24.7679C50.0129 22.4804 48.4467 20.5145 46.4114 19.1282C44.3761 17.7419 41.9669 17 39.5 17C37.0331 17 34.6239 17.7419 32.5886 19.1282C30.5533 20.5145 28.9871 22.4804 28.0956 24.7679C27.2041 27.0555 27.029 29.5576 27.5933 31.9459C28.1576 34.3341 29.4348 36.4969 31.2574 38.1502C26.3236 40.3611 23 44.4891 23 49.2194C23 56.2781 30.3859 62 39.5 62C48.6141 62 56 56.2781 56 49.2194C56 44.4891 52.6764 40.3611 47.7426 38.1502ZM45.0542 31.9362C43.5809 33.3895 41.5899 34.2049 39.5148 34.2049C37.4397 34.2049 35.4486 33.3895 33.9754 31.9362C33.8231 31.7681 33.7416 31.5482 33.7479 31.322C33.7542 31.0958 33.8477 30.8807 34.009 30.7211C34.1704 30.5616 34.3872 30.4699 34.6147 30.465C34.8422 30.4601 35.0628 30.5424 35.231 30.6949C36.3719 31.827 37.9178 32.4628 39.5295 32.4628C41.1413 32.4628 42.6872 31.827 43.8281 30.6949C43.9963 30.5424 44.2169 30.4601 44.4444 30.465C44.6718 30.4699 44.8887 30.5616 45.0501 30.7211C45.2114 30.8807 45.3049 31.0958 45.3112 31.322C45.3174 31.5482 45.236 31.7681 45.0837 31.9362H45.0542Z" fill="#FAD06A"/>
                            </g>
                            </g>
                        </svg>
                    </div>
                    <span class="mx-auto pl-5" data-aos="flip-down">
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                    </span>
                    <div class="col-9 d-flex align-items-center justify-content-around mx-3" data-aos="zoom-in-left">
                        <div class="col-6 text-right">Step 2：商品選購</div>
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <g id="shopFlowIconSpBag">
                            <circle id="Ellipse 1" cx="40" cy="40" r="39" stroke="#F8D751" stroke-width="2"/>
                            <circle id="goods" cx="39.5" cy="44.5" r="5.5" fill="#FF7870"/>
                            <g id="shopBag">
                            <path id="Vector" d="M50.1889 30.5576V28.106C50.1889 22.6021 44.8444 19 39.5 19C34.1556 19 28.8111 22.5463 28.8111 28.0502V30.5576H21V50.7615C21 54.207 23.0534 57 27.1079 57H51.8921C55.9466 57 58 54.207 58 50.7615V30.5576H54.0944H50.1889ZM32.1 28.0502C32.1 24.5479 35.8 21.4516 39.5 21.4516C43.2 21.4516 46.9 24.6037 46.9 28.106V30.5576H32.1V28.0502ZM48.5444 36.8618C47.7222 36.8618 46.9 36.1613 46.9 35.4608C46.9 34.7604 47.7222 34.0599 48.5444 34.0599C49.3667 34.0599 50.1889 34.7604 50.1889 35.4608C50.1889 36.1613 49.3667 36.8618 48.5444 36.8618ZM30.4556 36.8618C29.6333 36.8618 28.8111 36.2051 28.8111 35.4608C28.8111 34.7604 29.6333 34.0599 30.4556 34.0599C31.2778 34.0599 32.1 34.7604 32.1 35.4608C32.1 36.1613 31.2778 36.8618 30.4556 36.8618Z" fill="#D5A178"/>
                            </g>
                            </g>
                        </svg>
                    </div>
                    <span class="mx-auto pl-5" data-aos="flip-down">
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                    </span>
                    <div class="col-9 d-flex align-items-center justify-content-around mx-3" data-aos="zoom-in-left">
                        <div class="col-6 text-right">Step 3：下單付款</div>
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <g id="shopFlowIconOdrPay">
                            <circle id="Ellipse 3" cx="40" cy="40" r="39" stroke="#DEE453" stroke-width="2"/>
                            <g id="orderCont">
                            <path id="Vector" d="M30 47.5C30 47.1022 30.1229 46.7206 30.3417 46.4393C30.5605 46.158 30.8572 46 31.1667 46H35.8333C36.1428 46 36.4395 46.158 36.6583 46.4393C36.8771 46.7206 37 47.1022 37 47.5C37 47.8978 36.8771 48.2794 36.6583 48.5607C36.4395 48.842 36.1428 49 35.8333 49H31.1667C30.8572 49 30.5605 48.842 30.3417 48.5607C30.1229 48.2794 30 47.8978 30 47.5Z" fill="#FAD06A"/>
                            <path id="Vector_2" d="M30 42.5C30 42.1022 30.1229 41.7206 30.3417 41.4393C30.5605 41.158 30.8572 41 31.1667 41H35.8333C36.1428 41 36.4395 41.158 36.6583 41.4393C36.8771 41.7206 37 42.1022 37 42.5C37 42.8978 36.8771 43.2794 36.6583 43.5607C36.4395 43.842 36.1428 44 35.8333 44H31.1667C30.8572 44 30.5605 43.842 30.3417 43.5607C30.1229 43.2794 30 42.8978 30 42.5Z" fill="#FAD06A"/>
                            <path id="Vector_3" d="M30 37.5C30 37.1022 30.1229 36.7206 30.3417 36.4393C30.5605 36.158 30.8572 36 31.1667 36H35.8333C36.1428 36 36.4395 36.158 36.6583 36.4393C36.8771 36.7206 37 37.1022 37 37.5C37 37.8978 36.8771 38.2794 36.6583 38.5607C36.4395 38.842 36.1428 39 35.8333 39H31.1667C30.8572 39 30.5605 38.842 30.3417 38.5607C30.1229 38.2794 30 37.8978 30 37.5Z" fill="#FAD06A"/>
                            <path id="Vector_4" d="M30 32.5C30 32.1022 30.1229 31.7206 30.3417 31.4393C30.5605 31.158 30.8572 31 31.1667 31H35.8333C36.1428 31 36.4395 31.158 36.6583 31.4393C36.8771 31.7206 37 32.1022 37 32.5C37 32.8978 36.8771 33.2794 36.6583 33.5607C36.4395 33.842 36.1428 34 35.8333 34H31.1667C30.8572 34 30.5605 33.842 30.3417 33.5607C30.1229 33.2794 30 32.8978 30 32.5Z" fill="#FAD06A"/>
                            </g>
                            <path id="paper" fill-rule="evenodd" clip-rule="evenodd" d="M25 29.0909C25 28.0059 25.4741 26.9654 26.318 26.1982C27.1619 25.431 28.3065 25 29.5 25H50.5C51.6935 25 52.8381 25.431 53.682 26.1982C54.5259 26.9654 55 28.0059 55 29.0909V50.9091C55 51.9941 54.5259 53.0346 53.682 53.8018C52.8381 54.569 51.6935 55 50.5 55H29.5C28.3065 55 27.1619 54.569 26.318 53.8018C25.4741 53.0346 25 51.9941 25 50.9091V29.0909ZM29.5 27.7273H50.5C50.8978 27.7273 51.2794 27.8709 51.5607 28.1267C51.842 28.3824 52 28.7293 52 29.0909V50.9091C52 51.2708 51.842 51.6176 51.5607 51.8733C51.2794 52.1291 50.8978 52.2727 50.5 52.2727H29.5C29.1022 52.2727 28.7206 52.1291 28.4393 51.8733C28.158 51.6176 28 51.2708 28 50.9091V29.0909C28 28.7293 28.158 28.3824 28.4393 28.1267C28.7206 27.8709 29.1022 27.7273 29.5 27.7273Z" fill="#D5A178"/>
                            <g id="money">
                            <path id="Vector_5" fill-rule="evenodd" clip-rule="evenodd" d="M44 47V50H46V47H47C48.0609 47 49.0783 46.5786 49.8284 45.8284C50.5786 45.0783 51 44.0609 51 43C51 41.9391 50.5786 40.9217 49.8284 40.1716C49.0783 39.4214 48.0609 39 47 39H46V35H48V37H50V33H46V30H44V33H43C41.9391 33 40.9217 33.4214 40.1716 34.1716C39.4214 34.9217 39 35.9391 39 37C39 38.0609 39.4214 39.0783 40.1716 39.8284C40.9217 40.5786 41.9391 41 43 41H44V45H42V43H40V47H44ZM46 45H47C47.5304 45 48.0391 44.7893 48.4142 44.4142C48.7893 44.0391 49 43.5304 49 43C49 42.4696 48.7893 41.9609 48.4142 41.5858C48.0391 41.2107 47.5304 41 47 41H46V45ZM44 39V35H43C42.4696 35 41.9609 35.2107 41.5858 35.5858C41.2107 35.9609 41 36.4696 41 37C41 37.5304 41.2107 38.0391 41.5858 38.4142C41.9609 38.7893 42.4696 39 43 39H44Z" fill="#FAD06A"/>
                            </g>
                            </g>
                        </svg>
                    </div>
                    <span class="mx-auto pl-5" data-aos="flip-down">
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                    </span>
                    <div class="col-9 d-flex align-items-center justify-content-around mx-3" data-aos="zoom-in-left">
                        <div class="col-6 text-right">Step 4：必要設計修改</div>
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <g id="shopFlowIconModify">
                            <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#FF8425" stroke-width="2"/>
                            <path id="pen" d="M54.176 29.346L50.6541 25.824C49.5555 24.7253 47.7737 24.7253 46.6751 25.824L43.3617 29.1374L50.8627 36.6386L54.176 33.3251C55.2747 32.2265 55.2747 30.4452 54.176 29.346V29.346ZM39.7155 28.1431C38.8003 27.2279 37.3167 27.2279 36.4015 28.1431L29.4419 35.1034C29.0757 35.4696 29.0757 36.0632 29.4419 36.4288L30.7679 37.7548C31.1341 38.121 31.7276 38.121 32.0938 37.7548L38.0597 31.7888L39.3856 33.1142L30.5054 41.994C27.4295 45.07 25.4917 49.1011 25.0106 53.4245L25.0088 53.4379C24.9092 54.3333 25.6657 55.0903 26.5609 54.9913C30.8898 54.5133 34.9267 52.5747 38.0064 49.4952L49.5367 37.9646L44.687 33.1148L39.7155 28.1431V28.1431Z" fill="#D5A178"/>
                            <g id="NumNotify">
                            <circle id="Ellipse 68" cx="58" cy="25" r="10" fill="#FF7870" fill-opacity="0.8"/>
                            <path id="1" d="M59.2578 31H57V22.2969L54.3047 23.1328V21.2969L59.0156 19.6094H59.2578V31Z" fill="white"/>
                            </g>
                            </g>
                        </svg>
                    </div>
                    <span class="mx-auto pl-5" data-aos="flip-down">
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
                    </span>
                    <div class="col-9 d-flex align-items-center justify-content-around mx-3" data-aos="zoom-in-left">
                        <div class="col-6 text-right">Step 5：稿件收件</div>
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <g id="shopFlowIconSpBag">
                            <circle id="Ellipse 2" cx="40" cy="40" r="39" stroke="#FF9393" stroke-width="2"/>
                            <path id="box" fill-rule="evenodd" clip-rule="evenodd" d="M40.6508 32.207L54.2417 35.8297L55.7808 36.9425V52.9012L54.9047 54.0377L40.3904 58.0392L25.8524 54.0377L25 52.9012V36.9425L26.4443 35.8297L40.0116 32.207H40.6508ZM40.4377 34.5748L30.9667 36.9425L32.269 37.4161L40.3904 39.5471L47.4936 37.6292L49.743 36.9425L40.4377 34.5748V34.5748ZM27.3678 52.0014L39.2065 55.2453V41.678L27.3678 38.5053V52.0014ZM41.5743 41.678V55.2453L53.413 52.0014V38.4342L48.6302 39.7436V45.8216L46.2624 46.4372V40.3924L41.5743 41.678Z" fill="#D5A178"/>
                            <path id="download" d="M46.2375 23.6486L41.75 26.7171V18H39.25V26.7171L34.7625 23.6486L33 24.8571L40.5 30L48 24.8571L46.2375 23.6486Z" fill="#D5A178"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- 更多商品 -->
            <div class="row py-3" id="moreProduct-md">
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form1">
                    <a href="" onclick='document.forms["form1"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo.svg"?>">
                    </a>
                </form>    
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form2">
                    <a href="" onclick='document.forms["form2"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo1.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo1.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form3">
                    <a href="" onclick='document.forms["form3"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo2.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo2.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form4">
                    <a href="" onclick='document.forms["form4"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo3.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo3.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form5">
                    <a href="" onclick='document.forms["form5"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo4.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo4.svg"?>">
                    </a>
                </form>    
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form6">
                    <a href="" onclick='document.forms["form6"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo5.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo5.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form7">
                    <a href="" onclick='document.forms["form7"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo6.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo6.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form8">
                    <a href="" onclick='document.forms["form8"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo7.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo7.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form9">
                    <a href="" onclick='document.forms["form9"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo8.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo8.svg"?>">
                    </a>
                </form>    
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form10">
                    <a href="" onclick='document.forms["form10"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo9.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo9.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form11">
                    <a href="" onclick='document.forms["form11"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo10.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo10.svg"?>">
                    </a>
                </form>
                <form action="product.php" method="post" class="col-4 p-1" data-aos="zoom-in" id="form12">
                    <a href="" onclick='document.forms["form12"].submit(); return false;' class="py-4 bg-cloud rounded d-inline-block w-100 h-100">
                        <img src="images/logo11.svg" alt="" height="100px" class="d-block m-auto">
                        <input type="hidden" name="pd-pick" value="<?php echo "images/logo11.svg"?>">
                    </a>
                </form>
            </div>
            <a href="index.php" id="enterIndex-md" class="d-flex justify-content-center align-items-center font-weight-bolder text-orange display-3" style="height: 250px;" data-aos="fade-up" data-aos-duration="9000" data-aos-anchor-placement="center-bottom">Get Started</a>
        </div>
    </div>
    <!-- > md -->
    <div class="mToTop d-none d-md-block">
        <div id="index_carousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#index_carousel" data-slide-to="0" class=" mx-2 text-center active">首頁</li>
                <li data-target="#index_carousel" data-slide-to="1" class=" mx-2 text-center ">購買流程</li>
                <li data-target="#index_carousel" data-slide-to="2" class=" mx-2 text-center ">熱門商品</li>
            </ol>
            <!-- <div id="trackDot" class="position-absolute"></div> -->
            <div class="carousel-inner">
                <div class="carousel-item float-none active">
                    <!-- logoMonster1 -->
                    <svg data-aos="fade-up" data-aos-duration="3000" class="position-absolute vw-100" style="bottom: 0;"  viewBox="0 0 1200 470" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="logoMonster2" clip-path="url(#clip0)">
                        <path id="orangee" d="M251 112.178C195 101.178 130 119.678 88.8384 153.081C47.6769 186.483 11.8088 224.853 0 236.787V549.856H691.087C691.087 549.856 786.5 500 837.697 430C855.135 406.159 889.363 351.951 902.5 309C926 220 874 201.917 854.5 216C835 230.083 839.5 250.5 848 272.5C817.08 314.871 758.5 376.664 717.5 397.023C638.472 436.265 518.5 418.5 479.5 397.023C440.5 375.546 416.941 322.355 409.856 292.924C416.396 266.99 421.846 240.965 407.131 220.118C394.05 201.587 375 194.178 352.084 193.185C329.167 192.192 307 123.178 251 112.178Z" fill="url(#paint0_linear)"/>
                        <path id="orangeCheek" d="M359.99 246.142C349.635 226.521 349.09 207.627 348 196C354.916 196 367.952 197.906 378.416 202.266C391.497 207.716 402.023 216.514 409.416 233.766C416.916 251.266 409.416 281.266 405.416 296.266C388.521 285.91 370.346 265.763 359.99 246.142Z" fill="url(#paint1_linear)"/>
                        <g id="orangeeFace">
                        <path id="Vector 11" d="M287.479 160.333C289.68 161.547 295.067 165.032 299.006 169.263C302.946 173.495 308.492 181.092 310.772 184.362C312.712 182.65 317.358 179.856 320.42 182.373C323.483 184.89 321.187 189.354 319.656 191.272" stroke="white" stroke-width="4.30847" stroke-linecap="round"/>
                        <circle id="Ellipse 8" cx="311.786" cy="190.786" r="1.78639" fill="white"/>
                        <path id="Vector 12" d="M266 178.602C270.244 179.502 273.018 179.004 277.914 178.551C282.81 178.098 288.184 175.225 290.162 173.692" stroke="white" stroke-width="3.59039" stroke-linecap="round"/>
                        <path id="Vector 13" d="M307.689 166.38C310.108 166.084 312.94 164.715 313.966 163.81" stroke="white" stroke-width="3.59039" stroke-linecap="round"/>
                        <path id="orangeMouth" d="M323.118 200.662C321.432 201.512 317.147 202.238 316.697 200.287C316.247 198.337 320.438 198.336 321.259 197.981C322.356 197.507 322.643 196.392 323.442 195.733C324.142 195.154 325.304 195.189 325.872 195.954C327.256 197.817 324.411 200.01 323.118 200.662Z" fill="white"/>
                        </g>
                        <path id="applee" d="M0 550V177.749C0 165.213 21.8171 90 118.132 90C175.019 90 217.639 137.417 232.006 164.668C280.961 174.479 276.172 220.261 279.365 230.071C282.558 239.882 320.871 326.54 338.963 349.976C357.055 373.412 400.754 412.317 472.059 408.502C543.363 404.686 635.961 292.667 649.264 272.501C630.225 232.001 653.657 206.501 680.018 213.001C722.977 223.593 727.588 293.001 672.208 381.001C613.503 474.284 511.803 546.367 487.68 550H0Z" fill="url(#paint2_linear)"/>
                        <path id="appleCheek" d="M230.815 195.521C228.285 187.087 228.675 174.449 230.31 167C238.485 168.09 251.18 172.87 258.81 180.5C266.44 188.13 271.81 197 274.961 212.962C276.088 218.669 276.128 225.912 276.31 229L276.107 228.938C269.023 226.758 258.549 223.535 252.07 220.047C245.53 216.525 234.085 206.422 230.815 195.521Z" fill="url(#paint3_linear)"/>
                        <g id="appleeFace">
                        <path id="Vector 11_2" d="M149 121C151.833 122.259 158.82 125.973 164.107 130.757C169.395 135.541 177.012 144.291 180.159 148.067C182.362 145.759 187.776 141.836 191.804 144.605C195.833 147.375 193.483 153.103 191.804 155.621" stroke="white" stroke-width="5.31364" stroke-linecap="round"/>
                        <circle id="Ellipse 8_2" cx="180.203" cy="159.203" r="2.20316" fill="white"/>
                        <path id="Vector 12_2" d="M129.353 158.997C134.648 159.763 141.796 160.033 147.78 159.118C153.764 158.203 160.132 154.332 162.436 152.334" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
                        <path id="Vector 13_2" d="M185.44 135.748C189.373 134.785 193.777 131.97 195.293 130.276" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
                        <path id="appleMouth" d="M192.613 171.055C190.351 171.609 185 171.295 185 168.826C185 166.357 190.036 167.518 191.121 167.319C192.571 167.053 193.225 165.793 194.368 165.221C195.37 164.721 196.756 165.085 197.227 166.161C198.374 168.783 194.347 170.63 192.613 171.055Z" fill="white"/>
                        </g>
                        <path id="yellowee" d="M285.591 198.113C251.255 191.028 201.113 193.208 170.592 235.174C140.07 277.141 122.571 326.193 106.279 357.961C86.4348 396.658 34.3363 416.279 0 550.197C151.153 550.197 524.637 549.5 687.272 549.5C820 549.5 918.5 442 969.5 357C1020.5 272 994.5 204.5 950 212.5C937.115 213.369 919 233 935.5 272C916.5 296.5 889.956 328.328 869.5 348.5C830.258 387.197 756.489 453.728 687.272 463.538C618.054 473.348 489.974 463.538 453.458 446.097C416.941 428.657 341.183 375.79 365.709 326.193C390.235 276.596 349.359 267.331 341.183 253.16C333.008 238.989 319.927 205.198 285.591 198.113Z" fill="url(#paint4_linear)"/>
                        <path id="yellowCheek" d="M356.042 270.309C351.714 267.211 344.877 260.925 341.999 258.17C337.572 264.482 330.428 270.039 326.979 286.899C323.531 303.759 326.603 310.332 330.438 320.729C334.273 331.125 350.748 341.655 357.429 345.541C357.282 342.269 357.763 334.534 360.865 329.77C364.744 323.816 368.645 315.681 369.896 300.433C371.147 285.185 361.452 274.181 356.042 270.309Z" fill="url(#paint5_linear)"/>
                        <g id="yelloweeFace">
                        <path id="Vector 11_3" d="M287.368 219C290.064 220.529 296.657 224.904 301.454 230.18C306.251 235.456 312.981 244.905 315.746 248.97C318.163 246.887 323.933 243.509 327.673 246.657C331.413 249.805 328.517 255.278 326.601 257.621" stroke="white" stroke-width="5.31364" stroke-linecap="round"/>
                        <circle id="Ellipse 8_3" cx="318.203" cy="256.203" r="2.20316" fill="white"/>
                        <path id="Vector 12_3" d="M266.818 251.127C272.052 252.237 279.167 252.974 285.198 252.451C291.229 251.928 297.836 248.481 300.265 246.637" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
                        <path id="Vector 13_3" d="M317.039 235.952C319.845 234.874 322.824 232.389 323.782 231" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
                        <path id="yellowMouth" d="M316.613 267.055C314.351 267.609 309 267.295 309 264.826C309 262.357 314.036 263.518 315.121 263.319C316.571 263.053 317.225 261.793 318.368 261.221C319.37 260.721 320.756 261.085 321.227 262.161C322.374 264.783 318.347 266.63 316.613 267.055Z" fill="white"/>
                        </g>
                        <path id="greenee" d="M0 549.454V175.642C8.14682 171.822 41.316 167.457 87.8693 175.642C132.57 183.501 177.484 207.293 198.433 240.581C219.382 273.87 244.308 254.224 275.828 281.51C307.349 308.795 290.958 339.901 315.398 354.089C339.839 368.278 424.05 439.323 572.605 408.661C657.831 391.07 706.643 317.386 750.589 273.129C721.228 205.544 790.628 195.03 808.863 236.216C827.099 277.401 809.39 323.724 767.138 390.778C724.887 457.832 673.715 502.419 586.571 550C493.465 550 226.947 549.454 0 549.454Z" fill="url(#paint6_linear)"/>
                        <path id="greenCheek" d="M273.212 287.584C294.216 308.769 292.969 330.025 300.599 355.096C287.346 368.235 240.477 350.556 225.219 335.166C209.96 319.775 199.598 276.126 212.851 262.987C240.102 275.522 257.953 272.193 273.212 287.584Z" fill="#90E28B"/>
                        <g id="greeneeFace">
                        <path id="Vector 11_4" d="M76 241.488C80.5 243.488 91.6 249.388 100 256.988C108.4 264.588 120.5 278.488 125.5 284.488C129 280.822 137.6 274.588 144 278.988C150.4 283.388 146.667 292.488 144 296.488" stroke="white" stroke-width="6" stroke-linecap="round"/>
                        <circle id="Ellipse 8_4" cx="130.5" cy="296.988" r="3.5" fill="white"/>
                        <path id="Vector 12_4" d="M48 295.988C56.5 295.988 67.8 294.788 77 291.988C86.2 289.188 95.3333 281.655 98.5 277.988" stroke="white" stroke-width="5" stroke-linecap="round"/>
                        <path id="Vector 13_4" d="M125.707 259.477C132.497 258.246 140.55 257.09 147.4 253.003C154.25 248.915 160.916 241.067 162.792 237" stroke="white" stroke-width="5" stroke-linecap="round"/>
                        <path id="greenMouth" d="M150.094 312.108C146.5 312.988 138 312.488 138 308.566C138 304.644 146 306.488 147.724 306.172C150.028 305.749 151.067 303.748 152.883 302.84C154.474 302.044 156.676 302.623 157.424 304.333C159.246 308.498 152.849 311.433 150.094 312.108Z" fill="white"/>
                        </g>
                        </g>
                        <defs>
                        <linearGradient id="paint0_linear" x1="455.758" y1="123.649" x2="455.639" y2="647.96" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF8425"/>
                        <stop offset="1" stop-color="#FF8425" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear" x1="404.682" y1="224.341" x2="368.711" y2="249.957" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FC8E38"/>
                        <stop offset="1" stop-color="#FC8E38" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear" x1="356.632" y1="90.0001" x2="484.075" y2="639.688" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DDE44F"/>
                        <stop offset="1" stop-color="#DDE44F" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear" x1="259.156" y1="178.626" x2="228.09" y2="200.971" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DDE455"/>
                        <stop offset="1" stop-color="#DDE455" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint4_linear" x1="505" y1="195" x2="504.69" y2="648.301" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F8D751"/>
                        <stop offset="1" stop-color="#F8D751" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint5_linear" x1="370.045" y1="286.263" x2="329.01" y2="301.092" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F6D861"/>
                        <stop offset="1" stop-color="#F6D861" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="paint6_linear" x1="439.38" y1="141.808" x2="439.862" y2="698.433" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#7DE290"/>
                        <stop offset="1" stop-color="#7DE290" stop-opacity="0"/>
                        </linearGradient>
                        <clipPath id="clip0">
                        <rect width="1200" height="470" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <div class="row align-items-center justify-content-center position-absolute w-100" style="top:160px;">
                        <div id="logoPlay" class="owl-carousel rounded bg-0_8" style="max-width: 20%;">
                            <div class="p-4 p-lg-5"><img src="images/logo1.svg" class="h-140" alt=""></div>
                            <div class="p-4 p-lg-5"><img src="images/logo2.svg" class="h-140" alt=""></div>
                            <div class="p-4 p-lg-5"><img src="images/logo3.svg" class="h-140" alt=""></div>
                        </div>
                        <div class="col-6 text-dark text-center">
                            <h2 class="font-weight-normal py-2">超過1000多種Logo挑選</h2>
                            <h2 class="font-weight-normal py-2">為您的公司打造專屬Logo</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel-item float-none">
                    <div class="d-flex justify-content-center align-items-center my-5 py-5" id="shopFlow" style="margin-top: 100px !important;">
                        <div class="d-flex flex-column align-items-center mx-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <g id="shopFlowIconUser">
                                <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#F3ECE5" stroke-width="2"/>
                                <g id="headerIcon/userHover">
                                <path id="man" d="M47.7426 38.1502C49.5652 36.4969 50.8424 34.3341 51.4067 31.9459C51.971 29.5576 51.7959 27.0555 50.9044 24.7679C50.0129 22.4804 48.4467 20.5145 46.4114 19.1282C44.3761 17.7419 41.9669 17 39.5 17C37.0331 17 34.6239 17.7419 32.5886 19.1282C30.5533 20.5145 28.9871 22.4804 28.0956 24.7679C27.2041 27.0555 27.029 29.5576 27.5933 31.9459C28.1576 34.3341 29.4348 36.4969 31.2574 38.1502C26.3236 40.3611 23 44.4891 23 49.2194C23 56.2781 30.3859 62 39.5 62C48.6141 62 56 56.2781 56 49.2194C56 44.4891 52.6764 40.3611 47.7426 38.1502ZM45.0542 31.9362C43.5809 33.3895 41.5899 34.2049 39.5148 34.2049C37.4397 34.2049 35.4486 33.3895 33.9754 31.9362C33.8231 31.7681 33.7416 31.5482 33.7479 31.322C33.7542 31.0958 33.8477 30.8807 34.009 30.7211C34.1704 30.5616 34.3872 30.4699 34.6147 30.465C34.8422 30.4601 35.0628 30.5424 35.231 30.6949C36.3719 31.827 37.9178 32.4628 39.5295 32.4628C41.1413 32.4628 42.6872 31.827 43.8281 30.6949C43.9963 30.5424 44.2169 30.4601 44.4444 30.465C44.6718 30.4699 44.8887 30.5616 45.0501 30.7211C45.2114 30.8807 45.3049 31.0958 45.3112 31.322C45.3174 31.5482 45.236 31.7681 45.0837 31.9362H45.0542Z" fill="#FAD06A"/>
                                </g>
                                </g>
                            </svg>
                            <!-- <img src="images/orderflowIcon/user.svg" alt=""> -->
                            <div class="mt-3">會員註冊</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                        <div class="d-flex flex-column align-items-center mx-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <g id="shopFlowIconSpBag">
                                <circle id="Ellipse 1" cx="40" cy="40" r="39" stroke="#F3ECE5" stroke-width="2"/>
                                <circle id="goods" cx="39.5" cy="44.5" r="5.5" fill="#FF7870"/>
                                <g id="shopBag">
                                <path id="Vector" d="M50.1889 30.5576V28.106C50.1889 22.6021 44.8444 19 39.5 19C34.1556 19 28.8111 22.5463 28.8111 28.0502V30.5576H21V50.7615C21 54.207 23.0534 57 27.1079 57H51.8921C55.9466 57 58 54.207 58 50.7615V30.5576H54.0944H50.1889ZM32.1 28.0502C32.1 24.5479 35.8 21.4516 39.5 21.4516C43.2 21.4516 46.9 24.6037 46.9 28.106V30.5576H32.1V28.0502ZM48.5444 36.8618C47.7222 36.8618 46.9 36.1613 46.9 35.4608C46.9 34.7604 47.7222 34.0599 48.5444 34.0599C49.3667 34.0599 50.1889 34.7604 50.1889 35.4608C50.1889 36.1613 49.3667 36.8618 48.5444 36.8618ZM30.4556 36.8618C29.6333 36.8618 28.8111 36.2051 28.8111 35.4608C28.8111 34.7604 29.6333 34.0599 30.4556 34.0599C31.2778 34.0599 32.1 34.7604 32.1 35.4608C32.1 36.1613 31.2778 36.8618 30.4556 36.8618Z" fill="#D5A178"/>
                                </g>
                                </g>
                            </svg>
                            <!-- <img src="images/orderflowIcon/shopping.svg" alt=""> -->
                            <div class="mt-3">商品選購</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                        <div class="d-flex flex-column align-items-center mx-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <g id="shopFlowIconOdrPay">
                                <circle id="Ellipse 3" cx="40" cy="40" r="39" stroke="#F3ECE5" stroke-width="2"/>
                                <g id="orderCont">
                                <path id="Vector" d="M30 47.5C30 47.1022 30.1229 46.7206 30.3417 46.4393C30.5605 46.158 30.8572 46 31.1667 46H35.8333C36.1428 46 36.4395 46.158 36.6583 46.4393C36.8771 46.7206 37 47.1022 37 47.5C37 47.8978 36.8771 48.2794 36.6583 48.5607C36.4395 48.842 36.1428 49 35.8333 49H31.1667C30.8572 49 30.5605 48.842 30.3417 48.5607C30.1229 48.2794 30 47.8978 30 47.5Z" fill="#FAD06A"/>
                                <path id="Vector_2" d="M30 42.5C30 42.1022 30.1229 41.7206 30.3417 41.4393C30.5605 41.158 30.8572 41 31.1667 41H35.8333C36.1428 41 36.4395 41.158 36.6583 41.4393C36.8771 41.7206 37 42.1022 37 42.5C37 42.8978 36.8771 43.2794 36.6583 43.5607C36.4395 43.842 36.1428 44 35.8333 44H31.1667C30.8572 44 30.5605 43.842 30.3417 43.5607C30.1229 43.2794 30 42.8978 30 42.5Z" fill="#FAD06A"/>
                                <path id="Vector_3" d="M30 37.5C30 37.1022 30.1229 36.7206 30.3417 36.4393C30.5605 36.158 30.8572 36 31.1667 36H35.8333C36.1428 36 36.4395 36.158 36.6583 36.4393C36.8771 36.7206 37 37.1022 37 37.5C37 37.8978 36.8771 38.2794 36.6583 38.5607C36.4395 38.842 36.1428 39 35.8333 39H31.1667C30.8572 39 30.5605 38.842 30.3417 38.5607C30.1229 38.2794 30 37.8978 30 37.5Z" fill="#FAD06A"/>
                                <path id="Vector_4" d="M30 32.5C30 32.1022 30.1229 31.7206 30.3417 31.4393C30.5605 31.158 30.8572 31 31.1667 31H35.8333C36.1428 31 36.4395 31.158 36.6583 31.4393C36.8771 31.7206 37 32.1022 37 32.5C37 32.8978 36.8771 33.2794 36.6583 33.5607C36.4395 33.842 36.1428 34 35.8333 34H31.1667C30.8572 34 30.5605 33.842 30.3417 33.5607C30.1229 33.2794 30 32.8978 30 32.5Z" fill="#FAD06A"/>
                                </g>
                                <path id="paper" fill-rule="evenodd" clip-rule="evenodd" d="M25 29.0909C25 28.0059 25.4741 26.9654 26.318 26.1982C27.1619 25.431 28.3065 25 29.5 25H50.5C51.6935 25 52.8381 25.431 53.682 26.1982C54.5259 26.9654 55 28.0059 55 29.0909V50.9091C55 51.9941 54.5259 53.0346 53.682 53.8018C52.8381 54.569 51.6935 55 50.5 55H29.5C28.3065 55 27.1619 54.569 26.318 53.8018C25.4741 53.0346 25 51.9941 25 50.9091V29.0909ZM29.5 27.7273H50.5C50.8978 27.7273 51.2794 27.8709 51.5607 28.1267C51.842 28.3824 52 28.7293 52 29.0909V50.9091C52 51.2708 51.842 51.6176 51.5607 51.8733C51.2794 52.1291 50.8978 52.2727 50.5 52.2727H29.5C29.1022 52.2727 28.7206 52.1291 28.4393 51.8733C28.158 51.6176 28 51.2708 28 50.9091V29.0909C28 28.7293 28.158 28.3824 28.4393 28.1267C28.7206 27.8709 29.1022 27.7273 29.5 27.7273Z" fill="#D5A178"/>
                                <g id="money">
                                <path id="Vector_5" fill-rule="evenodd" clip-rule="evenodd" d="M44 47V50H46V47H47C48.0609 47 49.0783 46.5786 49.8284 45.8284C50.5786 45.0783 51 44.0609 51 43C51 41.9391 50.5786 40.9217 49.8284 40.1716C49.0783 39.4214 48.0609 39 47 39H46V35H48V37H50V33H46V30H44V33H43C41.9391 33 40.9217 33.4214 40.1716 34.1716C39.4214 34.9217 39 35.9391 39 37C39 38.0609 39.4214 39.0783 40.1716 39.8284C40.9217 40.5786 41.9391 41 43 41H44V45H42V43H40V47H44ZM46 45H47C47.5304 45 48.0391 44.7893 48.4142 44.4142C48.7893 44.0391 49 43.5304 49 43C49 42.4696 48.7893 41.9609 48.4142 41.5858C48.0391 41.2107 47.5304 41 47 41H46V45ZM44 39V35H43C42.4696 35 41.9609 35.2107 41.5858 35.5858C41.2107 35.9609 41 36.4696 41 37C41 37.5304 41.2107 38.0391 41.5858 38.4142C41.9609 38.7893 42.4696 39 43 39H44Z" fill="#FAD06A"/>
                                </g>
                                </g>
                            </svg>
                            <!-- <img src="images/orderflowIcon/orderPay.svg" alt=""> -->
                            <div class="mt-3">下單付款</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                        <div class="d-flex flex-column align-items-center mx-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <g id="shopFlowIconModify">
                                <circle id="Ellipse 53" cx="40" cy="40" r="39" stroke="#F3ECE5" stroke-width="2"/>
                                <path id="pen" d="M54.176 29.346L50.6541 25.824C49.5555 24.7253 47.7737 24.7253 46.6751 25.824L43.3617 29.1374L50.8627 36.6386L54.176 33.3251C55.2747 32.2265 55.2747 30.4452 54.176 29.346V29.346ZM39.7155 28.1431C38.8003 27.2279 37.3167 27.2279 36.4015 28.1431L29.4419 35.1034C29.0757 35.4696 29.0757 36.0632 29.4419 36.4288L30.7679 37.7548C31.1341 38.121 31.7276 38.121 32.0938 37.7548L38.0597 31.7888L39.3856 33.1142L30.5054 41.994C27.4295 45.07 25.4917 49.1011 25.0106 53.4245L25.0088 53.4379C24.9092 54.3333 25.6657 55.0903 26.5609 54.9913C30.8898 54.5133 34.9267 52.5747 38.0064 49.4952L49.5367 37.9646L44.687 33.1148L39.7155 28.1431V28.1431Z" fill="#D5A178"/>
                                <g id="NumNotify">
                                <circle id="Ellipse 68" cx="58" cy="25" r="10" fill="#FF7870" fill-opacity="0.8"/>
                                <path id="1" d="M59.2578 31H57V22.2969L54.3047 23.1328V21.2969L59.0156 19.6094H59.2578V31Z" fill="white"/>
                                </g>
                                </g>
                            </svg>
                            <!-- <img src="images/orderflowIcon/modify.svg" alt=""> -->
                            <div class="mt-3">必要設計修改</div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#FF9292"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
                        <div class="d-flex flex-column align-items-center mx-3">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <g id="shopFlowIconSpBag">
                                <circle id="Ellipse 2" cx="40" cy="40" r="39" stroke="#F3ECE5" stroke-width="2"/>
                                <path id="box" fill-rule="evenodd" clip-rule="evenodd" d="M40.6508 32.207L54.2417 35.8297L55.7808 36.9425V52.9012L54.9047 54.0377L40.3904 58.0392L25.8524 54.0377L25 52.9012V36.9425L26.4443 35.8297L40.0116 32.207H40.6508ZM40.4377 34.5748L30.9667 36.9425L32.269 37.4161L40.3904 39.5471L47.4936 37.6292L49.743 36.9425L40.4377 34.5748V34.5748ZM27.3678 52.0014L39.2065 55.2453V41.678L27.3678 38.5053V52.0014ZM41.5743 41.678V55.2453L53.413 52.0014V38.4342L48.6302 39.7436V45.8216L46.2624 46.4372V40.3924L41.5743 41.678Z" fill="#D5A178"/>
                                <path id="download" d="M46.2375 23.6486L41.75 26.7171V18H39.25V26.7171L34.7625 23.6486L33 24.8571L40.5 30L48 24.8571L46.2375 23.6486Z" fill="#D5A178"/>
                                </g>
                            </svg>
                            <!-- <img src="images/orderflowIcon/download.svg" alt=""> -->
                            <div class="mt-3">稿件收件</div>
                        </div>
                    </div>
                    <!-- logoMonster2 -->
                    <svg class="position-absolute" style="bottom: 15%; transform: translateX(32%);" width="60%" viewBox="0 0 552 185" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="logoMoster" clip-path="url(#clip0)">
                        <g id="grass">
                        <path id="green_2" d="M4.50003 104.587C1.00003 126.587 0 176.5 0 185H121C119.833 164.333 118.787 127.454 116.5 104.587C114.213 81.7208 109.5 63.9708 97 52.7208C84.5 41.4708 68.5 38.5873 56.5 40.5873C44.5 42.5873 31 48.0873 22.5 59.5873C14 71.0872 8.00003 82.5873 4.50003 104.587Z" fill="#7DE290"/>
                        </g>
                        <g id="pink">
                        <path id="pink_2" d="M443 134.463C442 154.5 442.5 176 443 185H550.992C552 166 552 146 552 127C552 108 551.627 82.3184 541.84 66.7205C532.053 51.1226 515.695 40.7416 495.579 42.123C475.463 43.5045 459.988 58.6476 453.635 72.695C447.283 86.7424 444 114.425 443 134.463Z" fill="#FF9393"/>
                        </g>
                        <g id="yellow">
                        <path id="yellow_2" d="M118 132.216C118 159 119.4 174.784 121 185H223C222.029 160.034 225.498 131.457 223 95.2163C220.502 58.976 215.456 41.2163 205.5 28.2164C195.544 15.2164 183 6.49529 164 8.21632C145 9.93736 132 24.7163 126 42.2163C120 59.7163 118 105.433 118 132.216Z" fill="#F8D751"/>
                        </g>
                        <g id="orange">
                        <path id="orange_2" d="M329.75 120.605C328.75 145 328.75 176.5 329.75 185.977H447.75V114.955C447.75 90.7434 448.444 53.1537 437.75 32.9771C427.056 12.8005 409.182 -0.627853 387.202 1.15917C365.221 2.94619 348.312 22.5344 341.371 40.7054C334.43 58.8763 330.75 96.2097 329.75 120.605Z" fill="#FF8425"/>
                        </g>
                        <g id="apple">
                        <path id="apple_2" d="M221.947 146C220.447 166.113 220.947 179.887 221.947 186.887H337.947C337.947 172.387 337.808 157.5 337.808 142.5C337.808 127.5 334.357 103 323.857 90.5C313.357 78 301.768 72 278.357 72C254.947 72 240.947 82.3872 233.357 96.5C225.768 110.613 223.447 125.887 221.947 146Z" fill="#DDE44F"/>
                        </g>
                        <g id="grassFace">
                        <path id="Vector 7" d="M75 58C75 58 74.5 66.5 76 68.5C77.5 70.5 82 66.5 84 68.5C86 70.5 85 74.0839 83 74.5C81 74.9161 78.5 74.5 77 76" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle id="Ellipse 1" cx="64" cy="65.5" r="3" fill="white"/>
                        <circle id="Ellipse 2" cx="88.5" cy="63" r="2.5" fill="white"/>
                        <path id="Vector 9" d="M79.065 79.5C78.065 79.5 76.315 80 76.065 81C75.565 83 78.0651 82.5 79.5651 82.5C81.0651 82.5 82.065 82 82.065 81C82.065 80 80.065 79.5 79.065 79.5Z" fill="white"/>
                        </g>
                        <g id="yellowFace">
                        <path id="Vector 7_2" d="M175 18C175 18 174.5 26.5 176 28.5C177.5 30.5 182 26.5 184 28.5C186 30.5 185 34.0839 183 34.5C181 34.9161 178.5 34.5 177 36" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle id="Ellipse 1_2" cx="165" cy="23" r="3" fill="white"/>
                        <circle id="Ellipse 2_2" cx="184.5" cy="20.5" r="2.5" fill="white"/>
                        <path id="Vector 9_2" d="M172.065 38C171.065 38 169.315 38.5 169.065 39.5C168.565 41.5 171.065 41 172.565 41C174.065 41 175.065 40.5 175.065 39.5C175.065 38.5 173.065 38 172.065 38Z" fill="white"/>
                        </g>
                        <g id="orangeFace">
                        <path id="Vector 7_3" d="M385.346 19.4941C385.346 19.4941 388.65 28.5253 387.208 31.28C385.767 34.0347 378.362 31.445 376.234 34.3944C374.106 37.3438 376.582 40.8443 379.454 40.5174C382.326 40.1905 385.627 38.7656 388.147 39.8097" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle id="Ellipse 1_3" r="4.2" transform="matrix(-1 0 0 1 397.2 28.2)" fill="white"/>
                        <circle id="Ellipse 2_3" r="3.5" transform="matrix(-1 0 0 1 367.5 30.5)" fill="white"/>
                        <path id="Vector 9_3" d="M395.63 47.3209C394.086 48.2115 391.035 49.1639 389.949 48.1739C389.052 46.4376 392.237 46.2736 394.552 44.9375C396.868 43.6015 397.352 40.7172 398.552 41.4375C401.052 42.9376 397.173 46.4302 395.63 47.3209Z" fill="white"/>
                        </g>
                        <g id="pinkFace">
                        <path id="Vector 7_4" d="M496 53.5C496 53.5 499.219 62.2473 494.658 63.935C490.098 65.6226 488.347 62.3205 486.26 63.9973C484.173 65.6742 485.244 68.6433 487.347 68.9734C489.449 69.3034 492.071 68.9383 493.655 70.1725" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path id="Ellipse 1_4" d="M503.63 53.9017C503.036 55.2946 503.683 56.9057 505.076 57.5C506.469 58.0944 508.08 57.4471 508.674 56.0541C509.269 54.6612 508.621 53.0502 507.228 52.4558C505.835 51.8614 504.224 52.5088 503.63 53.9017Z" fill="white"/>
                        <path id="Ellipse 2_4" d="M484.492 54.9096C483.912 56.2675 484.543 57.8381 485.901 58.4176C487.259 58.997 488.83 58.3659 489.409 57.008C489.989 55.65 489.358 54.0794 488 53.5C486.642 52.9206 485.071 53.5516 484.492 54.9096Z" fill="white"/>
                        <path id="Vector 9_4" d="M502 73.5C500.846 73.6392 497.683 73.5651 497.227 72.21C497.052 70.2646 499.065 71.4819 500.796 71.2731C502.527 71.0644 504.5 69.8557 505 70.5C506.552 72.5 503.154 73.3608 502 73.5Z" fill="white"/>
                        </g>
                        <g id="appleFace">
                        <path id="Vector 10" d="M273 94.5C273.8 94.1 276.5 90.5 281 90.5C285.5 90.5 288.5 94.5 288.5 94.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle id="Ellipse 3" cx="266.5" cy="84.5" r="3.5" fill="white"/>
                        <circle id="Ellipse 4" cx="295.5" cy="84.5" r="3.5" fill="white"/>
                        <circle id="Ellipse 5" cx="278" cy="95" r="1" fill="white"/>
                        <circle id="Ellipse 6" cx="284" cy="95" r="1" fill="white"/>
                        <path id="Ellipse 7" d="M277 98.1971C277 97.7536 278.791 98.1971 281 98.1971C283.209 98.1971 285 97.7536 285 98.1971C285 98.6405 283.209 99 281 99C278.791 99 277 98.6405 277 98.1971Z" fill="white"/>
                        </g>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="552" height="185" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="carousel-item float-none">
                    <a href="index.php" style="writing-mode: vertical-lr; top:30%; right:1%;" class="font-weight-bolder position-absolute z-index-2">Get Started</a>
                    <div class="container-sm mToTop mb-5 overflow-hidden">
                        <div id="waterfall" class="row py-3">
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo1.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo2.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo3.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo4.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo5.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo6.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo7.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo8.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo9.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo10.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo11.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo1.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo2.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo3.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo4.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo5.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo6.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo7.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo8.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo9.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo10.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-3 col-xl-2 p-1 ">
                                <div class="d-block p-4 bg-white rounded">
                                    <a href="" class="logoDpSm" data-toggle="modal" data-target="#logoDisplay">
                                        <img src="images/logo11.svg" alt="" height="240px" class="d-block m-auto">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#index_carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#index_carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<?php include("template/footer.php"); ?>
<script src="js/allpage.js"></script>
<script src="js/enterAd.js"></script>