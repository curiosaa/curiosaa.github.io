<?php ini_set('default_charset','UTF-8');header('Content-Type: text/html; charset=UTF-8'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Site Search Results</title>
<meta name="referrer" content="same-origin">
<meta name="viewport" content="width=960">
<style>.anim{visibility:hidden}</style>
<style>body{-webkit-text-size-adjust:none}@font-face{font-family:"Josefin Sans";src:url('css/JosefinSans-Regular.woff2') format('woff2'),url('css/JosefinSans-Regular.woff') format('woff');font-weight:400}@font-face{font-family:"Josefin Sans";src:url('css/JosefinSans-Italic.woff2') format('woff2'),url('css/JosefinSans-Italic.woff') format('woff');font-weight:400;font-style:italic}@font-face{font-family:"Josefin Sans";src:url('css/JosefinSans-Light.woff2') format('woff2'),url('css/JosefinSans-Light.woff') format('woff');font-weight:300}@font-face{font-family:"Josefin Sans Std Light";src:url('css/JosefinSansStd-Light.woff2') format('woff2'),url('css/JosefinSansStd-Light.woff') format('woff');font-weight:400}@font-face{font-family:"Josefin Sans";src:url('css/JosefinSans-SemiBold.woff2') format('woff2'),url('css/JosefinSans-SemiBold.woff') format('woff');font-weight:600}@font-face{font-family:"Josefin Sans";src:url('css/JosefinSans-Bold.woff2') format('woff2'),url('css/JosefinSans-Bold.woff') format('woff');font-weight:700}@font-face{font-family:"EB Garamond";src:url('css/EBGaramond-Regular.woff2') format('woff2'),url('css/EBGaramond-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p, span,h1,h2,h3,h4,h5,h6{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.whitespacefix{word-spacing:-1px}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0 0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=password],input[type=text],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal;border-radius:0}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }.menu-content{cursor:pointer;position:relative}li{-webkit-tap-highlight-color:rgba(0,0,0,0)}
@-webkit-keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0,100%,0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0)}}@keyframes fadeInUp{from{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:translate3d(0, 0, 0)}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}
.animated{-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}#b{background-color:#fff}.ps50{position:relative;margin-top:18px}.v17{display:block;*display:block;zoom:1;vertical-align:top}.s77{pointer-events:none;min-width:960px;width:960px;margin-left:auto;margin-right:auto}.v18{display:inline-block;*display:inline;zoom:1;vertical-align:top}.ps51{position:relative;margin-left:8px;margin-top:0}.s78{min-width:942px;width:942px;min-height:77px}.v19{display:inline-block;*display:inline;zoom:1;vertical-align:top;overflow:hidden}.ps52{position:relative;margin-left:0;margin-top:0}.s79{min-width:534px;width:534px;min-height:75px;height:75px}.c54{z-index:1;pointer-events:auto}.p14{padding-top:0;text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f25{font-family:"Josefin Sans";font-size:75px;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;color:#000;background-color:initial;line-height:75px;letter-spacing:normal;text-shadow:none}.v20{display:inline-block;*display:inline;zoom:1;vertical-align:top;overflow:visible}.ps53{position:relative;margin-left:16px;margin-top:45px}.s80{min-width:316px;width:316px;min-height:32px;height:32px}.c55{z-index:18;pointer-events:auto}.v21{display:inline-block;*display:inline-block;zoom:1;vertical-align:top}.m3{padding:0px 0px 0px 0px}.ml3{outline:0}.s81{min-width:89px;width:89px;min-height:32px;height:32px}.mcv3{display:inline-block}.s82{min-width:89px;width:89px;min-height:32px}.c56{pointer-events:none;border:0;background-color:#fff}.c57{pointer-events:auto}.f26{font-family:"Josefin Sans";font-size:25px;font-weight:400;font-style:italic;text-decoration:none;text-transform:none;color:#000;background-color:initial;line-height:28px;letter-spacing:normal;text-shadow:none}.s83{min-width:92px;width:92px;min-height:32px;height:32px}.s84{min-width:92px;width:92px;min-height:32px}.s85{min-width:135px;width:135px;min-height:32px;height:32px}.s86{min-width:135px;width:135px;min-height:32px}.v22{display:none;*display:none;zoom:1;vertical-align:top}.s87{min-width:101px;width:101px;min-height:114px;height:114px}.s88{min-width:101px;width:101px;min-height:38px;height:38px}.s89{min-width:101px;width:101px;min-height:38px}.ps54{position:relative;margin-left:0;margin-top:11px}.s90{min-width:101px;width:101px;min-height:16px;height:16px}.p15{padding-top:0;text-indent:0;padding-bottom:0;padding-right:0;text-align:center}.f27{font-family:"Josefin Sans";font-size:18px;font-weight:300;font-style:normal;text-decoration:none;text-transform:none;color:#000;background-color:initial;line-height:16px;letter-spacing:1.14px;text-shadow:none}.ps55{position:relative;margin-left:628px;margin-top:-71px}.s91{min-width:314px;width:314px;min-height:68px}.w3{line-height:0}.s92{min-width:314px;width:314px;min-height:32px}.c58{z-index:22;pointer-events:auto}.c59{pointer-events:none}.s93{min-width:227px;width:227px;min-height:32px;height:32px}.input3{border:1px solid #f6f6f6;background-color:#fff;width:227px;height:32px;font-family:"Helvetica Neue", sans-serif;font-size:12px;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;color:#000;line-height:14px;letter-spacing:normal;text-shadow:none;text-indent:0;padding-bottom:0;text-align:left;padding:4px}.ps56{position:relative;margin-left:11px;margin-top:1px}.s94{min-width:76px;width:76px;min-height:30px}.s95{width:76px;height:30px}.submit3{font-family:"Josefin Sans Std Light";font-size:19px;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;color:#000;line-height:19px;letter-spacing:normal;text-shadow:none;text-indent:0;text-align:center;border:0;background-color:#f6f6f6;padding-top:6px;padding-bottom:5px;padding-left:0;padding-right:0}.submit3:hover{background-color:#e6f1fa;border-color:#000;color:#000}.submit3:active{background-color:#52646f;border-color:#000;color:#fff}.ps57{position:relative;margin-left:241px;margin-top:8px}.s96{min-width:60px;width:60px;min-height:28px}.ps58{position:relative;margin-left:0;margin-top:1px}.s97{min-width:31px;width:31px;min-height:26px;height:26px}.a6{display:block;width:31px}.i19{position:absolute;left:2px;width:26px;height:26px;top:0}.ps59{position:relative;margin-left:3px;margin-top:0}.s98{min-width:26px;width:26px;min-height:28px;height:28px}.a7{display:block;width:26px}.i20{position:absolute;left:0;width:26px;height:26px;top:1px}.ps60{position:relative;margin-left:96px;margin-top:97px}.s99{min-width:768px;width:768px;min-height:1000px}.c60{z-index:5;border:0;background-color:#fff}.ps61{position:relative;margin-left:0;margin-top:8px}.s100{min-width:768px;width:768px;min-height:89px}.s101{min-width:752px;width:752px;min-height:32px;height:32px}.f28{font-family:"EB Garamond";font-size:15px;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;color:#000;background-color:initial;line-height:19px;letter-spacing:normal;text-shadow:none}.s102{min-width:742px;width:742px;min-height:57px;height:57px}.menu-device{background-color:rgb(0,0,0);display:none}</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-20200726235725.png">
<meta name="msapplication-TileImage" content="mstile-144x144-20200726235725.png">
<link rel="manifest" href="manifest.json" crossOrigin="use-credentials">
<link as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload" href="css/site.20200726235725.css">
<noscript><link rel="stylesheet" href="css/site.20200726235725.css"></noscript>
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/site.20200726235725-lteIE7.css" type="text/css">
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="css/site.20200726235725-lteIE8.css" type="text/css">
<![endif]-->
<!--[if gte IE 9]>
<link rel="stylesheet" href="css/site.20200726235725-gteIE9.css" type="text/css">
<![endif]-->
<script>!function(t){var e=!1;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){}if(!e)for(var n=t.document.getElementsByTagName("link"),a=0;a<n.length;a++){var o=n[a];"preload"===o.rel&&"style"===o.getAttribute("as")&&function(t){function e(){if(!t.getAttribute("data-l")){t.setAttribute("data-l",!0),t.addEventListener?t.removeEventListener("load",e):t.attachEvent&&t.detachEvent("onload",e),t.setAttribute("onload",null),t.media="all";var n=window.location.hash;n.length>1&&setTimeout(function(){var t=document.querySelectorAll('[name="'+n.slice(1)+'"]')[0],e=0;if(t.offsetParent)do{e+=t.offsetTop}while(t=t.offsetParent);window.scrollTo(0,e)},100)}}t.addEventListener?t.addEventListener("load",e):t.attachEvent&&t.attachEvent("onload",e),setTimeout(function(){t.rel="stylesheet",t.media="nl x"}),setTimeout(e,3e3)}(o)}}(this);
</script>
</head>
<body id="b">
<?php

    function find($searchText, $searchFor) {
        return (extension_loaded('mbstring') ? mb_stripos($searchText, $searchFor) : stripos($searchText, $searchFor));
    }

    $page = 0;
    $start_page = 0;
    $end_page = -1;
    $searchResults = array();
    if(isset($_GET['search'])) {
        $mb = extension_loaded('mbstring');
        $results_per_page = 10;
        $pages = 10;
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        if($page < 0) {
            $page = 0;
        }
        $start_page = $page - $pages / 2;
        if($start_page < 1) {
            $start_page = 1;
        }
        $current_page = 1;
        $current_result = 0;
        $end_page = $page + $pages / 2 - 1;

        $searchFor = $_GET['search'];
        $searchJSON = file_get_contents('search.json');
        $searchPages = json_decode($searchJSON, TRUE);
        foreach($searchPages as $searchPage) {
            foreach($searchPage['texts'] as $searchText) {
                $pos = find($searchText, $searchFor);
                if(($pos = find($searchText, $searchFor)) !== FALSE) {
                    if($current_page == $page) {
                        $len = 300;
                        $pos -= $len / 2;
                        if($pos > 0) {
                            $text = "&hellip;";
                        }
                        else {
                            $pos = 0;
                            $text = '';
                        }
                        $end = FALSE;
                        if($pos + $len > ($searchTextLength = strlen($searchText))) {
                            $len = $searchTextLength - $pos;
                            $end = TRUE;
                        }
                        $text .= htmlentities($mb ? mb_substr($searchText, $pos, $len) : substr($searchText, $pos, $len));
                        if($end === FALSE) {
                            $text .= "&hellip;";
                        }
                        $searchResults[] = array('link' => $searchPage['link'], 'title' => htmlentities($searchPage['title']), 'text' => $text);
                    }
                    if(++$current_result == $results_per_page) {
                        $current_result = 0;
                        ++$current_page;
                    }
                    break;
                }
            }
            if($current_page > $end_page) {
                break;
            }
        }
        $end_page = $current_page;
    }
