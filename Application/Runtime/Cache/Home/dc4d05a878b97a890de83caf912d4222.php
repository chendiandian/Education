<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Bootply" />
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
  <title>登录</title>
  <link rel="stylesheet" type="text/css" href="/Education/Public/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/Education/Public/css/global.css" />
  <link rel="stylesheet" type="text/css" href="/Education/Public/css/signin.css" />

  <script type="text/javascript" src="/Education/Public/js/jquery.min.js"></script>
  <script type="text/javascript" src="/Education/Public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/Education/Public/js/jquery.validate.min.js"></script>
  <link rel="icon" type="image/png" href="images/favicon.ico" />
  <!--[if lte IE 9]>
  <script type="text/javascript" src="/Education/Public/js/jquery.placeholder.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
  <script type="text/javascript" src="/Education/Public/js/html5shiv.min.js"></script>
  <script type="text/javascript" src="/Education/Public/js/respond.min.js"></script>
  <script type="text/javascript" src="/Education/Public/js/html5boilerplate.js"></script>
  <![endif]-->
  <style>
      html { height: 100% }
  </style>
</head>
<body style="height: 100%;">

<div class="signin">
  <div class="signin-header">
    <div class="signin-container">
      <div class="pull-left">
        <a href="<?php echo U('Index/index');?>" class="signin-logo">开课吧</a>
        <div class="text">登录开课吧账号</div>
      </div>
      <div class="pull-right">
        
            没有帐号，<a class="color-lnk" href="<?php echo U('Index/reg');?>">免费注册</a>
        
      </div>
    </div>
  </div><!-- /.sigin-header -->
  <div class="signin-body">
    <div class="signin-container text-center">
      <h1>登&nbsp;&nbsp;&nbsp;录</h1>
      

<style>
    .dropdown-menu > li > a {
        text-align: left;
    }
</style>

<form role="form" method="post" action="login" class="form-horizontal signin-form" role="form" id="login-form">
  

  <div class="form-group">
    <label for="username" class="col-xs-2 control-label">账号</label>
    <div class="col-xs-10">
      <div class="form-icon">
        <span class="signin-icon signin-user"></span>
      </div>
      <input name="username" type="text" class="form-control" tabindex="1" accesskey="u" id="username" placeholder="用户名/邮箱/手机号" autocomplete="off" maxlength="50" required="required">
      <div class="help-block"><span class="signin-icon signin-info"></span>用户名、邮箱或手机号</div>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="left: 15px;">
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@sina.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@163.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@qq.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@126.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@sina.cn"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@hotmail.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@gmail.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@sohu.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@139.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@wo.com.cn"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@189.com"></a>
        </li>
        <li role="presentation">
          <a role="menuitem" tabindex="-1" href="#" format="@21cn.com"></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="form-group">
    <label for="password" class="col-xs-2 control-label" for="password">密码</label>
    <div class="col-xs-10">
      <div class="form-icon">
        <span class="signin-icon signin-pwd"></span>
      </div>
      <input name="password" type="password" class="form-control" id="password" tabindex="2" autocomplete="off" placeholder="请输入密码" maxlength="16" required="required">
      <div class="help-block"><span class="signin-icon signin-info"></span>6-16位数字、字母或字符的组合</div>
    </div>
  </div>
  <!--<div class="form-group">-->
  <!--<label for="text" class="col-xs-2 control-label">验证码</label>-->
  <!--<div class="col-xs-5">-->
  <!--<input type="text" class="form-control verification-code" name="captcha" maxLength="6" placeholder="验证码">-->
  <!--<div class="help-block"><span class="signin-icon signin-info"></span>请输入验证码</div>-->
  <!--</div>-->
  <!--<div class="col-xs-5">-->
  <!--<div class="verification-blk">-->
  <!--<img src="images/code.jpg" alt="验证码">-->
  <!--<a href="#" class="color-lnk">换一换</a>-->
  <!--</div>-->
  <!--</div>-->
  <!--</div>-->
  <div class="signin-helper row">
    <div class="col-xs-5 col-xs-offset-2 text-left">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember_me" value="remember" checked="checked">7天内自动登录
        </label>
      </div>
    </div>
    <div class="col-xs-5 text-right">
      
          <a href="forget.html" class="forget-pwd-lnk color-lnk">忘记密码？</a>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-10 col-xs-offset-2">
      <input type="hidden" id="lt" name="lt" value="LT-1428624317rs0wBPrGW-5N5dU7C7B" />
      <input type="hidden" id="service" name="service" value="http:&#x2F;&#x2F;www.kaikeba.com&#x2F;users&#x2F;service" />
      <input type="submit" id="login-submit" class="btn btn-warning btn-block" value="登录">
    </div>
  </div>
  <div class="text-right">
    
        没有帐号，<a class="color-lnk" href="<?php echo U('Index/reg');?>">免费注册</a>
    
  </div>
