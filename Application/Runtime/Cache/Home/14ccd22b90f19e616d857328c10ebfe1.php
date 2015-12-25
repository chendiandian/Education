<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

      <title>课程列表</title>
      <meta name="keywords" content="IT课程,公开课,在线教育,IT职业培训,云计算,大数据,互联网营销培训,网络课程,视频教程,编程开发,交互设计,互联网思维,幕课论坛,MOOC,视频课程,职场进修,慕课论坛,在线学习,学习平台,创业,物联网"/>
      <meta name="description" content="开课吧是关于云计算、大数据、互联网营销、交互设计、编程语言、移动设备等泛IT学科的在线课程，在线教育，职业培训平台。"/>



    <link data-turbolinks-track="true" href="/ThinkPHP3.2.3/Public/css/application-259d88b7df3d30d7eec66f46114169d9.css" media="all" rel="stylesheet" />
    <link data-turbolinks-track="true" href="/ThinkPHP3.2.3/Public/css/sign_in_modal-3160308d45c1acdf19162e7886744068.css" media="all" rel="stylesheet" />
    <link data-turbolinks-track="true" href="/ThinkPHP3.2.3/Public/css/gaoxiaobang-da3a2db2fecddd160bc3e3c4a3a3bc38.css" media="all" rel="stylesheet" />
    <script data-turbolinks-track="true" src="/ThinkPHP3.2.3/Public/js/application-fb8562c33e2e6c7d207653c10215fc91.js"></script>
    <meta content="authenticity_token" name="csrf-param" />
<meta content="HfyB28ni5Qj/hP5e8BrOFEnWbp74KJ0mHJ2R98WyF40=" name="csrf-token" />
	<link rel="apple-touch-icon" sizes="57x57" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/ThinkPHP3.2.3/Public/images/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/ThinkPHP3.2.3/Public/images/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/ThinkPHP3.2.3/Public/images/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/ThinkPHP3.2.3/Public/images/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/ThinkPHP3.2.3/Public/images/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/ThinkPHP3.2.3/Public/images/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <!--[if lt IE 9]>
    <script src="/ThinkPHP3.2.3/Public/js/html5shiv.min-f7427b1968f14d148d6c973339ec8bbb.js"></script>
<script src="/ThinkPHP3.2.3/Public/js/respond.min-497dcd05a34f78a0295d8ba4cc5008df.js"></script>
    <![endif]-->
    <!--[if lte IE 9]>
    <script src="/ThinkPHP3.2.3/Public/js/html5boilerplate-20c3bd30c07e9e58ea1042f1da27d6b7.js"></script>
<script src="/ThinkPHP3.2.3/Public/js/jquery.placeholder-f99209ea3cff0a13a5ec10e1e69b243f.js"></script>
    <![endif]-->
    <script>
      var webApiUrl = "http://w.api.kaikeba.com";
      var mmLearnUrl = "http://lms.kaikeba.com";
    </script>
  </head>
  <body>
  <!--<p class="notice"></p>-->
  <!--<p class="alert"></p>-->

    <div class="bg-gray login_home search clearfix">
  <header class="white-header" id="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="pull-left">
          <div class="logo">
            <a href="<?php echo U('Index');?>"><img alt="Logo color" data-at2x="/ThinkPHP3.2.3/Public/images/logo-color@2x.png" src="/ThinkPHP3.2.3/Public/images/logo-color.png" /></a>
            
          </div>
          <div class="dropdown">
            <a data-toggle="dropdown" href="course_list.html" class="btn btn-default">
              <span class="glyphicon glyphicon-align-justify"></span>
              课程
            </a>
            <div class="dropdown-menu course-catagory">
  <div class="catagory-links">
    <h6><span>发现课程</span></h6>
    <hr>
    <div class="row main-catagory">
      <div class="col-xs-4">
        <a href="/?discover=true">
          <span class="icon icon-selected-star"></span>
          &nbsp;&nbsp;发现课程
        </a>
      </div>
      <div class="col-xs-4">
        <a href="/courses?q%5Bs%5D=created_at+desc">
            <span class="icon icon-new"></span>
            &nbsp;&nbsp;最新课程
