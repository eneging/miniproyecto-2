<?php 


$id = $_GET["id"];

require_once("../models/usuarios.php");
$data = getByID($id);

extract($data);
?>

<?php 

session_start();
if(!isset($_SESSION['users1'])){
   header('Location: /index.php');
    echo "no estas loggeafo";
    die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Manrope:wght@300&family=Noto+Sans:wght@100;300&family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<nav style="display: flex;">         <div> <svg width="131" height="19" viewBox="0 0 131 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M41.6572 7.67183C41.3321 8.0211 41.1697 8.50014 41.1697 9.10897C41.1697 9.71867 41.3321 10.196 41.6572 10.5409C41.9821 10.8867 42.4127 11.0591 42.9489 11.0591C43.4687 11.0591 43.8973 10.8823 44.2345 10.5287C44.5715 10.1759 44.7403 9.70212 44.7403 9.10897C44.7403 8.50798 44.5715 8.03068 44.2345 7.67706C43.8973 7.32431 43.4687 7.14749 42.9489 7.14749C42.4127 7.14749 41.9821 7.32256 41.6572 7.67183ZM43.8689 6.05091C44.2711 6.3183 44.5614 6.68064 44.7403 7.1353V3.46753H46.4463V12.485H44.7403V11.0713C44.5614 11.526 44.2711 11.8901 43.8689 12.1618C43.4668 12.4344 42.9813 12.5703 42.4127 12.5703C41.844 12.5703 41.3321 12.4318 40.8773 12.1557C40.4222 11.8796 40.0669 11.4798 39.811 10.9555C39.555 10.4311 39.4272 9.81622 39.4272 9.10897C39.4272 8.40259 39.555 7.78767 39.811 7.26334C40.0669 6.739 40.4222 6.3392 40.8773 6.0631C41.3321 5.78699 41.844 5.64851 42.4127 5.64851C42.9813 5.64851 43.4668 5.78264 43.8689 6.05091Z" fill="#282051"/>
<path d="M52.1918 7.42795C51.879 7.14313 51.495 7.00116 51.0403 7.00116C50.5771 7.00116 50.1872 7.14313 49.8704 7.42795C49.5536 7.71189 49.3787 8.13085 49.3464 8.68306H52.6245C52.6489 8.13085 52.5044 7.71189 52.1918 7.42795ZM54.2938 9.43821H49.3464C49.3708 10.0401 49.5333 10.4825 49.8338 10.7665C50.1343 11.0513 50.5081 11.1933 50.9549 11.1933C51.3528 11.1933 51.684 11.0957 51.948 10.9006C52.212 10.7055 52.3806 10.4416 52.4539 10.1089H54.2696C54.18 10.5801 53.9893 11.0025 53.6968 11.3762C53.4044 11.7498 53.0284 12.0425 52.5696 12.2533C52.1105 12.4649 51.6007 12.5703 51.0403 12.5703C50.3822 12.5703 49.7973 12.4301 49.2855 12.1496C48.7737 11.8692 48.3755 11.4694 48.0913 10.9494C47.8068 10.4294 47.6648 9.81622 47.6648 9.10897C47.6648 8.40259 47.8068 7.78767 48.0913 7.26334C48.3755 6.739 48.7737 6.3392 49.2855 6.0631C49.7973 5.78699 50.3822 5.64851 51.0403 5.64851C51.7064 5.64851 52.2893 5.78699 52.7888 6.0631C53.2886 6.3392 53.6744 6.71896 53.9464 7.20237C54.2188 7.68577 54.3549 8.23623 54.3549 8.85377C54.3549 9.02449 54.3345 9.21871 54.2938 9.43821Z" fill="#282051"/>
<path d="M58.5101 10.7669L60.2161 5.73426H62.044L59.5458 12.4854H57.4499L54.9517 5.73426H56.7918L58.5101 10.7669Z" fill="#282051"/>
<path d="M68.2038 6.35488C68.7847 6.82609 69.148 7.46802 69.2943 8.28066H67.4791C67.406 7.92355 67.2396 7.64134 66.9792 7.43405C66.7187 7.22675 66.3904 7.1231 65.9923 7.1231C65.5368 7.1231 65.157 7.29208 64.8527 7.62915C64.5481 7.96623 64.3959 8.45921 64.3959 9.10897C64.3959 9.7596 64.5481 10.2526 64.8527 10.5897C65.157 10.9276 65.5368 11.0957 65.9923 11.0957C66.3904 11.0957 66.7187 10.9921 66.9792 10.7848C67.2396 10.5775 67.406 10.2953 67.4791 9.93816H69.2943C69.148 10.7508 68.7847 11.3927 68.2038 11.8631C67.6228 12.3343 66.8982 12.5703 66.0289 12.5703C65.3704 12.5703 64.7858 12.4301 64.2739 12.1496C63.7622 11.8692 63.364 11.4694 63.0797 10.9494C62.7953 10.4294 62.6532 9.81622 62.6532 9.10897C62.6532 8.40259 62.7953 7.78767 63.0797 7.26334C63.364 6.739 63.7622 6.3392 64.2739 6.0631C64.7858 5.78699 65.3704 5.64851 66.0289 5.64851C66.8982 5.64851 67.6228 5.88454 68.2038 6.35488Z" fill="#282051"/>
<path d="M76.3989 6.40406C76.8623 6.9162 77.0931 7.63565 77.0931 8.56151V12.4854H75.3877V8.75661C75.3877 8.22008 75.2492 7.80375 74.9731 7.50761C74.697 7.2106 74.319 7.06252 73.84 7.06252C73.3522 7.06252 72.9629 7.22105 72.6702 7.53809C72.3776 7.85427 72.2312 8.30979 72.2312 8.90294V12.4854H70.5128V3.46792H72.2312V7.08691C72.4098 6.63225 72.7042 6.27689 73.1144 6.02082C73.5247 5.76474 73.9985 5.6367 74.5341 5.6367C75.3146 5.6367 75.9356 5.89278 76.3989 6.40406Z" fill="#282051"/>
<path d="M80.4935 7.67183C80.1677 8.0211 80.0057 8.50014 80.0057 9.10897C80.0057 9.71867 80.1677 10.196 80.4935 10.5409C80.8184 10.8867 81.2486 11.0591 81.7852 11.0591C82.3052 11.0591 82.7337 10.8823 83.0708 10.5287C83.4079 10.1759 83.576 9.70212 83.576 9.10897C83.576 8.50798 83.4079 8.03068 83.0708 7.67706C82.7337 7.32431 82.3052 7.14749 81.7852 7.14749C81.2486 7.14749 80.8184 7.32256 80.4935 7.67183ZM82.7111 6.05091C83.1169 6.3183 83.4061 6.68064 83.576 7.1353V5.73386H85.2822V12.485H83.576V11.0713C83.4061 11.526 83.1169 11.8901 82.7111 12.1618C82.3052 12.4344 81.8174 12.5703 81.2487 12.5703C80.6799 12.5703 80.1677 12.4318 79.7131 12.1557C79.2584 11.8796 78.9031 11.4798 78.647 10.9555C78.3909 10.4311 78.2629 9.81622 78.2629 9.10897C78.2629 8.40259 78.3909 7.78767 78.647 7.26334C78.9031 6.739 79.2584 6.3392 79.7131 6.0631C80.1677 5.78699 80.6799 5.64851 81.2487 5.64851C81.8174 5.64851 82.3052 5.78264 82.7111 6.05091Z" fill="#282051"/>
<path d="M88.5606 3.46792V12.4854H86.8422V3.46792H88.5606Z" fill="#282051"/>
<path d="M91.8382 3.46792V12.4854H90.1198V3.46792H91.8382Z" fill="#282051"/>
<path d="M97.5842 7.42795C97.2706 7.14313 96.8874 7.00116 96.4327 7.00116C95.9694 7.00116 95.5792 7.14313 95.2621 7.42795C94.946 7.71189 94.7709 8.13085 94.7387 8.68306H98.0162C98.0406 8.13085 97.8969 7.71189 97.5842 7.42795ZM99.6859 9.43821H94.7387C94.763 10.0401 94.925 10.4825 95.2255 10.7665C95.526 11.0513 95.8997 11.1933 96.3474 11.1933C96.7446 11.1933 97.0764 11.0957 97.3403 10.9006C97.6042 10.7055 97.7723 10.4416 97.8455 10.1089H99.6615C99.5718 10.5801 99.3811 11.0025 99.0893 11.3762C98.7966 11.7498 98.4204 12.0425 97.9613 12.2533C97.5023 12.4649 96.9928 12.5703 96.4327 12.5703C95.7743 12.5703 95.1898 12.4301 94.6777 12.1496C94.1655 11.8692 93.7675 11.4694 93.4836 10.9494C93.1987 10.4294 93.0568 9.81622 93.0568 9.10897C93.0568 8.40259 93.1987 7.78767 93.4836 7.26334C93.7675 6.739 94.1655 6.3392 94.6777 6.0631C95.1898 5.78699 95.7743 5.64851 96.4327 5.64851C97.0982 5.64851 97.6818 5.78699 98.1808 6.0631C98.6808 6.3392 99.0666 6.71896 99.3384 7.20237C99.611 7.68577 99.7469 8.23623 99.7469 8.85377C99.7469 9.02449 99.7268 9.21871 99.6859 9.43821Z" fill="#282051"/>
<path d="M106.852 6.40406C107.314 6.9162 107.546 7.63565 107.546 8.56151V12.4854H105.839V8.75661C105.839 8.22008 105.701 7.80375 105.426 7.50761C105.149 7.2106 104.772 7.06252 104.292 7.06252C103.805 7.06252 103.415 7.22105 103.122 7.53809C102.83 7.85427 102.684 8.30979 102.684 8.90294V12.4854H100.965V5.73426H102.684V7.08691C102.862 6.63225 103.157 6.27689 103.567 6.02082C103.977 5.76474 104.45 5.6367 104.987 5.6367C105.766 5.6367 106.388 5.89278 106.852 6.40406Z" fill="#282051"/>
<path d="M110.945 7.67253C110.62 8.0218 110.458 8.50085 110.458 9.10968C110.458 9.71938 110.62 10.1967 110.945 10.5416C111.27 10.8874 111.701 11.0598 112.237 11.0598C112.757 11.0598 113.185 10.883 113.523 10.5294C113.86 10.1766 114.029 9.70283 114.029 9.10968C114.029 8.50869 113.86 8.03139 113.523 7.67777C113.185 7.32501 112.757 7.14819 112.237 7.14819C111.701 7.14819 111.27 7.32327 110.945 7.67253ZM113.164 6.05161C113.57 6.31901 113.858 6.68134 114.029 7.13601V5.73457H115.735V12.5101C115.735 13.1354 115.61 13.6981 115.363 14.198C115.115 14.6971 114.745 15.0891 114.254 15.3739C113.762 15.6578 113.167 15.7998 112.469 15.7998C111.494 15.7998 110.706 15.569 110.105 15.1056C109.504 14.6422 109.138 14.0125 109.008 13.2164H110.701C110.799 13.5579 110.988 13.8235 111.268 14.0151C111.549 14.2059 111.908 14.3017 112.347 14.3017C112.85 14.3017 113.257 14.1527 113.565 13.8566C113.874 13.5596 114.029 13.111 114.029 12.5101V11.072C113.858 11.5267 113.57 11.8908 113.164 12.1625C112.757 12.4351 112.269 12.571 111.701 12.571C111.133 12.571 110.62 12.4325 110.166 12.1564C109.71 11.8803 109.356 11.4805 109.1 10.9562C108.844 10.4319 108.716 9.81693 108.716 9.10968C108.716 8.4033 108.844 7.78838 109.1 7.26404C109.356 6.7397 109.71 6.33991 110.166 6.0638C110.62 5.7877 111.133 5.64921 111.701 5.64921C112.269 5.64921 112.757 5.78335 113.164 6.05161Z" fill="#282051"/>
<path d="M121.479 7.42868C121.167 7.14488 120.782 7.0019 120.328 7.0019C119.866 7.0019 119.475 7.14488 119.158 7.42868C118.841 7.7132 118.666 8.13149 118.634 8.68391H121.912C121.937 8.13149 121.792 7.7132 121.479 7.42868ZM123.582 9.43944H118.634C118.658 10.0411 118.821 10.4835 119.121 10.7675C119.422 11.0523 119.796 11.1943 120.243 11.1943C120.64 11.1943 120.972 11.0967 121.235 10.9016C121.499 10.7065 121.668 10.4426 121.741 10.1099H123.557C123.468 10.5811 123.277 11.0035 122.984 11.3772C122.692 11.7508 122.317 12.0435 121.857 12.2542C121.398 12.4659 120.889 12.5713 120.328 12.5713C119.67 12.5713 119.085 12.4311 118.573 12.1506C118.061 11.8702 117.664 11.4704 117.379 10.9503C117.095 10.4304 116.953 9.81725 116.953 9.11042C116.953 8.40359 117.095 7.78826 117.379 7.26372C117.664 6.74008 118.061 6.34065 118.573 6.06363C119.085 5.78752 119.67 5.6499 120.328 5.6499C120.994 5.6499 121.577 5.78752 122.076 6.06363C122.576 6.34065 122.962 6.72042 123.234 7.20296C123.506 7.68666 123.643 8.23712 123.643 8.85441C123.643 9.02508 123.622 9.22006 123.582 9.43944Z" fill="#282051"/>
<path d="M129.162 6.27107C129.658 6.68534 129.967 7.23797 130.089 7.92831H128.48C128.415 7.60349 128.269 7.34328 128.041 7.14843C127.814 6.95339 127.517 6.856 127.152 6.856C126.859 6.856 126.632 6.92509 126.469 7.06309C126.307 7.20136 126.225 7.38819 126.225 7.62365C126.225 7.81066 126.29 7.96089 126.42 8.07452C126.55 8.18833 126.713 8.27759 126.909 8.34257C127.104 8.40764 127.384 8.48486 127.749 8.57412C128.26 8.68803 128.677 8.80781 128.998 8.93367C129.319 9.05971 129.596 9.25868 129.827 9.53084C130.059 9.80328 130.174 10.1708 130.174 10.6333C130.174 11.2108 129.949 11.6777 129.498 12.0347C129.047 12.3927 128.44 12.5713 127.676 12.5713C126.798 12.5713 126.095 12.3744 125.568 11.9799C125.039 11.5862 124.718 11.0236 124.605 10.2927H126.249C126.29 10.6255 126.437 10.8876 126.689 11.0784C126.94 11.2691 127.27 11.3649 127.676 11.3649C127.968 11.3649 128.192 11.2936 128.346 11.1516C128.5 11.0096 128.578 10.825 128.578 10.5967C128.578 10.4017 128.511 10.244 128.376 10.122C128.243 10.0001 128.077 9.90692 127.877 9.84156C127.678 9.7763 127.396 9.69964 127.03 9.61001C126.526 9.49629 126.119 9.38051 125.806 9.26259C125.493 9.14495 125.224 8.95608 125.001 8.69605C124.778 8.43603 124.666 8.07872 124.666 7.62365C124.666 7.03872 124.889 6.56349 125.336 6.19787C125.783 5.83244 126.401 5.64954 127.189 5.64954C128.009 5.64954 128.667 5.85672 129.162 6.27107Z" fill="#282051"/>
<path d="M34.7099 11.7721L23.9679 17.4789C23.6186 17.6644 23.2249 17.7628 22.8312 17.7628C21.9306 17.7628 21.1093 17.2689 20.6877 16.4746C20.3837 15.9015 20.3201 15.2465 20.51 14.6263C20.6999 14.0062 21.1197 13.4984 21.6919 13.1944L32.4339 7.48765C32.7832 7.30126 33.176 7.20458 33.5706 7.20458C33.9094 7.20458 34.2378 7.27426 34.5374 7.40491L34.709 7.49636C35.1375 7.72282 35.4842 8.06948 35.7115 8.49801C35.7193 8.51107 35.7281 8.52414 35.7368 8.5372C36.329 9.7113 35.8752 11.1528 34.7099 11.7721ZM1.15735 10.7731C1.15212 10.7626 1.14428 10.7539 1.13732 10.7434C0.535459 9.56673 0.987505 8.11738 2.15812 7.49636L12.9001 1.78873C13.2494 1.60408 13.6422 1.50479 14.0368 1.50479C14.9365 1.50479 15.7579 1.99864 16.1803 2.79298C16.4834 3.36436 16.5461 4.02109 16.3562 4.64037C16.1664 5.26052 15.7474 5.77005 15.176 6.07316L4.43404 11.7808C4.08477 11.9663 3.69108 12.0639 3.29739 12.0639C2.95857 12.0639 2.6302 11.9933 2.33058 11.8644L2.15812 11.7721C1.73046 11.5456 1.38468 11.1998 1.15735 10.7731ZM36.4832 8.08255C36.1339 7.42669 35.5835 6.92151 34.9311 6.62624L26.8587 2.33833L24.73 1.20777L24.7221 1.20342L24.3764 1.02051C23.9252 0.780983 23.42 0.650333 22.9113 0.637268C22.9018 0.637268 22.8922 0.635534 22.8826 0.635534C22.8652 0.635534 22.8478 0.633789 22.8312 0.633789L22.8216 0.634657C21.7895 0.624205 20.7687 1.09454 20.1198 1.98731L13.1724 11.2338C13.0286 11.4254 13.0669 11.6989 13.2595 11.8435C13.4519 11.9881 13.7245 11.9489 13.8691 11.7564L20.8201 2.50382C21.6057 1.42204 23.1256 1.18164 24.2083 1.96728C24.9355 2.49685 25.3101 3.37829 25.1846 4.26932C25.1298 4.65953 24.9773 5.0358 24.7491 5.34936L17.3335 15.2265C17.323 14.9399 17.276 14.6525 17.1898 14.372C16.932 13.5298 16.3623 12.8382 15.5845 12.4245L9.67778 9.27494C9.46517 9.16171 9.20135 9.24271 9.08899 9.45524C8.97567 9.66689 9.05667 9.9308 9.26928 10.044L15.176 13.1944C15.7483 13.4984 16.1672 14.0062 16.3571 14.6263C16.547 15.2465 16.4843 15.9015 16.1803 16.4746C15.9216 16.9615 15.5122 17.3343 15.028 17.5511C14.9626 17.5712 14.8964 17.5895 14.8294 17.606C14.7693 17.6182 14.7153 17.6435 14.6691 17.6783C14.4662 17.7332 14.2536 17.7628 14.0368 17.7628C13.6422 17.7628 13.2494 17.6644 12.9001 17.4789L5.62643 13.6142L4.1379 12.8242C4.38178 12.7589 4.61869 12.6675 4.84253 12.5499L15.5845 6.84311C16.3615 6.42939 16.9311 5.73869 17.1889 4.89644C17.4467 4.05244 17.3614 3.16055 16.9494 2.38449C16.3754 1.30446 15.2596 0.633789 14.0368 0.633789C13.5002 0.633789 12.9663 0.767918 12.4916 1.02051L1.74963 6.72641C0.14438 7.57911 -0.46793 9.57892 0.384775 11.1842C0.734045 11.8409 1.28451 12.3452 1.93689 12.6413L2.08757 12.7215H2.08931L4.49588 14.0001L12.4916 18.2479C12.9663 18.5005 13.5002 18.6338 14.0368 18.6338C14.4975 18.6338 14.9435 18.538 15.3502 18.362C15.993 18.1434 16.5548 17.7332 16.9529 17.1853L25.4503 5.8676C25.7656 5.4321 25.972 4.92257 26.0469 4.39126C26.1236 3.84515 26.0617 3.30513 25.8823 2.80605L27.181 3.49501L32.7292 6.44333C32.4853 6.50779 32.2484 6.59924 32.0254 6.7177L27.1818 9.29061L23.7676 7.48853C23.5542 7.37704 23.2921 7.45979 23.1806 7.67318C23.0691 7.88657 23.151 8.14962 23.3644 8.2611L26.2499 9.78708L21.2826 12.4245C20.5057 12.8382 19.9352 13.5298 19.6773 14.372C19.4195 15.2125 19.5049 16.1053 19.9186 16.8831C20.4917 17.9623 21.6075 18.6338 22.8312 18.6338C23.3669 18.6338 23.9017 18.5005 24.3764 18.2479L35.1184 12.5412C36.7236 11.6876 37.3359 9.68954 36.4832 8.08255Z" fill="#F0402C"/>
<path d="M27.181 3.49512L25.8823 2.80615L25.8814 2.80442C25.628 2.13724 25.2273 1.50837 24.73 1.20788L26.8587 2.33844C27.0207 2.706 27.1304 3.09359 27.181 3.49512Z" fill="#C73622"/>
<path d="M4.49586 14L2.08929 12.7214C2.12753 12.7344 2.75169 12.9409 3.40145 12.9409C3.65404 12.9409 3.91046 12.9095 4.13788 12.8242L5.62641 13.6142C5.27017 13.7988 4.88868 13.9268 4.49586 14Z" fill="#C73622"/>
</svg>  </div>    


<div style="display: flex; gap:1rem; height: 5vh  ">  <img src="<?= $Photo ?>" style="width: 40px; heigth: 40px ; filter:brightness(70%); border-radius:7px"> <h4>  <?= $_SESSION['users1']['Name']?></h4> </div>     </nav>


<div class="container-all" >
<main style=" height: 85vh; width: 40vw; border:solid 1px grey; border-radius:16px; padding:0.5rem;

">

    

<form  action="../handle_db/update.php"  method="post" style="display: flex; flex-direction:column; gap:0.4rem ; padding:1rem"  >

<h4>Change Info </h4>
<p style="font-size:x-small;">Changes will be reflected to every services</p>
<input  style="border: solid 1px grey; border-radius:5px; height:4vh; width: 18vw"  value="<?= $id ?>"  name="id"   type="text" />



<img src="<?= $Photo ?>" style="width: 72px; heigth: 72px ; filter:brightness(70%); border-radius:7px"> 

<input  style="border: solid 1px grey; border-radius:5px; height:4vh; width: 18vw"  value="<?= $Photo ?>"  name="photo"   type="text" />


<label style="font-size: small; font-weight:900">Name</label>
<input style="border: solid 1px grey; border-radius:5px; height:4vh; width: 18vw" type="text"  value="<?= $Name ?>" name="name"/>


<label style="font-size: small; font-weight:900" >Bio:</label>
<input style="border: solid 1px grey; border-radius:5px; height:10vh; width: 18vw"type="text"  value="<?= $Bio ?>" name= "bio"/>

<label style="font-size: small; font-weight:900" >Phone:</label>
<input  style="border: solid 1px grey; border-radius:5px; height:4vh; width: 18vw" type="text" value="<?= $Phone ?>" name="phone"/>


<label  style="font-size: small; font-weight:900">Email:</label>
<input  style="border: solid 1px grey; border-radius:5px; height:4vh;width: 18vw" type="text" value="<?= $Email ?>" name="emails"/>

<label  style="font-size: small; font-weight:900">Contrasena:</label>
<input style="border: solid 1px grey; border-radius:5px; height:4vh; width: 18vw" type="text" require  name="Contrasena"/>


<button type="submit" style="width:5vw; height: 4vh ; background: rgb(38, 129, 242); color:white ; border-radius:4px">Save</button>

</form>
</main>
</div>


</body>
</html>