?>

<div class="ps50 v17 s77">
<div class="v18 ps51 s78 c53">
<div class="v19 ps52 s79 c54">
<h1 class="p14 f25"><a href="./">curiosa</a></h1>
</div>
<div class="v20 ps53 s80 c55">
<ul class="menu-dropdown v21 ps52 s80 m3" id="m1">
<li class="v18 ps52 s81 mit3">
<a href="./" class="ml3"><div class="menu-content mcv3"><div class="v18 ps52 s82 c56"><div class="v19 ps52 s81 c57"><p class="p14 f26">home</p></div></div></div></a>
</li>
<li class="v18 ps52 s83 mit3">
<a href="#" class="ml3"><div class="menu-content mcv3"><div class="v18 ps52 s84 c56"><div class="v19 ps52 s83 c57"><p class="p14 f26">about</p></div></div></div></a>
</li>
<li class="v18 ps52 s85 mit3">
<div class="menu-content mcv3">
<div class="v18 ps52 s86 c56">
<div class="v19 ps52 s85 c57">
<p class="p14 f26">categories</p>
</div>
</div>
</div>
<ul class="menu-dropdown-1 v22 ps52 s87 m3">
<li class="v18 ps52 s88 mit3">
<a href="beauty.html" class="ml3"><div class="menu-content mcv3"><div class="v18 ps52 s89 c56"><div class="v19 ps54 s90 c57"><p class="p15 f27">beauty</p></div></div></div></a>
</li>
<li class="v18 ps52 s88 mit3">
<a href="#" class="ml3"><div class="menu-content mcv3"><div class="v18 ps52 s89 c56"><div class="v19 ps54 s90 c57"><p class="p15 f27">tech</p></div></div></div></a>
</li>
<li class="v18 ps52 s88 mit3">
<a href="#" class="ml3"><div class="menu-content mcv3"><div class="v18 ps52 s89 c56"><div class="v19 ps54 s90 c57"><p class="p15 f27">travel</p></div></div></div></a>
</li>
</ul>
</li>
</ul>
</div>
<div class="v18 ps55 s91 w3">
<div class="anim fadeInUp js19 v18 ps52 s92 c58">
<form method="GET" action="search.php" class="v18 ps52 s92">
<div class="v18 ps52 s92 c59">
<div class="v18 ps52 s93 c57">
<input type="text" name="search" required class="input3">
</div>
<div class="v18 ps56 s94 c57">
<input type="submit" value="search" name="" class="js18 s95 submit3">
</div>
</div>
</form>
</div>
<div class="v18 ps57 s96 c53">
<div class="v18 ps58 s97 c57">
<a href="https://instagram.com/cu.rio.sa" class="a6"><img src="images/instagram.svg" alt="Instagram @cu.rio.sa" class="i19 js20"></a>
</div>
<div class="v18 ps59 s98 c57">
<a href="https://twitter.com/" class="a7"><img src="images/twitter.svg" alt="Twitter @" class="i20 js21"></a>
</div>
</div>
</div>
</div>
<div class="v18 ps60 s99 c60">
<?php

    if(count($searchResults) == 0) {
        $result = '<div class="v18 ps61 s100 c57"><div class="v19 ps51 s101 c53"><p class="p14 f28">{title}</p></div><div class="v19 ps51 s102 c53"><p class="p14 f28">{text}</p></div></div>';
        $result = str_replace('{title}', htmlentities('No search result'), $result);
        $result = str_replace('{text}', '', $result);
        echo $result;
    }
    else {
        $searchFor = htmlentities($searchFor);
        $hlPre = '';
        $hlPost = '';
        foreach($searchResults as $searchResult) {
            $result = '<div class="v18 ps61 s100 c57"><div class="v19 ps51 s101 c53"><p class="p14 f28">{title}</p></div><div class="v19 ps51 s102 c53"><p class="p14 f28">{text}</p></div></div>';
            $result = str_replace('{title}', '<a href="' . $searchResult['link'] . '">' . $searchResult['title'] . '</a>', $result);
            $text = $searchResult['text'];
            if(strlen($hlPre)) {
                $text = preg_replace("/(" . $searchFor . ")/i", "{$hlPre}$1{$hlPost}", $text);
            }
            $result = str_replace('{text}', $text, $result);
            echo $result;
        }
   }

