<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

      
            <title>课程 - 详情</title>
            <meta name="keywords" content="ppt教程,ppt制作技巧,ppt培训"/>
            <meta name="description" content="PPT免费课程视频，由讲师刘冬讲述了制作ppt技巧，制作ppt时如何选择模板、ppt目录页的制作、做好ppt还需要好图片等等。"/>




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
      var mmLearnUrl = "http://class.kaikeba.com";
    </script>
  </head>
  <body>
  <!--<p class="notice"></p>-->
  <!--<p class="alert"></p>-->

        

<script type="text/javascript">
//    document.domain = 'kaikeba.com';
</script>
<header class="black-header" id="header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="pull-left">
          <div class="logo">
            <a href="index.html"><img alt="Logo white sm" data-at2x="/assets//ThinkPHP3.2.3/Public/images/logo-white-sm@2x.png" src="/ThinkPHP3.2.3/Public/images/logo-white-sm.png" /></a>
            
          </div>
          <div class="dropdown">
            <a data-toggle="dropdown" href="#" class="btn btn-white-border">
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
            <a href="http://u.kaikeba.com" class="btn btn btn-white-border">
              高校邦
            </a>
          </div>
          <div class="dropdown">
            <a href="http://w.kaikeba.com" target="_blank" class="btn btn btn-white-border">
              微专业
            </a>
          </div>
          <div class="dropdown">
            <a href="/topics/startupcollege" target="_blank" class="btn btn btn-white-border">
              创业微学院
            </a>
          </div>
          <div class="dropdown">
            <a href="http://bbs.kaikeba.com" target="_blank" class="btn btn btn-white-border">
              论坛
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
    <span><a  href="<?php echo U('Index/login');?>">登录</a></span>
    <!---->
        <!--<span></span>-->
    <!---->
        <span><a href="<?php echo U('Index/reg');?>">注册</a></span>
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
  var kaikeba_lms_website = "http://class.kaikeba.com";
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

    <script>
        $(function()
           {
               $("a[href='reg.html']").attr('href', 'reg.html?landing_page_course_url=' + window.location.href );
               $("a[href$='/users/sign_up']").each(function(){$(this).attr('href', $(this).attr('href') + '?landing_page_course_url=' + window.location.href);});
               $("a[href^='/users/sign_up\?']").each(function(){$(this).attr('href', $(this).attr('href') + '&landing_page_course_url=' + window.location.href);});
           }
        )
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

<div class="open-class-black-bg">
  <div class="container ">
    <div class="open-class-breadcrumb">
      <ul class="breadcrumb">
        <li><a href="index.html">开课吧</a></li>
        <li><a href="/courses?q%5Bcategory_id_eq%5D=12">办公软件</a></li>
      </ul>
    </div>

    <div class="clearfix">
      <h1 class="pull-left open-class-h1">
        PPT武林绝杀技
      </h1>
      <div class="pull-right open-class-number">
        <span id="open_course_collections" style="display: inline-block;">
              <label class="favorite-heart">
      <a data-method="post" data-remote="true" href="/users/collections?collection%5Bcourse_id%5D=33&amp;collection%5Bschool_id%5D=" rel="nofollow">
          <span class="glyphicon glyphicon-heart"></span>
</a>      <label><a data-method="post" data-remote="true" href="/users/collections?collection%5Bcourse_id%5D=33&amp;collection%5Bschool_id%5D=" rel="nofollow"><span>收藏</span></a>
        <span>（3328）</span></label>
    </label>

        </span>
        <label class="play"><span>查看次数</span><span>（34.6万次）</span></label>
      </div>
    </div>
  </div>
</div>

<div class="open-class-black-tv">
          <iframe id="videoifr" src="http://player.youku.com/embed/XOTE1MjQ5MjA0" allowfullscreen width="100%" height="510" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" border="0" allowtransparency="true" style="display: inline;"></iframe>
          <span style="display: none" id="encrypted_superclass_id">24681928425f5a9133504de568f5f6df</span>