</form>
<script type="text/javascript">
    $(function(){
        $('#login-form').validate({
            errorClass: "has-error help-block",
            validClass: "has-success help-block",
            errorElement: "div",
            onkeyup: function(element) {
                this.element(element);
            },
            ignore: "",
            rules: {
                "username": { required: true, username_email_mobile: true },
                "password": { required: true, minlength: 6 }
            },
            messages: {
                username: '<span class="signin-icon signin-alert"></span>请输入用户名、邮箱或手机号',
                password: '<span class="signin-icon signin-alert"></span>6-16位数字、字母或字符的组合',
                captcha: '<span class="signin-icon signin-alert"></span>验证码不正确'
            },
            onfocusout: function(element) {
                this.element(element);
            },
            errorPlacement: function(error, element) {
                element.siblings('.help-block').replaceWith(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).siblings('.help-block').hide();
                $(element).closest('.form-group').addClass(validClass).removeClass(errorClass);
            },
            submitHandler: function(form) {
                $("#login-submit").attr("disabled", "disabled").val("请稍候...");
                form.submit();
                return true;
            }
        });


        //取消jquery.placeholder的a标签BUG
        $('.signin-form .form-group .dropdown-menu a[href="#"]').click(function(e){
            e.preventDefault();
        });

        // 关于邮箱手机输入框的各种效果
        function bindEmailEvent() {

            var timer = null;
            var $dropdown = $(".dropdown-menu");
            var $list = $dropdown.find("li");
            var $txtMailMobile = $("#username");

            // 列表点击
            $list.mousedown(function () {
                var text = $(this).find("a").html();
                $txtMailMobile.val(text).focus();
                $txtMailMobile.parent().addClass("status-success");
                setTimeout(function(){ hideDropDown(); }, 100)
            });

            // 手机号邮箱输入框前的小图标切换
            // 以及离开的时候验证码的切换
            $txtMailMobile.keyup(function (e) {
                letterKeyEvent(this, e.keyCode);
            }).blur(function(){
                setTimeout(function(){ hideDropDown(); }, 100)
            }).keydown(function (e) {   // keydown 中可以阻止上下键的默认行为
                var txt = $(this).val();
                // 如果提示下拉列表显示出来并且点击了上下键/回车键，做完键盘事件直接返回
                var index = txt.indexOf("@");
            if(index > -1){
                var code = e.keyCode;
                var flag = helpKeyEvent(code, $list, this);
                return flag;
            }
                return true;
            });


            // 邮件框中的字母键键盘事件
            function letterKeyEvent(obj, code) {

                var txt = $(obj).val();

                // 输入框前边的小图标更换
                if (isNum(txt) || txt == "") {  //
                    $(obj).removeClass("bg-mail");
                    hideDropDown();
                } else {  // 邮件
                    $(obj).addClass("bg-mail");

                    // 如果有@再显示 / 输入字母的时候再显示
                    var index = txt.indexOf("@");
                    if (index > -1) {
                        // 回车选中的时候不触发up事件
                        if (code == 13) {
                            return false;
                        }

                        var stuffix = txt.substring(index);
                        var prefix = txt.substring(0, index);
                        if (index == -1) {
                            prefix = txt;
                            stuffix = "@";
                        }

//                        clearTimeout(timer);
//                        timer = setTimeout(function () {
                            $list.hide();
                            var $result = $list.filter(":has(a[format^='" + stuffix + "'])");
                            if ($result.length == 0) {
                                hideDropDown();
                                return;
                            }
                            $result.each(function () {
                                var $a = $(this).find("a");
                                $a.html(prefix + $a.attr("format"));
                            }).show();
                            $dropdown.show();
//                        }, 100);
                    }
                }
            }

            // 邮件框中的功能键键盘事件
            function helpKeyEvent(code, $list, input) {
                var $result = $list.filter(":visible");
                var resultLen = $result.length;
                if (resultLen == 0) {
                    return true;
                }

                // 是否有激活的
                var $activeItem = $result.filter(".active").eq(0);
                var activeLen = $activeItem.length;
                var isActive = activeLen > 0;
                var activeIndex = getIndex($result, $activeItem);

                // 点击上下箭头，初始化都选中第一个
                if (code == 38) {  // ↑
                    if (!isActive) { 	// 没有激活的
                        $result.eq(0).addClass("active");
                    } else if (activeIndex > 0) { // 是激活的并且选中的不是最后一个
                        $list.removeClass("active");
                        $result.eq(activeIndex - 1).addClass("active");
                    }
                } else if (code == 40) { //↓
                    if (!isActive) { 	// 没有激活的
                        $result.eq(0).addClass("active");
                    } else if (activeIndex < resultLen - 1) { // 是激活的并且选中的不是最后一个
                        $list.removeClass("active");
                        $result.eq(activeIndex + 1).addClass("active");
                    }
                } else if (code == 13) { // 回车
                    if (isActive) {
                        $(input).val($activeItem.eq(0).find("a").html());
                        hideDropDown();
                    }
                } else {
                    return true;
                }
                return false;
            }

            // 取下标
            function getIndex(list, item) {
                var len = list.length;
                for (var i = 0; i < len; i++) {
                    if ($(list[i]).get(0) == $(item).get(0)) {
                        return i;
                    }
                }
                return -1;
            }

            // 隐藏下拉列表
            function hideDropDown() {
                $dropdown.hide();
                $list.removeClass("active");
            }

        }

        // 验证是否为数字
        function isNum(txt){
            return  /^\d+$/.test(txt);
        }
        bindEmailEvent();
    })
</script>



    </div>
  </div>
</div><script>
    (function() {
        function isMobile() {
            if (/iphone|nokia|sony|ericsson|mot|samsung|sgh|lg|philips|panasonic|alcatel|lenovo|cldc|midp|wap|mobile/ig.test(navigator.userAgent.toLowerCase())) {
                return true;
            } else {
                return false;
            }
        }

        if (isMobile()) {
            var tmpHtml = "<meta name='viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='/Education/Public/css/login_mobile.css'>";
            $("head").eq(0).append(tmpHtml);
        }
    })();

</script>
<!--[if lte IE 9]>
<script>
    $(function(){
        $('input').placeholder();
    })
</script>
<![endif]-->
<div class="copyright text-center" style="display: none;">
  <p>HJX版权所有&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;京ICP备13032407号</p>
  <p>Copyright © 2015, hhhhhjx.cn, All Rights Reserved</p>
</div>
</body>
</html>