</a>      </div>
      <div class="col-xs-4">
        <!--<a href="/courses?q%5Bcertificate_type_eq%5D=enterprise">-->
            <!--<span class="icon icon-certificate-x"></span>-->
            <!--&nbsp;&nbsp;企业证书-->
        <!--</a>-->
      </div>
    </div>
    <h6><span>学科类别</span></h6>
    <hr>
    <div class="row sub-catagory">
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=26" title="移动开发">移动开发</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=1" title="云计算">云计算</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=2" title="互联网营销">互联网营销</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=3" title="交互设计">交互设计</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=7" title="编程开发">编程开发</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=6" title="大数据">大数据</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=8" title="创新创业">创新创业</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=12" title="办公软件">办公软件</a>
          </div>
          <div class="col-xs-3">
            <a href="/courses?q%5Bcategory_id_eq%5D=32" title="项目管理">项目管理</a>
          </div>
      <div class="col-xs-3">
        <a href="course_list.html">全部课程...</a>
      </div>
    </div>
  </div>
</div>
          </div>
          <div class="dropdown">
            <a href="#" class="btn btn btn-default">
              PHP
            </a>
          </div>
          <div class="dropdown">
            <a href="#" target="_blank" class="btn btn btn-white-border">
              C#
            </a>
          </div>
          <div class="dropdown">
            <a href="#" target="_blank" class="btn btn btn-white-border">
              ASP
            </a>
          </div>
          <div class="dropdown">
            <a href="#" target="_blank" class="btn btn btn-white-border">
              Java
            </a>
          </div>
        </div>
        <div class="pull-right header-link">
          <style type="text/css" media="screen">