</div>
<div class="container open-class-main-btm">
  <div class="row">
    <div class="col-lg-9 col-xs-9 open-class-main-btm-left" id="open_evaluations">
      <div class="open-class-title">
  我的评价
</div>
<div class="open-class-message open-class-evaluate">
  <div id="evaluation_form">
        <div class="clearfix">
  <div class="star">
    课程评分
      <span id="rating_span_edit" class="star-fill star-fill-edit" data-num="">
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
      </span>
      <span class="score star-score-edit" id="rating_span">(0分)</span>
  </div>
</div>
<form accept-charset="UTF-8" action="/open_courses/33/evaluations" class="simple_form new_evaluation" data-remote="true" id="course_evaluation_form" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <div class="form-group hidden evaluation_course_id"><input class="hidden" id="evaluation_course_id" name="evaluation[course_id]" type="hidden" value="33" /></div>
    <div class="form-group hidden evaluation_rating"><input class="hidden" id="evaluation_rating" name="evaluation[rating]" type="hidden" value="0" /></div>
    <div class="form-group text optional evaluation_content"><textarea class="text optional form-control form-control" id="evaluation_content" maxlength="1000" name="evaluation[content]" placeholder="这个人很懒,没留下任何内容..." rows="5">
</textarea></div>
    <p class="help-block text-right">
      你还可以输入
      <span id="evaluation_content-word" class="word-num-counter">1000</span>
      字
    </p>
    <div class="text-right btm">
          <label class="text-primary"><a href="/users/sign_in">登录</a></label>
          后
      <input class="btn btn-blue" click_source="evaluation" disabled="disabled" id="evaluation-submit-btn" name="commit" type="submit" value="提交评价" />
    </div>
</form>
<script type="text/javascript">
    $(".star-fill-edit").starfive({hiddenId: $("#evaluation_rating")});
    $.textWords({desc:$("#evaluation_content"),words:$("#evaluation_content-word")});
    $('#evaluation-submit-btn').click(function(){
        if ($("#evaluation_rating").attr("value") == 0){
            alert("请为该课程评星");
            return false;
        }
    });
    $('.star-fill-edit').click(function(){
        $('#rating_span').show();
    });
    $('.star-fill-edit').mouseover(function(){
        $('#rating_span').show();
    });

    if(!$("#rating_span_edit").attr("data-num")){
        $('#rating_span').hide();
    }

</script>

  </div>
</div>
<hr style="border-color: #DFE2E6">
<div class="open-class-title">
  课程评价
  <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(8.4分)</span>
</span>


</div>
<div class="open-class-message open-class-eval-list">
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624899" width="50" />
            </div>
            <div class="cont">
              <div class="original">
                  <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(6分)</span>
