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

    <!-- <img src="images/svg/logoMonster2.svg" alt=""> -->

    <svg width="1200" height="470" viewBox="0 0 1200 470" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="logoMonster2" clip-path="url(#clip0)">
<path id="orangee" d="M251 112.178C195 101.178 130 119.678 88.8384 153.081C47.6769 186.483 11.8088 224.853 0 236.787V549.856H691.087C691.087 549.856 786.5 500 837.697 430C855.135 406.159 889.363 351.951 902.5 309C926 220 874 201.917 854.5 216C835 230.083 839.5 250.5 848 272.5C817.08 314.871 758.5 376.664 717.5 397.023C638.472 436.265 518.5 418.5 479.5 397.023C440.5 375.546 416.941 322.355 409.856 292.924C416.396 266.99 421.846 240.965 407.131 220.118C394.05 201.587 375 194.178 352.084 193.185C329.167 192.192 307 123.178 251 112.178Z" fill="url(#paint0_linear)"/>
<path id="orangeCheek" d="M362.99 245.142C352.635 225.521 352.09 206.627 351 195C357.916 195 370.952 196.906 381.416 201.266C394.497 206.716 405.023 215.514 412.416 232.766C419.916 250.266 412.416 280.266 408.416 295.266C391.521 284.91 373.346 264.763 362.99 245.142Z" fill="url(#paint1_linear)"/>
<path id="applee" d="M0 550V177.749C0 165.213 21.8171 90 118.132 90C175.019 90 217.639 137.417 232.006 164.668C280.961 174.479 276.172 220.261 279.365 230.071C282.558 239.882 320.871 326.54 338.963 349.976C357.055 373.412 400.754 412.317 472.059 408.502C543.363 404.686 635.961 292.667 649.264 272.501C630.225 232.001 653.657 206.501 680.018 213.001C722.977 223.593 727.588 293.001 672.208 381.001C613.503 474.284 511.803 546.367 487.68 550H0Z" fill="url(#paint2_linear)"/>
<path id="appleCheek" d="M232.505 193.521C229.975 185.087 230.365 172.449 232 165C240.175 166.09 252.87 170.87 260.5 178.5C268.13 186.13 273.5 195 276.652 210.962C277.778 216.669 277.818 223.912 278 227L277.797 226.938C270.713 224.758 260.239 221.535 253.761 218.047C247.22 214.525 235.775 204.422 232.505 193.521Z" fill="url(#paint3_linear)"/>
<path id="yellowee" d="M285.591 198.113C251.255 191.028 201.113 193.208 170.592 235.174C140.07 277.141 122.571 326.193 106.279 357.961C86.4348 396.658 34.3363 416.279 0 550.197C151.153 550.197 524.637 549.5 687.272 549.5C820 549.5 918.5 442 969.5 357C1020.5 272 994.5 204.5 950 212.5C937.115 213.369 919 233 935.5 272C916.5 296.5 889.956 328.328 869.5 348.5C830.258 387.197 756.489 453.728 687.272 463.538C618.054 473.348 489.974 463.538 453.458 446.097C416.941 428.657 341.183 375.79 365.709 326.193C390.235 276.596 349.359 267.331 341.183 253.16C333.008 238.989 319.927 205.198 285.591 198.113Z" fill="url(#paint4_linear)"/>
<path id="yellowCheek" d="M359.584 270.077C355.256 266.979 348.418 260.693 345.54 257.937C341.113 264.25 333.969 269.806 330.521 286.667C327.073 303.527 330.144 310.1 333.979 320.496C337.815 330.893 354.289 341.422 360.97 345.308C360.823 342.036 361.304 334.302 364.407 329.538C368.285 323.583 372.186 315.449 373.437 300.201C374.688 284.952 364.993 273.949 359.584 270.077Z" fill="url(#paint5_linear)"/>
<path id="greenee" d="M0 549.454V175.642C8.14682 171.822 41.316 167.457 87.8693 175.642C132.57 183.501 177.484 207.293 198.433 240.581C219.382 273.87 244.308 254.224 275.828 281.51C307.349 308.795 290.958 339.901 315.398 354.089C339.839 368.278 424.05 439.323 572.605 408.661C657.831 391.07 706.643 317.386 750.589 273.129C721.228 205.544 790.628 195.03 808.863 236.216C827.099 277.401 809.39 323.724 767.138 390.778C724.887 457.832 673.715 502.419 586.571 550C493.465 550 226.947 549.454 0 549.454Z" fill="url(#paint6_linear)"/>
<path id="greenCheek" d="M256.212 279.584C277.216 300.769 275.969 322.025 283.599 347.096C270.346 360.235 223.477 342.556 208.219 327.166C192.96 311.775 182.598 268.126 195.851 254.987C223.102 267.522 240.953 264.193 256.212 279.584Z" fill="#90E28B"/>
<g id="greeneeFace">
<path id="Vector 11" d="M76 241.488C80.5 243.488 91.6 249.388 100 256.988C108.4 264.588 120.5 278.488 125.5 284.488C129 280.822 137.6 274.588 144 278.988C150.4 283.388 146.667 292.488 144 296.488" stroke="white" stroke-width="6" stroke-linecap="round"/>
<circle id="Ellipse 8" cx="130.5" cy="296.988" r="3.5" fill="white"/>
<path id="Vector 12" d="M48 295.988C56.5 295.988 67.8 294.788 77 291.988C86.2 289.188 95.3333 281.655 98.5 277.988" stroke="white" stroke-width="5" stroke-linecap="round"/>
<path id="Vector 13" d="M125.707 259.477C132.497 258.246 140.55 257.09 147.4 253.003C154.25 248.915 160.916 241.067 162.792 237" stroke="white" stroke-width="5" stroke-linecap="round"/>
<path id="greenMouth" d="M150.094 312.108C146.5 312.988 138 312.488 138 308.566C138 304.644 146 306.488 147.724 306.172C150.028 305.749 151.067 303.748 152.883 302.84C154.474 302.044 156.676 302.623 157.424 304.333C159.246 308.498 152.849 311.433 150.094 312.108Z" fill="white"/>
</g>
<g id="appleeFace">
<path id="Vector 11_2" d="M149 121C151.833 122.259 158.82 125.973 164.107 130.757C169.395 135.541 177.012 144.291 180.159 148.067C182.362 145.759 187.776 141.836 191.804 144.605C195.833 147.375 193.483 153.103 191.804 155.621" stroke="white" stroke-width="5.31364" stroke-linecap="round"/>
<circle id="Ellipse 8_2" cx="180.203" cy="159.203" r="2.20316" fill="white"/>
<path id="Vector 12_2" d="M129.353 158.997C134.648 159.763 141.796 160.033 147.78 159.118C153.764 158.203 160.132 154.332 162.436 152.334" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
<path id="Vector 13_2" d="M185.44 135.748C189.373 134.785 193.777 131.97 195.293 130.276" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
<path id="appleMouth" d="M192.613 171.055C190.351 171.609 185 171.295 185 168.826C185 166.357 190.036 167.518 191.121 167.319C192.571 167.053 193.225 165.793 194.368 165.221C195.37 164.721 196.756 165.085 197.227 166.161C198.374 168.783 194.347 170.63 192.613 171.055Z" fill="white"/>
</g>
<g id="yelloweeFace">
<path id="Vector 11_3" d="M287.368 219C290.064 220.529 296.657 224.904 301.454 230.18C306.251 235.456 312.981 244.905 315.746 248.97C318.163 246.887 323.933 243.509 327.673 246.657C331.413 249.805 328.517 255.278 326.601 257.621" stroke="white" stroke-width="5.31364" stroke-linecap="round"/>
<circle id="Ellipse 8_3" cx="318.203" cy="256.203" r="2.20316" fill="white"/>
<path id="Vector 12_3" d="M266.818 251.127C272.052 252.237 279.167 252.974 285.198 252.451C291.229 251.928 297.836 248.481 300.265 246.637" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
<path id="Vector 13_3" d="M317.039 235.952C319.845 234.874 322.824 232.389 323.782 231" stroke="white" stroke-width="4.42803" stroke-linecap="round"/>
<path id="yellowMouth" d="M316.613 267.055C314.351 267.609 309 267.295 309 264.826C309 262.357 314.036 263.518 315.121 263.319C316.571 263.053 317.225 261.793 318.368 261.221C319.37 260.721 320.756 261.085 321.227 262.161C322.374 264.783 318.347 266.63 316.613 267.055Z" fill="white"/>
</g>
<g id="yelloweeFace_2">
<path id="Vector 11_4" d="M284.82 163.868C287.212 164.638 293.166 167.029 297.842 170.429C302.518 173.83 309.414 180.226 312.278 183C313.855 180.948 317.88 177.318 321.368 179.203C324.855 181.088 323.455 185.909 322.319 188.084" stroke="white" stroke-width="4.30847" stroke-linecap="round"/>
<circle id="Ellipse 8_4" cx="315.786" cy="188.786" r="1.78639" fill="white"/>
<path id="Vector 12_4" d="M266 178.602C270.244 179.502 273.018 179.004 277.914 178.551C282.81 178.098 288.184 175.225 290.162 173.692" stroke="white" stroke-width="3.59039" stroke-linecap="round"/>
<path id="Vector 13_4" d="M304.523 164.762C306.769 163.814 309.117 161.722 309.857 160.571" stroke="white" stroke-width="3.59039" stroke-linecap="round"/>
<path id="yellowMouth_2" d="M326.674 196.595C324.988 197.445 320.703 198.171 320.253 196.22C319.803 194.269 323.993 194.269 324.815 193.914C325.912 193.44 326.199 192.325 326.998 191.666C327.698 191.087 328.86 191.122 329.428 191.887C330.812 193.75 327.967 195.943 326.674 196.595Z" fill="white"/>
</g>
</g>
<defs>
<linearGradient id="paint0_linear" x1="455.758" y1="123.649" x2="455.639" y2="647.96" gradientUnits="userSpaceOnUse">
<stop stop-color="#FF8425"/>
<stop offset="1" stop-color="#FF8425" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint1_linear" x1="407.682" y1="223.341" x2="371.711" y2="248.957" gradientUnits="userSpaceOnUse">
<stop stop-color="#FC8E38"/>
<stop offset="1" stop-color="#FC8E38" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint2_linear" x1="356.632" y1="90.0001" x2="484.075" y2="639.688" gradientUnits="userSpaceOnUse">
<stop stop-color="#DDE44F"/>
<stop offset="1" stop-color="#DDE44F" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint3_linear" x1="260.846" y1="176.626" x2="229.78" y2="198.971" gradientUnits="userSpaceOnUse">
<stop stop-color="#DDE455"/>
<stop offset="1" stop-color="#DDE455" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint4_linear" x1="505" y1="195" x2="504.69" y2="648.301" gradientUnits="userSpaceOnUse">
<stop stop-color="#F8D751"/>
<stop offset="1" stop-color="#F8D751" stop-opacity="0"/>
</linearGradient>
<linearGradient id="paint5_linear" x1="373.587" y1="286.031" x2="332.551" y2="300.859" gradientUnits="userSpaceOnUse">
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

    
</body>
</html>