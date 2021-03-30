<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include("template/bootstrapScript.php");
    ?>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
            text-align: center;
        }
        @keyframes bump {
            from{
                transform: rotateX(0deg);
            }
            to{
                transform: rotateX(40deg);
            }
        }
        @keyframes move1 {
            from{
                transform: translateY(5px);
            }
            to{
                transform: translateY(50px);
            }
        }
        @keyframes bump2 {
            from{
                transform: rotate(10deg)
            }
            to{
                transform: rotateX(-40deg);
            }
        }
        @keyframes bump3 {
            from{
                transform: rotate(-10deg)
            }
            to{
                transform: rotateX(40deg);
            }
        }
        #apple {
            animation: bump 1s ease-in-out infinite alternate;
            transform-origin: bottom;
        }
        #appleFace {
            animation: move1 1s ease-in-out infinite alternate;
            transform-origin: bottom;
        }
        #yellow, #yellowFace, #green, #greenFace {
            animation: bump2 1s ease-in-out infinite alternate;
            transform-origin: bottom left;
        }
        #orange, #orangeFace, #pink, #pinkFace {
            animation: bump3 1s ease-in-out infinite alternate;
            transform-origin: bottom right;
        }
    </style>
</head>
<body>
    <svg width="552" height="185" viewBox="0 0 552 185" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="logoMoster" clip-path="url(#clip0)">
    <g id="green">
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
    <g id="greenFace">
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


    <div>
    <span class="material-icons md-dark md-inactive">face</span>
    <span class="material-icons">face</span>
    <span class="material-icons">face</span>
    </div>

    
</body>
</html>