</span>


                  <div class="name">
                    <strong>2233</strong>
                    <em>7 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        还可以，启发思路一下
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10494">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10494/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10494/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10494">
                    <div id="comment_count_evaluation_10494">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10494" id="new_comment_evaluation_10494">
          <div id="comment_count_evaluation_10494" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10494" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10494').click(function(){
      $('#pack_up_comment_evaluation_10494').hide();
      $('#new_comment_evaluation_10494').show();
      $('#comment_evaluation_10494').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10494"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10494">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Thumb ef39f3203bc60c515c34cb4c8797311b" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/thumb_ef39f3203bc60c515c34cb4c8797311b.jpg?time=1428624899" width="50" />
            </div>
            <div class="cont">
              <div class="original">
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


                  <div class="name">
                    <strong>ycfifth</strong>
                    <em>7 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        这个人很懒,没留下任何内容...
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10488">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10488/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10488/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10488">
                    <div id="comment_count_evaluation_10488">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10488" id="new_comment_evaluation_10488">
          <div id="comment_count_evaluation_10488" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10488" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10488').click(function(){
      $('#pack_up_comment_evaluation_10488').hide();
      $('#new_comment_evaluation_10488').show();
      $('#comment_evaluation_10488').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10488"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10488">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
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


                  <div class="name">
                    <strong>小天小</strong>
                    <em>7 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        赞，什么时候更新？
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10486">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10486/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10486/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10486">
                    <div id="comment_count_evaluation_10486">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10486" id="new_comment_evaluation_10486">
          <div id="comment_count_evaluation_10486" style="display: inline">
               回复(
        1
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10486" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10486').click(function(){
      $('#pack_up_comment_evaluation_10486').hide();
      $('#new_comment_evaluation_10486').show();
      $('#comment_evaluation_10486').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10486"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10486">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
                  <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(4分)</span>
</span>


                  <div class="name">
                    <strong>yhlbs1987</strong>
                    <em>9 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        看着不累，很不错哦！
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10441">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10441/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10441/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(1)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10441">
                    <div id="comment_count_evaluation_10441">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10441" id="new_comment_evaluation_10441">
          <div id="comment_count_evaluation_10441" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10441" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10441').click(function(){
      $('#pack_up_comment_evaluation_10441').hide();
      $('#new_comment_evaluation_10441').show();
      $('#comment_evaluation_10441').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10441"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10441">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
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


                  <div class="name">
                    <strong>墨痕淡香</strong>
                    <em>10 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        看在老师那么漂亮的份上给满分。
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10421">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10421/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10421/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10421">
                    <div id="comment_count_evaluation_10421">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10421" id="new_comment_evaluation_10421">
          <div id="comment_count_evaluation_10421" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10421" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10421').click(function(){
      $('#pack_up_comment_evaluation_10421').hide();
      $('#new_comment_evaluation_10421').show();
      $('#comment_evaluation_10421').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10421"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10421">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
                  <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(2分)</span>
</span>


                  <div class="name">
                    <strong>漫步淘金</strong>
                    <em>12 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        没实际内容，很花哨，都是概念性的讲述
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10406">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10406/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(1)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10406/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10406">
                    <div id="comment_count_evaluation_10406">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10406" id="new_comment_evaluation_10406">
          <div id="comment_count_evaluation_10406" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10406" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10406').click(function(){
      $('#pack_up_comment_evaluation_10406').hide();
      $('#new_comment_evaluation_10406').show();
      $('#comment_evaluation_10406').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10406"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10406">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
                  <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(8分)</span>
</span>


                  <div class="name">
                    <strong>jsssc</strong>
                    <em>14 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        于我的工作关系不大
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10394">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10394/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10394/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10394">
                    <div id="comment_count_evaluation_10394">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10394" id="new_comment_evaluation_10394">
          <div id="comment_count_evaluation_10394" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10394" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10394').click(function(){
      $('#pack_up_comment_evaluation_10394').hide();
      $('#new_comment_evaluation_10394').show();
      $('#comment_evaluation_10394').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10394"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10394">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Thumb 0d441de75945e5acbc865406fc9a2559" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/thumb_0d441de75945e5acbc865406fc9a2559.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
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


                  <div class="name">
                    <strong>天之姣子</strong>
                    <em>15 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        很实用~
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10386">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10386/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10386/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10386">
                    <div id="comment_count_evaluation_10386">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10386" id="new_comment_evaluation_10386">
          <div id="comment_count_evaluation_10386" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10386" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10386').click(function(){
      $('#pack_up_comment_evaluation_10386').hide();
      $('#new_comment_evaluation_10386').show();
      $('#comment_evaluation_10386').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10386"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10386">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
                  <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(4分)</span>
</span>


                  <div class="name">
                    <strong>shizhang08</strong>
                    <em>16 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        yiban
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10375">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10375/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10375/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10375">
                    <div id="comment_count_evaluation_10375">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10375" id="new_comment_evaluation_10375">
          <div id="comment_count_evaluation_10375" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10375" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10375').click(function(){
      $('#pack_up_comment_evaluation_10375').hide();
      $('#new_comment_evaluation_10375').show();
      $('#comment_evaluation_10375').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10375"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10375">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
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


                  <div class="name">
                    <strong>town</strong>
                    <em>17 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        很好 顶
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10352">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10352/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10352/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10352">
                    <div id="comment_count_evaluation_10352">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10352" id="new_comment_evaluation_10352">
          <div id="comment_count_evaluation_10352" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10352" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10352').click(function(){
      $('#pack_up_comment_evaluation_10352').hide();
      $('#new_comment_evaluation_10352').show();
      $('#comment_evaluation_10352').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10352"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10352">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
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


                  <div class="name">
                    <strong>白木木</strong>
                    <em>20 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        对我等菜鸟有用喔
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10329">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10329/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10329/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10329">
                    <div id="comment_count_evaluation_10329">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10329" id="new_comment_evaluation_10329">
          <div id="comment_count_evaluation_10329" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10329" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10329').click(function(){
      $('#pack_up_comment_evaluation_10329').hide();
      $('#new_comment_evaluation_10329').show();
      $('#comment_evaluation_10329').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10329"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10329">

              </div>
              <!--回复表单-->
            </div>
          </div>
          <div class="item clearfix">
            <div class="pic">
              <img alt="Avatar" class="pull-left pic" height="50" src="/ThinkPHP3.2.3/Public/images/avatar.png?time=1428624900" width="50" />
            </div>
            <div class="cont">
              <div class="original">
                  <span class="star">
  <span class="star-fill">
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill active"></span>
        <span class="icon icon-star-fill"></span>
        <span class="icon icon-star-fill"></span>
  </span>
  <span class="score">(6分)</span>
</span>


                  <div class="name">
                    <strong>M00N</strong>
                    <em>29 天前</em>
                  </div>
                  <div class="mess break-paragraph">
                        =_=
                  </div>
                  <div class="atti" id="useful_or_useless_evaluation_10272">
                        <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10272/useful" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-up"></span>
          <em>有用(0)</em>
</a>
    </label>
    <label>
      <a data-method="post" data-remote="true" href="course_detail.html/evaluations/10272/useless" rel="nofollow">
          <span class="glyphicon glyphicon-thumbs-down"></span>
          <em>没用(0)</em>
</a>    </label>

                  </div>
                  <div class="answer" id="answer_evaluation_10272">
                    <div id="comment_count_evaluation_10272">
                      <span>
  <a class="right" data-remote="true" href="/comments/new?evaluation_id=10272" id="new_comment_evaluation_10272">
          <div id="comment_count_evaluation_10272" style="display: inline">
               回复(
        0
    )
          </div>
</a>  <a id="pack_up_comment_evaluation_10272" href="javascript:void(0);" style="display: none" class="right">收起回复</a>
</span>
<script>
  $('#pack_up_comment_evaluation_10272').click(function(){
      $('#pack_up_comment_evaluation_10272').hide();
      $('#new_comment_evaluation_10272').show();
      $('#comment_evaluation_10272').hide();
      $(".open-class-eval-list .item .cont .answer .sari").hide();
  });
</script>
                    </div>
                    <em class="sari" id="em_evaluation_10272"></em>
                  </div>
             </div>
              <!--回复表单-->
              <div id="comment_evaluation_10272">

              </div>
              <!--回复表单-->
            </div>
          </div>
      <div class="text-center pagination-sm">
          <div class="pagination">
    <ul class="pagination pagination-sm">
    
    
        <li class="page active">
  <a data-remote="true" href="course_detail.html/evaluations?id=33">1</a>
</li>

        <li class="page">
  <a data-remote="true" href="course_detail.html/evaluations?id=33&amp;page=2" rel="next">2</a>
</li>

        <li class="page">
  <a data-remote="true" href="course_detail.html/evaluations?id=33&amp;page=3">3</a>
</li>

        <li class="page gap disabled"><a href="#" onclick="return false;">...</a></li>
    <li class="next_page">
  <a data-remote="true" href="course_detail.html/evaluations?id=33&amp;page=2" rel="next">&gt;</a>
</li>

    <li class="last next">
  <a data-remote="true" href="course_detail.html/evaluations?id=33&amp;page=116">&gt;&gt;</a>
</li>

    </ul>
  </div>

      </div>
</div>



<script>
    $(".star-fill-edit").starfive({hiddenId:$("#evaluation_rating")});
    $("#edit_open_course_evaluation").click(function(){
        $('#rating_span').show();
    });
</script>
    </div>
    <div class="col-lg-3 col-xs-3">
      <div class="open-class-title">
        PPT武林绝杀技
      </div>
      <div class="open-class-message open-class-person">
            <div class="price">
              <span class="price-label">课程价格：</span>
                  <span class="free">免费</span>
            </div>
            <div class="tag">
              <label>标签：</label>
                  <a href="<?php echo U('Index/course_teacher');?>">
                      <em>刘冬</em>
</a>                  <a href="course_list.html?q%5Bname_or_institution_name_cont%5D=PPT%E6%AD%A6%E6%9E%97%E7%BB%9D%E6%9D%80%E6%8A%80">
                      <em>PPT武林绝杀技</em>
</a>                  <a href="course_list.html?q%5Bname_or_institution_name_cont%5D=%E5%BC%80%E8%AF%BE%E5%90%A7%E5%87%BA%E5%93%81">
                      <em>开课吧出品</em>
</a>                  <a href="course_list.html?q%5Bname_or_institution_name_cont%5D=%E5%8A%9E%E5%85%AC%E8%BD%AF%E4%BB%B6">
                      <em>办公软件</em>
</a>                  <a href="course_list.html?q%5Bname_or_institution_name_cont%5D=%E6%B3%9BIT%E8%AF%BE%E7%A8%8B">
                      <em>泛IT课程</em>
</a>            </div>
            <div class="personal">
              <div class="clearfix">
                <div class="pic">
                  <a href="<?php echo U('Index/course_teacher');?>">
                      <img alt="06   " src="/ThinkPHP3.2.3/Public/images/06___.png" />
</a>                </div>
                <div class="name">
                  <a href="<?php echo U('Index/course_teacher');?>">
                      <strong>刘冬</strong>
</a>                  <div>慧科教育集团职业规划师</div>
                </div>
              </div>
              <div class="break-paragraph">
                美女HR，慧科教育集团职业规划师，是结合专业知识和相关资源，给予客户有关职业适应、发展等方面的咨询、辅导、判断和解决办法的专业人才。在多门公开课中，完美诠释了利用Office软件来完成工作中各种数据的处理和工作汇报等相关内容。
              </div>
            </div>
            <div class="sentence">
              <strong>
                美女HR教你绝杀技，工作汇报就这么简单。
              </strong>
              <div class="text-right">
                    ——刘冬
              </div>
            </div>
        <div class="break-paragraph">
          很多人在做工作汇报的时候，都会采用Office三大法宝里面的PPT，但是真正会用PPT的人很少，用好PPT的人就更少，能够使用PPT给你的工作汇报添姿添彩的就微乎其微了。
 
三步让大家构建好工作汇报的PPT，第一步，架构。架构是做好PPT的前提，首选我们要构思我们的内容结构和颜色搭配。第二步，设计。好的PPT不能没有设计，设计也是考验一个人的品位和美学素养。第三步，演练。光说不练可是傻把式。一个好的工作汇报也需要掌握一些小技巧，让PPT来帮你说话就更完美了。
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
    $(".star-fill-edit").starfive();

    /**
     * activate dotdotdot plug-in
     */
    $('.course-intro p').dotdotdot({
        watch: true
    });
    $('.course-card .float-blk > h4').dotdotdot({
        watch: true
    });

//    document.domain = 'kaikeba.com';

</script>





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
              <a href="http://bbs.kaikeba.com" class="btn btn-lg btn-block btn-gflt" target="_blank">
                <span><img src="/ThinkPHP3.2.3/Public/images/gflt_logo.png" alt=""></span>
                &nbsp;&nbsp;官方论坛
              </a>
              <a href="http://weibo.com/kaikeba" class="btn btn-lg btn-block btn-weibo" target="_blank">
                <span><img src="/ThinkPHP3.2.3/Public/images/weibo_logo.png" alt=""></span>
                &nbsp;&nbsp;立即关注
              </a>
              <a href="http://t.qq.com/kaikeba" class="btn btn-lg btn-block btn-douban" target="_blank">
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
    <p>公司地址：大连&nbsp;&nbsp;邮箱：hjx@hhhhhjx.cn</p>
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