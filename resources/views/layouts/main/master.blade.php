<!doctype html>
<html lang="vi">
   <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="{{url(''.$setting->favicon)}}"
        type="image/x-icon" />
    <link rel="apple-touch-icon"
        href="{{url(''.$setting->favicon)}}">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    
    <link rel="canonical" href="{{\Request::url()}}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="{{\Request::url()}}" />
    <meta property="og:site_name" content="JicaFood" />
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
    <meta property="og:image:width" content="548" />
    <meta property="og:image:height" content="343" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:image" content="@yield('image')" />
      <!-- / Yoast SEO plugin. -->
      <link rel='dns-prefetch' href='//fonts.googleapis.com' />
      <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
      <link rel="alternate" type="application/rss+xml" title="Dòng thông tin NSH - Thang Máy Hitachi Chính Hãng &raquo;" href="https://nsh-group.vn/feed/" />
      <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi NSH - Thang Máy Hitachi Chính Hãng &raquo;" href="https://nsh-group.vn/comments/feed/" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel='stylesheet' id='wp-block-library-css' href='{{asset('frontend/css/style.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='{{asset('frontend/css/wc-blocks-vendors-style.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='wc-blocks-style-css' href='{{asset('frontend/css/wc-blocks-style.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='classic-theme-styles-css' href='{{asset('frontend/css/classic-themes.min.css')}}' type='text/css' media='all' />
      <style id='global-styles-inline-css' type='text/css'>
         body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
         .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
         :where(.wp-block-columns.is-layout-flex){gap: 2em;}
         .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
      </style>
      <link rel='stylesheet' id='ct-main-css-css' href='{{asset('frontend/css/main.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='progressbar-lib-css-css' href='{{asset('frontend/css/progressbar.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='oc-css-css' href='{{asset('frontend/css/owl.carousel.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='ct-font-awesome-css' href='{{asset('frontend/css/font-awesome.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='remodal-css' href='{{asset('frontend/css/remodal.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='remodal-default-theme-css' href='{{asset('frontend/css/remodal-default-theme.css')}}' type='text/css'media='all' />
      <link rel='stylesheet' id='contact-form-7-css' href='{{asset('frontend/css/styles.css')}}' type='text/css' media='all' />
      <!-- <link rel='stylesheet' id='devvn-quickbuy-style-css' href='https://nsh-group.vn/wp-content/plugins/devvn-quick-buy/css/devvn-quick-buy.css?ver=2.0.2' type='text/css' media='all' /> -->
      <link rel='stylesheet' id='Viet-contact-css-css' href='{{asset('frontend/css/viet-contact.css')}}' type='text/css' media='all' />
      <!-- <link rel='stylesheet' id='woocommerce-layout-css' href='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=5.7.1' type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css' href='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=5.7.1' type='text/css' media='only screen and (max-width: 768px)' /> -->
      <!-- <link rel='stylesheet' id='woocommerce-general-css' href='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=5.7.1' type='text/css' media='all' /> -->
      <!-- <style id='woocommerce-inline-inline-css' type='text/css'>
         .woocommerce form .form-row .required { visibility: visible; }
      </style> -->
      <!-- <link rel='stylesheet' id='cb70d11b8-css' href='https://nsh-group.vn/wp-content/uploads/essential-addons-elementor/cb70d11b8.min.css?ver=1675911950' type='text/css' media='all' /> -->
      <link rel='stylesheet' id='bootstrap-css' href='{{asset('frontend/css/bootstrap.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='font-awesome-css' href='{{asset('frontend/css/font-awesome.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='font-awesome5-css' href='{{asset('frontend/css/font-awesome5.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='font-flaticon-css' href='{{asset('frontend/css/flaticon.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='font-flaticon-v2-css' href='{{asset('frontend/css/flaticon-v2.css')}}' type='text/css' media='all' />
      <!-- <link rel='stylesheet' id='font-material-icon-css' href='https://nsh-group.vn/wp-content/themes/intime/assets/css/font-material-design.min.css?ver=2.2.0' type='text/css' media='all' /> -->
      <link rel='stylesheet' id='magnific-popup-css' href='{{asset('frontend/css/magnific-popup.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='animate-css' href='{{asset('frontend/css/animate.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='intime-theme-css' href='{{asset('frontend/css/theme.css')}}' type='text/css' media='all' />
      <style id='intime-theme-inline-css' type='text/css'>
         #ct-header-wrap .ct-header-branding a img { max-height: 60px !important; }        @media screen and (max-width: 1199px) {
         }
         @media screen and (min-width: 1200px) {
         #ct-header-top { background-color: #c20b0b !important; }#ct-header-wrap #ct-header, #ct-header-wrap #ct-header .ct-header-navigation-bg { background-color: #680101 !important; }#ct-header-wrap.ct-header-layout3 #ct-header { background-color: transparent !important; }#ct-header-wrap.ct-header-layout3 #ct-header.h-fixed { background-color: #680101 !important; }#ct-header-wrap.ct-header-layout3 #ct-header.h-fixed .ct-header-navigation-bg { background-color: transparent !important; }#ct-header.h-fixed .ct-main-menu > li > a { color: #ffffff !important; }#ct-header.h-fixed .ct-main-menu > li > a:hover { color: #0a0a0a !important; }#ct-header.h-fixed .ct-main-menu > li.current_page_item > a, #ct-header.h-fixed .ct-main-menu > li.current-menu-item > a, #ct-header.h-fixed .ct-main-menu > li.current_page_ancestor > a, #ct-header.h-fixed .ct-main-menu > li.current-menu-ancestor > a { color: #f2f2f2 !important; }		}
      </style>
      <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
      <link rel='stylesheet' id='intime-google-fonts-css' href='//fonts.googleapis.com/css?family=Nunito%3A400%2C700%7CLato%3A400%2C700%7CPoppins%3A400%2C500%2C700%7CRoboto%3A300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%7CLibre+Caslon+Text%3A400%2C400i%2C700%2C700i%7CPlayfair+Display%3A400%2C400i%2C700%2C700i%2C800%2C900&#038;subset=latin%2Clatin-ext&#038;ver=6.1.1' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-css' href='{{asset('frontend/css/elementor-icons.min.css')}}' type='text/css' media='all' />
      <style id='elementor-icons-inline-css' type='text/css'>
         .elementor-add-new-section .elementor-add-templately-promo-button{
         background-color: #5d4fff;
         background-image: url(https://nsh-group.vn/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
         background-repeat: no-repeat;
         background-position: center center;
         margin-left: 5px;
         position: relative;
         bottom: 5px;
         }
      </style>
      <link rel='stylesheet' id='elementor-frontend-css' href='{{asset('frontend/css/frontend.min.css')}}' type='text/css' media='all' />
      <style id='elementor-frontend-inline-css' type='text/css'>
         @font-face{font-family:eicons;src:url(https://nsh-group.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);src:url(https://nsh-group.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(./fonts/eicons.woff2) format("woff2"),url(./fonts/eicons.woff) format("woff"),url(./fonts/eicons.ttf) format("truetype"),url(https://nsh-group.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
      </style>
      <link rel='stylesheet' id='elementor-post-6439-css' href='{{asset('frontend/css/post-6439.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-pro-css' href='{{asset('frontend/css/frontend.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-global-css' href='{{asset('frontend/css/global.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-post-19-css' href='{{asset('frontend/css/post-19.css')}}' type='text/css' media='all' />
      @yield('css')
      <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&#038;display=swap&#038;ver=1649316315" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&#038;display=swap&#038;ver=1649316315" media="print" onload="this.media='all'">
      <noscript>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic&#038;display=swap&#038;ver=1649316315" />
      </noscript>
      <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre+Caslon+Text%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;subset=vietnamese&#038;ver=6.1.1' type='text/css' media='all' />

      <script type='text/javascript' src='{{asset('frontend/js/jquery.min.js')}}' id='jquery-core-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/jquery-migrate.min.js')}}' id='jquery-migrate-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/main.js')}}' id='ct-main-js-js'></script>
      <noscript>
         <style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
      </noscript>
      <meta name="generator" content="Powered by Slider Revolution 6.5.7 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
      <style type="text/css" id="wp-custom-css">
         .page-title {font-size: 20px; }		
      </style>
      <style id="ct_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">.ct-main-menu > li > a, body .ct-main-menu .sub-menu li a{font-display:swap;}body #pagetitle{background-image:url('https://nsh-group.vn/wp-content/uploads/2021/09/bg-page-title1.jpg');}body #pagetitle{padding-top:50px;padding-bottom:50px;}.single-post .site-content, body.blog .site-content, body.archive .site-content, body.search .site-content, body.page-template-blog-classic .site-content{background-color:#f5f3f0;background-repeat:no-repeat;background-position:left bottom;background-image:url('https://nsh-group.vn/wp-content/uploads/2020/11/bg-content.png');}a{color:#c20b0b;}a:hover{color:#880c0c;}a:active{color:#880c0c;}body{font-family:Roboto;font-weight:normal;font-style:normal;font-display:swap;}h1,.h1,.text-heading{font-family:Roboto;font-weight:normal;font-style:normal;font-display:swap;}h2,.h2{font-family:Roboto;font-weight:normal;font-style:normal;font-display:swap;}h3,.h3{font-family:Roboto;font-weight:normal;font-style:normal;font-display:swap;}h4,.h4{font-family:Roboto;font-weight:normal;font-style:normal;font-display:swap;}h5,.h5{font-family:Roboto;font-weight:normal;font-style:normal;font-display:swap;}h6,.h6{font-family:Roboto;font-weight:normal;font-style:normal;font-display:swap;}</style>
      <style id="ct-page-dynamic-css" data-type="redux-output-css">#content{padding-top:0px;padding-bottom:0px;}</style>
   </head>
   <body class="home page-template-default page page-id-19 theme-intime woocommerce-no-js group-blog redux-page  site-h2 header-sticky  site-404-default elementor-default elementor-kit-6439 elementor-page elementor-page-19">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-dark-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 0.49803921568627" />
                  <feFuncG type="table" tableValues="0 0.49803921568627" />
                  <feFuncB type="table" tableValues="0 0.49803921568627" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-grayscale">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 1" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0 1" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-red">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 1" />
                  <feFuncG type="table" tableValues="0 0.27843137254902" />
                  <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-midnight">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0 0" />
                  <feFuncG type="table" tableValues="0 0.64705882352941" />
                  <feFuncB type="table" tableValues="0 1" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-magenta-yellow">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.78039215686275 1" />
                  <feFuncG type="table" tableValues="0 0.94901960784314" />
                  <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-purple-green">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                  <feFuncG type="table" tableValues="0 1" />
                  <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" >
         <defs>
            <filter id="wp-duotone-blue-orange">
               <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
               <feComponentTransfer color-interpolation-filters="sRGB" >
                  <feFuncR type="table" tableValues="0.098039215686275 1" />
                  <feFuncG type="table" tableValues="0 0.66274509803922" />
                  <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                  <feFuncA type="table" tableValues="1 1" />
               </feComponentTransfer>
               <feComposite in2="SourceGraphic" operator="in" />
            </filter>
         </defs>
      </svg>
      <div id="vcdesktop" class="vcdesktop">
         <div id="vietcontact">
            <button onclick="window.location.href='tel:{{$setting->phone1}}'" id="vc-email" type="button"><img style="width:25px;" src="https://nsh-group.vn/wp-content/plugins/viet-contact/inc/img/phone.svg" /><span>{{$setting->phone1}}</span></button>
            <button onclick="window.open('https://chat.zalo.me/?phone={{$setting->phone1}}')" id="vc-zalo" type="button"><img style="width:25px;" src="https://nsh-group.vn/wp-content/plugins/viet-contact/inc/img/zalo.svg" /><span>Zalo</span></button> 
         
         </div>
       
      </div>
      <div class="vcmobile Pro1" >
         <button onclick="window.location.href='tel:{{$setting->phone1}}'" id="vc-email2" type="button"><img style="width:25px;" src="https://nsh-group.vn/wp-content/plugins/viet-contact/inc/img/phone.svg" /><span>{{$setting->phone1}}</span></button>
            <button onclick="window.open('https://chat.zalo.me/?phone={{$setting->phone1}}')" id="vc-zalo2" type="button"><img style="width:25px;" src="https://nsh-group.vn/wp-content/plugins/viet-contact/inc/img/zalo.svg" /><span>Zalo</span></button> 
      </div>
 
      <div id="page" class="site">
    @include('layouts.header.index')
         @yield('content')
         <!-- #content -->
    @include('layouts.footer.index')
    @yield('js')
         <a href="#" class="scroll-top"><i class="zmdi zmdi-long-arrow-up"></i></a>
      </div>
      <!-- #page -->
      <div class="ct-modal ct-modal-search">
         <div class="ct-modal-close"><i class="ct-icon-close"></i></div>
         <div class="ct-modal-overlay"></div>
         <div class="ct-modal-content">
            <form role="search" method="get" class="search-form-popup" action="https://nsh-group.vn/">
               <div class="searchform-wrap">
                  <input type="text" placeholder="Enter Keywords..." id="search" name="s" class="search-field" />
                  <button type="submit" class="search-submit"><i class="fac fac-search"></i></button>
               </div>
            </form>
         </div>
      </div>
      <div class="ct-widget-cart-wrap">
         <div class="ct-widget-cart-overlay"></div>
         <div class="ct-widget-cart-sidebar">
            <div class="ct-close"><i class="ct-icon-close"></i></div>
            <div class="widget_shopping_cart">
               <div class="widget_shopping_head">
                  <div class="widget_shopping_title">
                     Cart                        
                  </div>
               </div>
               <div class="widget_shopping_cart_content">
                  <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- <script type="text/javascript">
         window.RS_MODULES = window.RS_MODULES || {};
         window.RS_MODULES.modules = window.RS_MODULES.modules || {};
         window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
         window.RS_MODULES.defered = true;
         window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
         window.RS_MODULES.type = 'compiled';
      </script> -->
      <div id='fb-root'></div>
      <!-- <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         js = d.createElement(s); js.id = id;
         js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1';
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script> -->
      <div class='fb-customerchat'
         attribution='wordpress'
         attribution_version='2.2'
         page_id=703686463828892
         >
      </div>
      <!-- <script type="text/javascript">
         jQuery( function($) {
             if ( typeof wc_add_to_cart_params === 'undefined' )
                 return false;
         
             $(document.body).on( 'added_to_cart', function( event, fragments, cart_hash, $button ) {
                 var $pid = $button.data('product_id');
         
                 $.ajax({
                     type: 'POST',
                     url: wc_add_to_cart_params.ajax_url,
                     data: {
                         'action': 'item_added',
                         'id'    : $pid
                     },
                     success: function (response) {
                         $('.ct-widget-cart-wrap').addClass('open');
                     }
                 });
             });
         });
      </script>
      <script type="text/javascript">
         (function () {
         	var c = document.body.className;
         	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
         	document.body.className = c;
         })();
      </script> -->
      <link rel='stylesheet' id='elementor-post-1634-css' href='{{asset('frontend/css/post-1634.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='e-animations-css' href='{{asset('frontend/css/animations.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-shared-0-css' href='{{asset('frontend/css/fontawesome.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='{{asset('frontend/css/solid.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-fa-regular-css' href='{{asset('frontend/css/regular.min.css')}}' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='{{asset('frontend/css/brands.min.css')}}' type='text/css' media='all' />
      <!-- <link rel='stylesheet' id='rs-plugin-settings-css' href='https://nsh-group.vn/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.5.7' type='text/css' media='all' />
      <style id='rs-plugin-settings-inline-css' type='text/css'>
         #rs-demo-id {}
      </style> -->
      <script type='text/javascript' src='{{asset('frontend/js/notify.min.js')}}' id='notify-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/remodal.min.js')}}' id='remodal-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/ct-user-form.js')}}' id='ct-user-form-js'></script> 
      <!-- <script type='text/javascript' id='ct-user-form-js-extra'>
         /* <![CDATA[ */
         var userpress = {"ajax":"https:\/\/nsh-group.vn\/wp-admin\/admin-ajax.php","nonce":"a81b861a03"};
         /* ]]> */
      </script>
  
      script type='text/javascript' src='https://nsh-group.vn/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
      <script type='text/javascript' src='https://nsh-group.vn/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script> -->
      <!-- <script type='text/javascript' id='contact-form-7-js-extra'>
         /* <![CDATA[ */
         var wpcf7 = {"api":{"root":"https:\/\/nsh-group.vn\/wp-json\/","namespace":"contact-form-7\/v1"}};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.4.2' id='contact-form-7-js'></script> -->
      <script type='text/javascript' src='{{asset('frontend/js/jquery.validate.min.js')}}' id='jquery.validate-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/jquery.bpopup.min.js')}}' id='bpopup-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/underscore.min.js')}}' id='underscore-js'></script>
      <script type='text/javascript' id='wp-util-js-extra'>
         /* <![CDATA[ */
         var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
         /* ]]> */
      </script>
      <!-- <script type='text/javascript' src='/js/wp-util.min.js' id='wp-util-js'></script> -->
      <script type='text/javascript' src='{{asset('frontend/js/jquery.blockUI.min.js')}}' id='jquery-blockui-js'></script>
      <script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
         /* <![CDATA[ */
         var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.","i18n_make_a_selection_text":"Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.","i18n_unavailable_text":"R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."};
         /* ]]> */
      </script>
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=5.7.1' id='wc-add-to-cart-variation-js'></script>
      <script type='text/javascript' id='devvn-quickbuy-script-js-extra'>
         /* <![CDATA[ */
         var devvn_quickbuy_array = {"ajaxurl":"https:\/\/nsh-group.vn\/wp-admin\/admin-ajax.php","siteurl":"https:\/\/nsh-group.vn","popup_error":"\u0110\u1eb7t h\u00e0ng th\u1ea5t b\u1ea1i. Vui l\u00f2ng \u0111\u1eb7t h\u00e0ng l\u1ea1i. Xin c\u1ea3m \u01a1n!","out_of_stock_mess":"H\u1ebft h\u00e0ng!","price_decimal":".","num_decimals":"2","currency_format":"$","qty_text":"S\u1ed1 l\u01b0\u1ee3ng","name_text":"H\u1ecd v\u00e0 t\u00ean l\u00e0 b\u1eaft bu\u1ed9c","phone_text":"S\u1ed1 \u0111i\u1ec7n tho\u1ea1i l\u00e0 b\u1eaft bu\u1ed9c","email_text":"Email l\u00e0 b\u1eaft bu\u1ed9c","quan_text":"Qu\u1eadn huy\u1ec7n l\u00e0 b\u1eaft bu\u1ed9c","xa_text":"X\u00e3\/Ph\u01b0\u1eddng l\u00e0 b\u1eaft bu\u1ed9c","address_text":"S\u1ed1 nh\u00e0, t\u00ean \u0111\u01b0\u1eddng l\u00e0 b\u1eaft bu\u1ed9c"};
         /* ]]> */
      </script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/devvn-quick-buy/js/devvn-quick-buy.js?ver=2.0.2' id='devvn-quickbuy-script-js'></script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.7' defer async id='tp-tools-js'></script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.7' defer async id='revmin-js'></script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/viet-contact/js/viet-contact.js?ver=1.0' id='Viet-contact-js-js'></script>
      <script type='text/javascript' id='wc-add-to-cart-js-extra'>
         /* <![CDATA[ */
         var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"https:\/\/nsh-group.vn","is_cart":"","cart_redirect_after_add":"no"};
         /* ]]> */
      </script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.7.1' id='wc-add-to-cart-js'></script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.5.7.1' id='js-cookie-js'></script>
      <script type='text/javascript' id='woocommerce-js-extra'>
         /* <![CDATA[ */
         var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
         /* ]]> */
      </script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.7.1' id='woocommerce-js'></script>
      <script type='text/javascript' id='wc-cart-fragments-js-extra'>
         /* <![CDATA[ */
         var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_6a7ab206c7c76412770294da72ad2f7e","fragment_name":"wc_fragments_6a7ab206c7c76412770294da72ad2f7e","request_timeout":"5000"};
         /* ]]> */
      </script> -->
      <!-- <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min?ver=5.7.1' id='wc-cart-fragments-js'></script>
      <script type='text/javascript' id='cb70d11b8-js-extra'>
         /* <![CDATA[ */
         var localize = {"ajaxurl":"https:\/\/nsh-group.vn\/wp-admin\/admin-ajax.php","nonce":"b09c1edbf6","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."}};
         /* ]]> */
      </script> -->
      <script type='text/javascript' src='{{asset('frontend/js/cb70d11b8.min.js')}}' id='cb70d11b8-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/bootstrap.min.js')}}' id='bootstrap-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/nice-select.min.js')}}' id='nice-select-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/match-height-min.js')}}' id='match-height-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/magnific-popup.min.js')}}' id='magnific-popup-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/progressbar.min.js')}}' id='progressbar-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/wow.min.js')}}' id='wow-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/main.js')}}' id='intime-main-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/woocommerce.js')}}' id='intime-woocommerce-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/imagesloaded.min.js')}}' id='imagesloaded-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/webpack-pro.runtime.min.js')}}' id='elementor-pro-webpack-runtime-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/webpack.runtime.min.js')}}' id='elementor-webpack-runtime-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/frontend-modules.min.js')}}' id='elementor-frontend-modules-js'></script>
      <script type='text/javascript' id='elementor-pro-frontend-js-before'>
         var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/nsh-group.vn\/wp-admin\/admin-ajax.php","nonce":"1999f4053b","urls":{"assets":"https:\/\/nsh-group.vn\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/nsh-group.vn\/wp-json\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"menu_cart":{"cart_page_url":"https:\/\/nsh-group.vn","checkout_page_url":"https:\/\/nsh-group.vn"},"facebook_sdk":{"lang":"vi","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/nsh-group.vn\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
      </script>
      <script type='text/javascript' src='{{asset('frontend/js/frontend.min.js')}}' id='elementor-pro-frontend-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/waypoints.min.js')}}' id='elementor-waypoints-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/core.min.js')}}' id='jquery-ui-core-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/swiper.min.js')}}' id='swiper-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/share-link.min.js')}}' id='share-link-js'></script>
      <script type='text/javascript' src='{{asset('frontend/js/dialog.min.js')}}' id='elementor-dialog-js'></script>
      <script type='text/javascript' id='elementor-frontend-js-before'>
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Chia s\u1ebb tr\u00ean Facebook","shareOnTwitter":"Chia s\u1ebb tr\u00ean Twitter","pinIt":"Ghim n\u00f3","download":"T\u1ea3i xu\u1ed1ng","downloadImage":"T\u1ea3i h\u00ecnh \u1ea3nh","fullscreen":"To\u00e0n m\u00e0n h\u00ecnh","zoom":"Thu ph\u00f3ng","share":"Chia s\u1ebb","playVideo":"Ch\u01a1i Video","previous":"Previous","next":"Next","close":"\u0110\u00f3ng"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Thi\u1ebft b\u1ecb di \u0111\u1ed9ng","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"M\u00e1y t\u00ednh b\u1ea3ng","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"a11y_improvements":true,"e_import_export":true,"additional_custom_breakpoints":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true,"form-submissions":true},"urls":{"assets":"https:\/\/nsh-group.vn\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1634,"title":"NSH%20%E2%80%93%20Thang%20M%C3%A1y%20Hitachi%20Ch%C3%ADnh%20H%C3%A3ng%20%E2%80%93%20M%E1%BB%99t%20trang%20web%20m%E1%BB%9Bi%20s%E1%BB%AD%20d%E1%BB%A5ng%20WordPress","excerpt":"","featuredImage":false}};
      </script>
      <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.4.4' id='elementor-frontend-js'></script>
      <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.4.1' id='pro-preloaded-elements-handlers-js'></script>
      <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.4.4' id='preloaded-modules-js'></script>
      <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.4.1' id='e-sticky-js'></script>
      <script type='text/javascript' id='wpforms-elementor-js-extra'>
         /* <![CDATA[ */
         var wpformsElementorVars = {"captcha_provider":"recaptcha","recaptcha_type":"v2"};
         /* ]]> */
      </script>
      <script type='text/javascript' src='https://nsh-group.vn/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.7.0' id='wpforms-elementor-js'></script>
      <script>
         $('.fa-magnifying-glass').click(function (e) { 
            e.preventDefault();
            $('.fa-solid').toggleClass('fa-circle-xmark fa-magnifying-glass');
            $('.modal-search').toggleClass('active');
            $('.triangle-up ').toggleClass('active');
            console.log(123);
            
         });
       </script>
       <script>
           $('#ct-menu-mobile').click(function (e) { 
            e.preventDefault();
       
            $('.btn-nav-mobile').toggleClass('opened');
            $('.ct-header-navigation').toggleClass('navigation-open');
           
            console.log(123);
           });
           
       </script>
       <script>
          $('.ct-menu-toggle').click(function (e) { 
            e.preventDefault();
       
            $(this).toggleClass('toggle-open');
            $(this).parent().find('.sub-menu').toggleClass('submenu-open');
           
            console.log(123);
           });
           
         
       </script>
   </body>
</html>