.dowe-menu-course{ width:336px; background:#fff;border-radius: 4px;box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);}
.dowe-menu-course-title{ height:40px; padding-left:20px; color:#879099; font-size:14px; line-height:40px;}
.dowe-menu-course-list a{ display:block; height:65px; padding:0 20px; text-decoration:none;}
.dowe-menu-course-list a:hover{ background:#F4F4F4;}
.listtitle{color: #606366;font-size: 14px;}
.listtime{ color: #b6bec6;font-size: 12px;}
.dowe-menu-course-list a ul{padding-top: 10px; border-top: 1px #EDEFF0 solid;}
.dowe-menu-course-list a ul li.classtitle{color: #b2b6b9;line-height: 30px;font-size: 12px; height: 30px;overflow: hidden;}
</style>
    <span><a data-remote="true" href="login.html">登录</a></span>
    <!---->
        <!--<span></span>-->
    <!---->
        <span><a href="reg.html">注册</a></span>
    <!---->

<script>
  window.domain = 'kaikeba.com'
  var arrStr = document.cookie.split("; ");
  var access_token = null;
  for (var i=0; i < arrStr.length; i++) {
    if (arrStr[i].split("=")[0] === 'access_token') {
        access_token = unescape(arrStr[i].split("=")[1]);
    };
  };
  var kaikeba_lms_website = "http://lms.kaikeba.com";
  if (access_token) {
      $.ajax({
          url : "http://w.api.kaikeba.com"+'/learn_log/'+access_token+'?size=5&school_code='+(window.location.host.split(".").length==3?window.location.host.split(".")[0]:''),
          type : 'GET',
          contentType : 'application/json',
          success : function(back){
              if (back.data.length) {
                  var htmls = '<div class="dowe-menu-course-title">最近学习</div>';
                  for (var i=0; i < back.data.length; i++) {
                      var hlink =  back.data[i]["school_code"] ? 'http://class.'+back.data[i]["school_code"]+'.kaikeba.com' : kaikeba_lms_website;
                    htmls += '<div class="dowe-menu-course-list">'
                        +'<a href="'+hlink+back.data[i]["redirect_uri"]+'">'
                            +'<ul class="list-unstyled">'
                              +'<li>'
                                  +'<dl class="dl-horizontal" style="margin-bottom: 4px;">'
                                      +'<dt class="listtitle" style="text-align: left;">'+back.data[i]["course_name"]+'</dt>'
                                      +'<dd class="text-right listtime">'+back.data[i]["last_time_str"]+'学习</dd>'
                                    +'</dl>'
                              +'</li>'
                              +'<li class="classtitle">'+back.data[i]["context_title"]+'</li>'
                            +'</ul>'
                        +'</a>'
                    +'</div>';
                  };
                  $('#study_progression').html(htmls);
              } else {
                  var htmls = '<div class="dowe-menu-course-title">最近学习</div>';
                  htmls += '<div class="dowe-menu-course-list" style="color:#333;text-align:center;">还没开始学习，来一课吧！</div>';
                  $('#study_progression').html(htmls);
              }
          }
      });
  };
  $('#my_course').hover(function(){
        $('#study_progression').stop(true,true).show('fast');
    },function(){
        $('#study_progression').stop(true,true).hide('fast');
    });
</script>


          <span>|</span>
          <span><a href="#" class="open-header-search"><span class="glyphicon glyphicon-search"></span></a></span>
        </div>
        <div class="pull-right header-search">
          <form accept-charset="UTF-8" action="course_list.html" autocomplete="off" class="header-search-form form-inline" method="get" role="form"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /></div>
              <div class="form-group">
                <label for="header-search" class="sr-only">搜索</label>
                <!--<input type="search" class="form-control" id="header-search" name="q[name_or_instructors_name_or_institution_name_cont]" placeholder="输入关键字">-->
                <!--TODO instructors_name affect the amount of searched courses  -->
                <input type="search" class="form-control" id="header-search" name="q[name_or_institution_name_cont]" placeholder="输入关键字">
                <a href="#" class="close-header-search">&times;</a>
              </div>
</form>        </div>
      </div>
    </div>
  </div>
</header>
<div class="header-occupation"></div>
  <div class="container content search">
    <div class="row">
      <div class="col-xs-2">
        <div class="sidebar-nav">
  <div class="sidebar-nav-sub">
    <ul class="nav nav-stacked nav-pills">
      <li class=""><a href="/?discover=true">发现课程</a></li>

      <li class=""><a href="/courses?q%5Bs%5D=created_at+desc">最新课程</a></li>
      <!--<li class=""><a href="/courses?q%5Bcertificate_type_eq%5D=enterprise">联合颁发证书微专业</a></li>-->
    </ul>
  </div>
  <div class="sidebar-nav-sub">
    <ul class="nav nav-stacked nav-pills">
      <li class="false"><a href="course_list.html">全部</a></li>
          <li class=""><a href="/courses?cat_id=26&amp;q%5Bcategory_id_eq%5D=26">移动开发</a></li>
          <li class=""><a href="/courses?cat_id=1&amp;q%5Bcategory_id_eq%5D=1">云计算</a></li>
          <li class=""><a href="/courses?cat_id=2&amp;q%5Bcategory_id_eq%5D=2">互联网营销</a></li>
          <li class=""><a href="/courses?cat_id=3&amp;q%5Bcategory_id_eq%5D=3">交互设计</a></li>
          <li class=""><a href="/courses?cat_id=7&amp;q%5Bcategory_id_eq%5D=7">编程开发</a></li>
          <li class=""><a href="/courses?cat_id=6&amp;q%5Bcategory_id_eq%5D=6">大数据</a></li>
          <li class=""><a href="/courses?cat_id=8&amp;q%5Bcategory_id_eq%5D=8">创新创业</a></li>
          <li class=""><a href="/courses?cat_id=12&amp;q%5Bcategory_id_eq%5D=12">办公软件</a></li>
          <li class=""><a href="/courses?cat_id=32&amp;q%5Bcategory_id_eq%5D=32">项目管理</a></li>
    </ul>
  </div>
      <div class="ads">
        <a click_source="ads_banner" href="http://www.kaikeba.com/topics/C3" target="_blank" title="C3沙龙专区"><img alt="C3沙龙专区" class="img-responsive" src="/ThinkPHP3.2.3/Public/images/middle_middle_ibm-new.jpg" /></a>
      </div>
      <div class="ads">
        <a click_source="ads_banner" href="http://www.kaikeba.com/topics/1112ibm" target="_blank" title="IBM大数据与分析专区"><img alt="IBM大数据与分析专区" class="img-responsive" src="/ThinkPHP3.2.3/Public/images/middle_ibm-new.jpg" /></a>
      </div>
      <div class="ads">
        <a click_source="ads_banner" href="http://www.kaikeba.com/topics/startupcollege" target="_blank" title="创业微学院"><img alt="创业微学院" class="img-responsive" src="/ThinkPHP3.2.3/Public/images/middle____.jpg" /></a>
      </div>
  <div class="mobile-app">
    <a href="http://www.kaikeba.com/topics/mobile-app.html">
      <img src="/ThinkPHP3.2.3/Public/images/mobile_app_sm.png" class="img-responsive" alt="移动端APP">
    </a>
  </div>
</div>
      </div>
      <div class="col-xs-10">
        <div class="search-area">
  <div class="row">
    <div class="col-xs-4 col-lg-5">
      <div class="search-form">
        <form action="" method="GET" role="form">
          <div class="form-group">
            <label for="search" class="sr-only">search</label>
            <input type="search" class="form-control input-lg" id="search" placeholder="请输入要搜索的内容" name="q[name_or_institution_name_cont]" value="PHP">

            <p class="help-block text-right">共&nbsp;45&nbsp;条结果</p>
            <!--<p class="help-block text-right">共&nbsp;&nbsp;条结果</p>-->

          </div>
        </form>
      </div>
    </div>
    <div class="col-xs-8 col-lg-7">
      <div class="course-filter">
  <div class="filter-blk">
    <div class="dropdown">
      <p>排序：</p>
      <a data-toggle="dropdown" href="#" class="btn btn-filter btn-block">
            最新
        &nbsp;
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;q%5Bs%5D=created_at+desc">最新</a></li>
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;q%5Bs%5D=view_count+desc">热门趋势</a></li>
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;q%5Bs%5D=rating+desc">评价最高</a></li>
      </ul>
    </div>
  </div>

  <div class="filter-blk">
    <div class="dropdown">
      <p>公开/导学：</p>
      <a data-toggle="dropdown" href="#" class="btn btn-filter btn-block">
            全部
        &nbsp;
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP">全部</a></li>
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;q%5Btype_eq%5D=InstructiveCourse">导学课</a></li>
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;q%5Btype_eq%5D=OpenCourse">公开课</a></li>
      </ul>
    </div>
  </div>

  <div class="filter-blk">
    <div class="dropdown">
      <p>付费/免费：</p>
      <a data-toggle="dropdown" href="#" class="btn btn-filter btn-block">
            全部
        &nbsp;
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP">全部</a></li>
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;q%5Bpay_eq%5D=true">付费</a></li>
        <li><a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;q%5Bpay_eq%5D=false">免费</a></li>
      </ul>
    </div>
  </div>

</div>
    </div>
  </div>
</div>


        <div class="search-result">
              <div class="course-row-viewport">
                <ul class="list-unstyled course-row">
                      <li>
                        <style>
    .course-card .course-intro > p > em {
        color: transparent;
        -webkit-transition: color .4s ease-in-out .2s;
        -moz-transition: color .4s ease-in-out .2s;
        -ms-transition: color .4s ease-in-out .2s;
        -o-transition: color .4s ease-in-out .2s;
        transition: color .4s ease-in-out .2s;
    }

    .course-card:hover .course-intro > p > em {
        color: red;
    }
    .course-card h4 em {
        color: red;
    }
</style>
<a class="course-card thumbnail" href="<?php echo U('Index/course_detail');?>">
  <img alt="Normal              " class="img-responsive" src="/ThinkPHP3.2.3/Public/images/normal______________.png" style="min-height: 140px" />
  <div class="caption guide">
    <div class="float-blk">
          <h4>高级数据库管理</h4>

      <div class="price">
            <span class="priceless">免费</span>
      </div>



      <div class="course-info">
        <p><span class="label-course label-guide-course">导学课</span></p>
            <p><span class="icon icon-date"></span>&nbsp;暂无班次</p>
                <img alt="Badge" class="verified-badge pull-right" data-at2x="/assets//ThinkPHP3.2.3/Public/images/badge@2x.png" src="/ThinkPHP3.2.3/Public/images/badge.png" />
      </div>

      <div class="course-intro">
            <p>本课程主要介绍DB2的高级特性，需要读者有一定的数据库系统基础。</p>
      </div>
      <div class="course-review">
        <!--<span class="score">9.7分</span>-->
        <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
  </span>
  <span class="score">(9.7分)</span>
</span>


          <span class="count pull-right" data-toggle="tooltip" title="参与人数">
            <span class="icon icon-masses"></span>
            600
          </span>
      </div>
    </div>
  </div>
  <div class="course-favorite instructive_course_198_collection">
        <span class="glyphicon glyphicon-heart favorite-heart" data-course-id="198" data-school-id=""></span>

  </div>
</a>
                      </li>
                      <li>
                        <style>
    .course-card .course-intro > p > em {
        color: transparent;
        -webkit-transition: color .4s ease-in-out .2s;
        -moz-transition: color .4s ease-in-out .2s;
        -ms-transition: color .4s ease-in-out .2s;
        -o-transition: color .4s ease-in-out .2s;
        transition: color .4s ease-in-out .2s;
    }

    .course-card:hover .course-intro > p > em {
        color: red;
    }
    .course-card h4 em {
        color: red;
    }
</style>
<a class="course-card thumbnail" href="/courses/75">
  <img alt="Normal 1000086" class="img-responsive" src="/ThinkPHP3.2.3/Public/images/normal_1000086.png" style="min-height: 140px" />
  <div class="caption guide">
    <div class="float-blk">
          <h4>响应式Web设计</h4>

      <div class="price">
            <span class="value">￥ 99</span>
      </div>



      <div class="course-info">
        <p><span class="label-course label-guide-course">导学课</span></p>
            <p><span class="icon icon-date"></span>&nbsp;03月02日开课</p>
                <img alt="Badge" class="verified-badge pull-right" data-at2x="/assets//ThinkPHP3.2.3/Public/images/badge@2x.png" src="/ThinkPHP3.2.3/Public/images/badge.png" />
      </div>

      <div class="course-intro">
            <p>课程主要讲授响应式Web设计的原理和它的三个要素，包括流体窗格布局、媒体查询以及自适应的媒体内容。</p>
      </div>
      <div class="course-review">
        <!--<span class="score">8.2分</span>-->
        <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(8.2分)</span>
</span>


          <span class="count pull-right" data-toggle="tooltip" title="参与人数">
            <span class="icon icon-masses"></span>
            6641
          </span>
      </div>
    </div>
  </div>
  <div class="course-favorite instructive_course_75_collection">
        <span class="glyphicon glyphicon-heart favorite-heart" data-course-id="75" data-school-id=""></span>

  </div>
</a>
                      </li>
                      <li>
                        <style>
    .course-card .course-intro > p > em {
        color: transparent;
        -webkit-transition: color .4s ease-in-out .2s;
        -moz-transition: color .4s ease-in-out .2s;
        -ms-transition: color .4s ease-in-out .2s;
        -o-transition: color .4s ease-in-out .2s;
        transition: color .4s ease-in-out .2s;
    }

    .course-card:hover .course-intro > p > em {
        color: red;
    }
    .course-card h4 em {
        color: red;
    }
</style>
<a class="course-card thumbnail" href="/courses/44">
  <img alt="Normal swift  " class="img-responsive" src="/ThinkPHP3.2.3/Public/images/normal_swift__.png" style="min-height: 140px" />
  <div class="caption guide">
    <div class="float-blk">
          <h4>一小时学会SWIFT秒编2048</h4>

      <div class="price">
            <span class="priceless">免费</span>
      </div>



      <div class="course-info">
        <p><span class="label-course label-guide-course">导学课</span></p>
            <p><span class="icon icon-date"></span>&nbsp;暂无班次</p>
                <img alt="Badge" class="verified-badge pull-right" data-at2x="/assets//ThinkPHP3.2.3/Public/images/badge@2x.png" src="/ThinkPHP3.2.3/Public/images/badge.png" />
      </div>

      <div class="course-intro">
            <p>整个课程共分为十二讲，整个课程大致分为：入口界面、新建视图、绘制方格、闪现数字、控制重叠、辅助控制。</p>
      </div>
      <div class="course-review">
        <!--<span class="score">8.6分</span>-->
        <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-half-fill active"></span>
  </span>
  <span class="score">(8.6分)</span>
</span>


          <span class="count pull-right" data-toggle="tooltip" title="参与人数">
            <span class="icon icon-masses"></span>
            5290
          </span>
      </div>
    </div>
  </div>
  <div class="course-favorite instructive_course_44_collection">
        <span class="glyphicon glyphicon-heart favorite-heart" data-course-id="44" data-school-id=""></span>

  </div>
</a>
                      </li>
                      <li>
                        <style>
    .course-card .course-intro > p > em {
        color: transparent;
        -webkit-transition: color .4s ease-in-out .2s;
        -moz-transition: color .4s ease-in-out .2s;
        -ms-transition: color .4s ease-in-out .2s;
        -o-transition: color .4s ease-in-out .2s;
        transition: color .4s ease-in-out .2s;
    }

    .course-card:hover .course-intro > p > em {
        color: red;
    }
    .course-card h4 em {
        color: red;
    }
</style>
<a class="course-card thumbnail" href="/courses/307">
  <img alt="Normal         " class="img-responsive" src="/ThinkPHP3.2.3/Public/images/normal_________.png" style="min-height: 140px" />
  <div class="caption guide">
    <div class="float-blk">
          <h4>项目时间管理</h4>

      <div class="price">
            <span class="value">￥ 399</span>
      </div>



      <div class="course-info">
        <p><span class="label-course label-guide-course">导学课</span></p>
            <p><span class="icon icon-date"></span>&nbsp;04月01日开课</p>
                <img alt="Badge" class="verified-badge pull-right" data-at2x="/assets//ThinkPHP3.2.3/Public/images/badge@2x.png" src="/ThinkPHP3.2.3/Public/images/badge.png" />
      </div>

      <div class="course-intro">
            <p>目前网站提供支付宝付款，如需银行汇款，可咨询在线客服或拨打电话：010-57183953</p>
      </div>
      <div class="course-review">
        <!--<span class="score">10.0分</span>-->
        <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
  </span>
  <span class="score">(10分)</span>
</span>


          <span class="count pull-right" data-toggle="tooltip" title="参与人数">
            <span class="icon icon-masses"></span>
            718
          </span>
      </div>
    </div>
  </div>
  <div class="course-favorite instructive_course_307_collection">
        <span class="glyphicon glyphicon-heart favorite-heart" data-course-id="307" data-school-id=""></span>

  </div>
</a>
                      </li>
                </ul>
              </div>
        </div>
        <div class="pages text-center">
            <div class="pagination">
    <ul class="pagination">
    
    
        <li class="page active">
  <a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PHP&amp;utf8=%E2%9C%93">1</a>
</li>

        <li class="page">
  <a href="course_list.html?page=2&amp;q%5Bname_or_institution_name_cont%5D=PHP&amp;utf8=%E2%9C%93" rel="next">2</a>
</li>

        <li class="page">
  <a href="course_list.html?page=3&amp;q%5Bname_or_institution_name_cont%5D=PHP&amp;utf8=%E2%9C%93">3</a>
</li>

        <li class="page">
  <a href="course_list.html?page=4&amp;q%5Bname_or_institution_name_cont%5D=PHP&amp;utf8=%E2%9C%93">4</a>
</li>

    <li class="next_page">
  <a href="course_list.html?page=2&amp;q%5Bname_or_institution_name_cont%5D=PHP&amp;utf8=%E2%9C%93" rel="next">下一页</a>
</li>

    <li class="last next">
  <a href="course_list.html?page=4&amp;q%5Bname_or_institution_name_cont%5D=PHP&amp;utf8=%E2%9C%93">最后一页</a>
</li>

    </ul>
  </div>

        </div>
      </div>
    </div>
  </div>
</div>



<script src="/ThinkPHP3.2.3/Public/js/search-eb91564f053f04f52cd3482a53871224.js"></script>


        <footer class="footer" id="footer">
  <div class="links">
    <div class="container">
      <div class="row">
        <div class="col-xs-2">
          <div class="logo">
            <img src="/ThinkPHP3.2.3/Public/images/logo-white.png" alt="">
          </div>
        </div>
        <div class="col-xs-5">
          <div class="row">
            <div class="col-xs-3">
              <h5>关于我们</h5>
              <ul class="list-unstyled">
                <li><a href="about.html#advantage-anchor">我们的优势</a></li>
                <li><a href="about.html#news-anchor">资讯报道</a></li>
                <li><a href="about.html#joinus-anchor">加入我们</a></li>
                <li><a href="about.html#contact-anchor">联系我们</a></li>
              </ul>
            </div>
            <div class="col-xs-3">
              <h5>产品&amp;服务</h5>
              <ul class="list-unstyled">
                <li><a href="products.html#production_intro-anchor">产品介绍</a></li>
                <li><a href="products.html#institution_cooperate-anchor">校企合作</a></li>
                <li><a href="products.html#business_cooperate-anchor">商务合作</a></li>
              </ul>
            </div>
            <div class="col-xs-3">
              <h5>帮助中心</h5>
              <ul class="list-unstyled">
                <li><a href="help.html#common_question-anchor">常见问题</a></li>
                <li><a href="help.html#contact_customer-anchor">联系客服</a></li>
                <li><a href="help.html#user_agreement-anchor">服务协议</a></li>
                <li><a href="help.html#copyright_explain-anchor">隐私政策</a></li>
              </ul>
            </div>
            <div class="col-xs-3">
              <h5>优质资源</h5>
              <ul class="list-unstyled">
                <li><a href="/instructors">优秀讲师</a></li>
                <li><a href="course_list.html">全部课程</a></li>
                <li><a href="/good_resource#cooperate_platform">合作平台</a></li>
                <li><a href="/verifies">证书验证</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xs-4 pull-right social-media">
          <div class="row">
            <div class="col-xs-7">
              <a href="#" class="btn btn-lg btn-block btn-gflt" target="_blank">
                <span><img src="/ThinkPHP3.2.3/Public/images/gflt_logo.png" alt=""></span>
                &nbsp;&nbsp;官方论坛
              </a>
              <a href="http://weibo.com/2548739661" class="btn btn-lg btn-block btn-weibo" target="_blank">
                <span><img src="/ThinkPHP3.2.3/Public/images/weibo_logo.png" alt=""></span>
                &nbsp;&nbsp;立即关注
              </a>
              <a href="http://t.qq.com/Hjx_dy" class="btn btn-lg btn-block btn-douban" target="_blank">
                <span><img src="/ThinkPHP3.2.3/Public/images/douban_logo.png" alt=""></span>
                &nbsp;&nbsp;立即收听
              </a>
            </div>
            <div class="col-xs-5">
              <img src="/ThinkPHP3.2.3/Public/images/weixin-QR-footer.png" alt="" class="weixin-QR">
              <!--<a href=""><img src="/ThinkPHP3.2.3/Public/images/QQ_talk.png" alt=""></a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright text-center">
    <p>HJX版权所有&nbsp;&nbsp;&nbsp;<a href="https://tsm.miit.gov.cn/pages/Portal.aspx?uKey=ukey" target="_blank">京ICP证140465号</a>&nbsp;&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action" target="_blank">京ICP备13032407号-1</a>&nbsp;&nbsp;&nbsp;京公网安备 11010802013162</p>
    <p>公司地址：辽宁大连&nbsp;&nbsp;邮箱：hjx@hhhhhjx.cn</p>
  </div>
</footer>
<!-- Piwik -->


<!-- Google Code for &#27880;&#20876; Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 983566162;
    var google_conversion_language = "en";
    var google_conversion_format = "2";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "wTJBCL7Q9gcQ0o6A1QM";
    var google_remarketing_only = false;
    /* ]]> */
</script>
<div style="display: none;">
  <script type="text/javascript" src="/ThinkPHP3.2.3/Public/js/conversion.js">
  </script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/983566162/?label=wTJBCL7Q9gcQ0o6A1QM&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>

  <script type="text/javascript">
      $(document).ready(function(){
          var src_url = window.location.href;
          $("[click_source]").each(function(){
              var src_ele_value = $(this).attr("click_source");
              var tag_name = $(this).prop('tagName');
              if (tag_name == 'UL') {
                  $(this).find("a").each(function (index) {
                      $(this).click(function () {
                          var des_url = $(this).attr("href");
                          _paq.push(['setCustomVariable', '1', 'user_click', src_ele_value + '||' + index + '||' + src_url + '||' + des_url, 'page']);
                          _paq.push(['trackPageView']);
                      });
                  });
              }else if (tag_name == 'A') {
                  $(this).click(function () {
                      var des_url = $(this).attr("href");
                      _paq.push(['setCustomVariable', '1', 'user_click', src_ele_value + '||' + src_url + '||' + des_url, 'page']);
                      _paq.push(['trackPageView']);
                  });
              }else if (tag_name == 'INPUT'){
                  $(this).click(function () {
                      _paq.push(['setCustomVariable', '1', 'user_click', src_ele_value + '||' + src_url, 'page']);
                      _paq.push(['trackPageView']);
                  });
              }

          })
      });
  </script>
  <script src="/ThinkPHP3.2.3/Public/js/monitorView-2.0.js"></script>
  <noscript><p><img src="http://piwik.kaikeba.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>

  <!--<!-- ask Li,Wenchao adn Ren,Shiqi-->-->
  <!--<script type="text/javascript" src="http://tj.ranknowcn.com/tj/t.php?site=1101"></script>-->
</div>
<!-- End Piwik Code -->


<!--[if IE 8]>
<script>
    if(!!!$.cookie('ie8-bootstrap-warning')){
        $('body').prepend('<div class="alert alert-danger alert-dismissible fade in text-center" id="ie8-bootstrap-warning" style="border-color: #d84a36; background:#d84a36;color:white;position: absolute; z-index: 9999; width: 100%;" role="alert">'
                + '<button type="button" class="close" data-dismiss="alert" aria-label="关闭" style="position: absolute; right: 10px; margin-right: 0px;"><span aria-hidden="true">×</span></button>'
                + '使用IE8及以下版本可能会对你使用网站部分功能造成影响，请使用更高版本或者chrome浏览器'
                + '</div>');
        $('#ie8-bootstrap-warning').on('closed.bs.alert', function () {
            $.cookie('ie8-bootstrap-warning', 'true');
        })
    }
</script>
<![endif]-->

<!--[if lt IE 8]>
<script>
    if(!!!$.cookie('ie8-bootstrap-warning')){
        $('body').prepend('<div class="alert alert-danger alert-dismissible fade in text-center" id="ie8-bootstrap-warning" style="border-color: #d84a36; background:#d84a36;color:white;position: absolute; z-index: 9999; width: 100%;" role="alert">'
                + '<button type="button" class="close" data-dismiss="alert" aria-label="关闭" style="position: absolute; right: 10px; width: 100px; padding-right: 10px; height: 30px; margin-right: 0px;"><span aria-hidden="true">×</span></button>'
                + '使用IE8及以下版本可能会对你使用网站部分功能造成影响，请使用更高版本或者chrome浏览器'
                + '</div>');
        $('#ie8-bootstrap-warning').on('closed.bs.alert', function () {
            $.cookie('ie8-bootstrap-warning', 'true');
        })
    }
</script>
<![endif]-->





          <!--<a click_source="bugs_entrance" class="bugs-entrance" href="http://www.kaikeba.com/activities/christmas-newyear?qtm=christmas&amp;source=floating_window">-->
            <!--<span class="close-bugs-entrance"></span>-->
          <!--</a>-->
          <script>
//              $('.close-bugs-entrance').click(function(event) {
//                  event.preventDefault();
//                  event.stopPropagation();
//                  $(this).parent().remove();
//              });
          </script>

  </body>
</html>