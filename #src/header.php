<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
    <!-- <meta name="description" content="<?php echo get_field('descr_page')['text']; ?>"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#4744e9">
    <meta name="msapplication-TileColor" content="#4744e9">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,700" rel="stylesheet" />
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=009ddf45-2c26-4085-b0d9-34f7f52cee67"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
        <!-- <?php echo get_page_template_slug(); ?>
        <?php if (is_page_template('city.php')) {echo 'Город';} else {echo 'Другой шаблон';} ?> -->
    <div class="wrapper" <?php if (is_single()) { ?> style="background: #f7f7f7;" <?php } ?>>
        <header class="header padding-lock">
            <div class="header__up">
                <div class="container">
                    <div class="header__up__body">
                        <button class="header__burger header__burger-fixed">
                            <span></span>
                        </button>
                        <a href="<?php echo home_url(); ?>" class="header__logo">
                            <?php 
                                if (get_custom_logo()) { the_custom_logo(); }
                                else { ?>
                                    <svg width="135" height="18" viewBox="0 0 135 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.7262 16.7778C27.4427 16.7778 27.2177 16.7111 27.051 16.5778C26.8842 16.4296 26.7842 16.2519 26.7509 16.0444L24.025 1.84444C24.0083 1.8 24 1.74815 24 1.68889C24 1.57037 24.05 1.46667 24.15 1.37778C24.2668 1.27407 24.3918 1.22222 24.5252 1.22222H27.6261C28.093 1.22222 28.3514 1.38519 28.4014 1.71111L30.0269 10.3778L31.8275 5.26667C32.0109 4.86667 32.2859 4.66667 32.6527 4.66667H34.4533C34.8701 4.66667 35.1452 4.86667 35.2785 5.26667L37.0791 10.3778L38.7046 1.71111C38.7546 1.38519 39.0131 1.22222 39.4799 1.22222H42.5808C42.7309 1.22222 42.8559 1.27407 42.956 1.37778C43.0727 1.46667 43.131 1.57037 43.131 1.68889L43.106 1.84444L40.3802 16.0444C40.3468 16.2519 40.2384 16.4296 40.0551 16.5778C39.8883 16.7111 39.6716 16.7778 39.4049 16.7778H37.0291C36.7624 16.7778 36.554 16.7185 36.4039 16.6C36.2539 16.4815 36.1455 16.3481 36.0788 16.2L33.553 9.84445L31.0272 16.2C30.8772 16.5852 30.5687 16.7778 30.1019 16.7778H27.7262Z" fill="#333333"/>
                                    <path d="M52.6651 17C50.3143 17 48.4638 16.4889 47.1133 15.4667C45.7629 14.4444 45.046 12.9407 44.9627 10.9556C44.946 10.5259 44.9376 9.88889 44.9376 9.04444C44.9376 8.18518 44.946 7.54074 44.9627 7.11111C45.046 5.15556 45.7712 3.65185 47.1383 2.6C48.5221 1.53333 50.3644 1 52.6651 1C54.9658 1 56.808 1.53333 58.1918 2.6C59.5756 3.65185 60.3008 5.15556 60.3675 7.11111C60.4008 7.97037 60.4175 8.61482 60.4175 9.04444C60.4175 9.45926 60.4008 10.0963 60.3675 10.9556C60.2841 12.9407 59.5672 14.4444 58.2168 15.4667C56.8664 16.4889 55.0158 17 52.6651 17ZM52.6651 13.8C53.582 13.8 54.3073 13.5556 54.8408 13.0667C55.3909 12.5778 55.6827 11.8296 55.716 10.8222C55.7494 9.96296 55.7661 9.35556 55.7661 9C55.7661 8.61482 55.7494 8.00741 55.716 7.17778C55.6827 6.17037 55.3909 5.42222 54.8408 4.93333C54.2906 4.44444 53.5654 4.2 52.6651 4.2C51.7648 4.2 51.0396 4.44444 50.4894 4.93333C49.9559 5.42222 49.6641 6.17037 49.6141 7.17778C49.5974 7.59259 49.5891 8.2 49.5891 9C49.5891 9.78519 49.5974 10.3926 49.6141 10.8222C49.6641 11.8296 49.9559 12.5778 50.4894 13.0667C51.0229 13.5556 51.7481 13.8 52.6651 13.8Z" fill="#333333"/>
                                    <path d="M65.9218 16.7778C65.6384 16.7778 65.4133 16.7111 65.2466 16.5778C65.0799 16.4296 64.9798 16.2519 64.9465 16.0444L62.2206 1.84444C62.2039 1.8 62.1956 1.74815 62.1956 1.68889C62.1956 1.57037 62.2456 1.46667 62.3457 1.37778C62.4624 1.27407 62.5874 1.22222 62.7208 1.22222H65.8218C66.2886 1.22222 66.547 1.38519 66.597 1.71111L68.2225 10.3778L70.0231 5.26667C70.2065 4.86667 70.4816 4.66667 70.8483 4.66667H72.6489C73.0657 4.66667 73.3408 4.86667 73.4742 5.26667L75.2747 10.3778L76.9002 1.71111C76.9503 1.38519 77.2087 1.22222 77.6755 1.22222H80.7765C80.9265 1.22222 81.0516 1.27407 81.1516 1.37778C81.2683 1.46667 81.3266 1.57037 81.3266 1.68889L81.3016 1.84444L78.5758 16.0444C78.5424 16.2519 78.4341 16.4296 78.2507 16.5778C78.0839 16.7111 77.8672 16.7778 77.6005 16.7778H75.2247C74.958 16.7778 74.7496 16.7185 74.5995 16.6C74.4495 16.4815 74.3411 16.3481 74.2744 16.2L71.7486 9.84445L69.2228 16.2C69.0728 16.5852 68.7643 16.7778 68.2975 16.7778H65.9218Z" fill="#333333"/>
                                    <g clip-path="url(#clip0)">
                                    <rect y="18.4" width="9.6" height="9.6" transform="rotate(-90 0 18.4)" fill="#333333"/>
                                    <rect x="9.60001" y="18.4" width="9.6" height="9.6" transform="rotate(-90 9.60001 18.4)" fill="#F3CC3F"/>
                                    <rect y="8.4" width="9.6" height="9.6" transform="rotate(-90 0 8.4)" fill="#F3CC3F"/>
                                    <rect y="18" width="9" height="9" transform="rotate(-90 0 18)" fill="#333333"/>
                                    <rect x="9" y="18" width="9" height="9" transform="rotate(-90 9 18)" fill="#F3CC3F"/>
                                    <rect y="9" width="9" height="9" transform="rotate(-90 0 9)" fill="#F3CC3F"/>
                                    <rect x="9" y="9" width="9" height="9" transform="rotate(-90 9 9)" fill="#333333"/>
                                    </g>
                                    <path d="M89.2413 17C89.088 17 88.9501 16.9467 88.8275 16.84C88.7202 16.7181 88.6666 16.581 88.6666 16.4286V4.58857H84.5747C84.4214 4.58857 84.2835 4.53524 84.1609 4.42857C84.0536 4.30667 84 4.16952 84 4.01714V1.57143C84 1.40381 84.0536 1.26667 84.1609 1.16C84.2835 1.05333 84.4214 1 84.5747 1H96.9423C97.1109 1 97.2488 1.05333 97.3561 1.16C97.4634 1.26667 97.517 1.40381 97.517 1.57143V4.01714C97.517 4.18476 97.4634 4.32191 97.3561 4.42857C97.2488 4.53524 97.1109 4.58857 96.9423 4.58857H92.8504V16.4286C92.8504 16.581 92.7968 16.7181 92.6895 16.84C92.5822 16.9467 92.4443 17 92.2757 17H89.2413Z" fill="#F3CC3F"/>
                                    <path d="M97.0479 17C96.9253 17 96.8104 16.9543 96.7031 16.8629C96.6111 16.7562 96.5652 16.6419 96.5652 16.52C96.5652 16.4286 96.5728 16.36 96.5882 16.3143L101.99 1.64C102.036 1.45714 102.136 1.30476 102.289 1.18286C102.442 1.06095 102.642 1 102.887 1H106.289C106.534 1 106.734 1.06095 106.887 1.18286C107.04 1.30476 107.14 1.45714 107.186 1.64L112.565 16.3143L112.611 16.52C112.611 16.6419 112.557 16.7562 112.45 16.8629C112.358 16.9543 112.243 17 112.105 17H109.278C108.91 17 108.665 16.84 108.542 16.52L107.645 14.1886H101.508L100.634 16.52C100.511 16.84 100.259 17 99.8755 17H97.0479ZM106.726 10.8971L104.588 4.86286L102.45 10.8971H106.726Z" fill="#F3CC3F"/>
                                    <path d="M113.572 17C113.434 17 113.312 16.9543 113.204 16.8629C113.112 16.7562 113.067 16.6419 113.067 16.52C113.067 16.4133 113.097 16.3219 113.158 16.2457L118.17 8.84L113.526 1.75429C113.48 1.66286 113.457 1.57143 113.457 1.48C113.457 1.3581 113.503 1.25143 113.595 1.16C113.687 1.05333 113.802 1 113.94 1H117.273C117.457 1 117.61 1.04571 117.733 1.13714C117.856 1.22857 117.971 1.34286 118.078 1.48L120.813 5.61714L123.595 1.48C123.794 1.16 124.062 1 124.4 1H127.572C127.695 1 127.802 1.05333 127.894 1.16C128.001 1.25143 128.055 1.3581 128.055 1.48C128.055 1.58667 128.024 1.6781 127.963 1.75429L123.296 8.81714L128.354 16.2457C128.4 16.3067 128.423 16.3981 128.423 16.52C128.423 16.6419 128.377 16.7562 128.285 16.8629C128.193 16.9543 128.078 17 127.94 17H124.515C124.193 17 123.925 16.8476 123.71 16.5429L120.676 12.1543L117.664 16.5429C117.496 16.8476 117.235 17 116.883 17H113.572Z" fill="#F3CC3F"/>
                                    <path d="M130.869 17C130.716 17 130.578 16.9467 130.455 16.84C130.348 16.7181 130.294 16.581 130.294 16.4286V1.57143C130.294 1.40381 130.348 1.26667 130.455 1.16C130.578 1.05333 130.716 1 130.869 1H133.95C134.118 1 134.256 1.05333 134.363 1.16C134.486 1.26667 134.547 1.40381 134.547 1.57143V16.4286C134.547 16.5962 134.486 16.7333 134.363 16.84C134.256 16.9467 134.118 17 133.95 17H130.869Z" fill="#F3CC3F"/>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect y="18" width="18" height="18" rx="4" transform="rotate(-90 0 18)" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>
                                <?php }
                            ?>
                        </a>
                        <div class="header__contacts">
                            <span class="header-work_time">Время работы: 24/7</span>
                            <a href="<?php echo home_url(); ?>#calc" class="btn header__order__btn">
                                    <span class="header__order__btn-icon">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.579 7.61625L14.553 4.53825C14.4042 4.09011 14.1179 3.70027 13.7348 3.42413C13.3518 3.14799 12.8915 2.99958 12.4193 3H10.5V1.5H7.5V3H5.58075C5.10854 2.99958 4.64821 3.14799 4.26516 3.42413C3.88212 3.70027 3.59584 4.09011 3.447 4.53825L2.421 7.61625C2.14817 7.73041 1.91517 7.92268 1.7513 8.16888C1.58743 8.41509 1.5 8.70425 1.5 9V12.75C1.5 13.3035 1.803 13.782 2.25 14.0422V15.75C2.25 15.9489 2.32902 16.1397 2.46967 16.2803C2.61032 16.421 2.80109 16.5 3 16.5H3.75C3.94891 16.5 4.13968 16.421 4.28033 16.2803C4.42098 16.1397 4.5 15.9489 4.5 15.75V14.25H13.5V15.75C13.5 15.9489 13.579 16.1397 13.7197 16.2803C13.8603 16.421 14.0511 16.5 14.25 16.5H15C15.1989 16.5 15.3897 16.421 15.5303 16.2803C15.671 16.1397 15.75 15.9489 15.75 15.75V14.0422C15.9775 13.9118 16.1667 13.7236 16.2983 13.4967C16.43 13.2699 16.4996 13.0123 16.5 12.75V9C16.5 8.70425 16.4126 8.41509 16.2487 8.16888C16.0848 7.92268 15.8518 7.73041 15.579 7.61625ZM5.58075 4.5H12.4185C12.7418 4.5 13.0282 4.7055 13.1302 5.013L13.9598 7.5H4.04025L4.869 5.013C4.91876 4.8636 5.01429 4.73364 5.14204 4.64157C5.26979 4.54949 5.42328 4.49996 5.58075 4.5V4.5ZM4.125 12C3.97721 12 3.83088 11.9708 3.69437 11.9142C3.55785 11.8576 3.43382 11.7747 3.32935 11.6701C3.22488 11.5656 3.14203 11.4415 3.08552 11.3049C3.02901 11.1684 2.99995 11.022 3 10.8742C3.00005 10.7265 3.02921 10.5801 3.08581 10.4436C3.14241 10.3071 3.22534 10.1831 3.32988 10.0786C3.43442 9.97413 3.5585 9.89128 3.69506 9.83477C3.83161 9.77826 3.97796 9.7492 4.12575 9.74925C4.42422 9.74935 4.71042 9.86801 4.9214 10.0791C5.13238 10.2902 5.25085 10.5765 5.25075 10.875C5.25065 11.1735 5.13199 11.4597 4.92087 11.6707C4.70975 11.8816 4.42347 12.0001 4.125 12V12ZM13.875 12C13.7272 12 13.5809 11.9708 13.4444 11.9142C13.3078 11.8576 13.1838 11.7747 13.0793 11.6701C12.9749 11.5656 12.892 11.4415 12.8355 11.3049C12.779 11.1684 12.75 11.022 12.75 10.8742C12.75 10.7265 12.7792 10.5801 12.8358 10.4436C12.8924 10.3071 12.9753 10.1831 13.0799 10.0786C13.1844 9.97413 13.3085 9.89128 13.4451 9.83477C13.5816 9.77826 13.728 9.7492 13.8757 9.74925C14.1742 9.74935 14.4604 9.86801 14.6714 10.0791C14.8824 10.2902 15.0008 10.5765 15.0007 10.875C15.0007 11.1735 14.882 11.4597 14.6709 11.6707C14.4598 11.8816 14.1735 12.0001 13.875 12V12Z" fill="#333333"/>
                                        </svg>
                                    </span>
                                    <span class="header__order__btn-text">Заказать трансфер</span>
                            </a>
                            <button class="btn-outline header__connection__btn" data-modal-open="connection">
                                <span class="header__connection__btn-icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.3652 12.855L12.3165 10.083C12.1724 9.95201 11.983 9.88215 11.7883 9.88817C11.5937 9.89419 11.409 9.97561 11.2732 10.1152L9.47847 11.961C9.04647 11.8785 8.17797 11.6077 7.28397 10.716C6.38997 9.82125 6.11922 8.9505 6.03897 8.5215L7.88322 6.726C8.02303 6.59034 8.10457 6.40561 8.11059 6.2109C8.11661 6.01619 8.04663 5.82678 7.91547 5.68275L5.14422 2.63475C5.013 2.49026 4.83063 2.40262 4.63583 2.39044C4.44104 2.37826 4.24917 2.44249 4.10097 2.5695L2.47347 3.96525C2.3438 4.09538 2.26641 4.26858 2.25597 4.452C2.24472 4.6395 2.03022 9.081 5.47422 12.5265C8.47872 15.5302 12.2422 15.75 13.2787 15.75C13.4302 15.75 13.5232 15.7455 13.548 15.744C13.7314 15.7337 13.9045 15.656 14.034 15.5257L15.429 13.8975C15.5565 13.7498 15.6212 13.5581 15.6093 13.3633C15.5974 13.1685 15.5098 12.9861 15.3652 12.855Z" fill="#666666"/>
                                    </svg>
                                </span>
                                <span class="header__connection__btn-text">Связаться</span>
                            </button>
                            <!-- <a href="tel:<?php echo preg_replace('/\s+/', '', get_field('phone', 32)); ?>" class="header__phone">
                                <span class="header__phone-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/phone.svg" alt="Телефон"></span>
                                <span class="header__phone-text"><?php the_field('phone', 32); ?></span>
                            </a> -->
                        </div>
                        <button class="header__search-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.023 16.977C18.5546 16.5284 18.0988 16.0669 17.656 15.593C17.284 15.215 17.06 14.94 17.06 14.94L14.26 13.603C15.381 12.3316 15.9997 10.695 16 9C16 5.141 12.86 2 9 2C5.14 2 2 5.141 2 9C2 12.859 5.14 16 9 16C10.763 16 12.37 15.34 13.603 14.261L14.94 17.061C14.94 17.061 15.215 17.285 15.593 17.657C15.98 18.02 16.489 18.511 16.977 19.024L18.335 20.416L18.939 21.062L21.06 18.941L20.414 18.337C20.035 17.965 19.529 17.471 19.023 16.977ZM9 14C6.243 14 4 11.757 4 9C4 6.243 6.243 4 9 4C11.757 4 14 6.243 14 9C14 11.757 11.757 14 9 14Z"
                                    fill="#666666" />
                            </svg>
                        </button>
                        <button class="header__burger header__burger-mobile">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="header__down">
                <div class="container">
                    <div class="header__down__body">
                        <button class="header__burger">
                            <span></span>
                        </button>
                        <?php 
                            wp_nav_menu( [
                            'theme_location'  => 'header-menu',
                            'container'       => 'nav', 
                            'container_class' => 'header__nav',   
                            'menu_class' => 'header__nav__list',
                            // 'container_aria_label' => 'Меню',
                            // 'items_wrap' => '<ul id="hamburger-nav__list" class="nav__list %2$s">%3$s</ul>',
                            ] );
                        ?>
                        <button class="header__search-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.023 16.977C18.5546 16.5284 18.0988 16.0669 17.656 15.593C17.284 15.215 17.06 14.94 17.06 14.94L14.26 13.603C15.381 12.3316 15.9997 10.695 16 9C16 5.141 12.86 2 9 2C5.14 2 2 5.141 2 9C2 12.859 5.14 16 9 16C10.763 16 12.37 15.34 13.603 14.261L14.94 17.061C14.94 17.061 15.215 17.285 15.593 17.657C15.98 18.02 16.489 18.511 16.977 19.024L18.335 20.416L18.939 21.062L21.06 18.941L20.414 18.337C20.035 17.965 19.529 17.471 19.023 16.977ZM9 14C6.243 14 4 11.757 4 9C4 6.243 6.243 4 9 4C11.757 4 14 6.243 14 9C14 11.757 11.757 14 9 14Z"
                                    fill="#666666" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>