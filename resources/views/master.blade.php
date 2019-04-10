<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/home/css/weui.css">
    <link rel="stylesheet" type="text/css" href="/home/css/book.css">
    <link rel="stylesheet" type="text/css" href="/home/css/swipe.css">
</head>
<body>

@yield('content')

<!-- tooltips -->
<div class="bk_toptips"><span></span></div>

<!--BEGIN actionSheet-->
<div id="actionSheet_wrap">
    <div class="weui_mask_transition" id="mask"></div>
    <div class="weui_actionsheet" id="weui_actionsheet">
        <div class="weui_actionsheet_menu">
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(1)">主页</div>
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(2)">书籍类别</div>
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(3)">购物车</div>
            <div class="weui_actionsheet_cell" onclick="onMenuItemClick(4)">我的订单</div>
        </div>
        <div class="weui_actionsheet_action">
            <div class="weui_actionsheet_cell" id="actionsheet_cancel">取消</div>
        </div>
    </div>
</div>

</body>
 <script src="/js/jquery-1.11.2.min.js"></script>
{{--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>--}}
<script src="/home/js/swipe.min.js" charset="utf-8"></script>
<script src="/home/js/book.js" charset="utf-8"></script>
{{--<script src="http://bucket.yinnote.com/book/book.min.js" charset="utf-8"></script>--}}

@yield('my-js')
</html>