?>

</div>
<div class="v ps48 s74 c8">
<div class="ps47">
<?php

    $control = '<div class="v ps6 s75 c41" style="display:none"><a href="#" class="f24 btn v16 s76">&lt;&lt;</a></div>';
    if($page > 1) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page - 1);
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c42" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 1, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c43" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 2 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 2, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c44" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 3 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 3, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c45" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 4 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 4, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c46" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 5 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 5, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c47" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 6 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 6, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c48" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 7 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 7, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c49" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 8 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 8, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c50" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 9 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 9, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c51" style="display:none"><a href="#" class="f24 btn v16 s76">{page_num}</a></div>';
    $buttonPage = $start_page + 10 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #f6f6f6; color: #fff; border-color: #1e208e"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"' . $style, $control);
        }
        $control = str_replace('{page_num}', 10, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v ps49 s75 c52" style="display:none"><a href="#" class="f24 btn v16 s76">&gt;&gt;</a></div>';
    if($page < $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page + 1);
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
    }
    echo $control;

?>

</div>
</div>
</div>
<script>!function(){var s=["js/jquery.js","js/jqueryui.js","js/h5validate.js","js/woolite.js","js/menu.js","js/menu-dropdown-animations.min.js","js/menu-dropdown.20200726235725.js","js/menu-dropdown-1.20200726235725.js","js/search.20200726235725.js"],n={},j=0,e=function(e){var o=new XMLHttpRequest;o.open("GET",s[e],!0),o.onload=function(){if(n[e]=o.responseText,9==++j)for(var t in s){var i=document.createElement("script");i.textContent=n[t],document.body.appendChild(i)}},o.send()};for(var o in s)e(o)}();
</script>
<script type="text/javascript">
var ver=RegExp(/Mozilla\/5\.0 \(Linux; .; Android ([\d.]+)/).exec(navigator.userAgent);if(ver&&parseFloat(ver[1])<5){document.getElementsByTagName('body')[0].className+=' whitespacefix';}
</script>
</body>
</html>