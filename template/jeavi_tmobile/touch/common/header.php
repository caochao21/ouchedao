<?php echo 'Jeavidesign';exit;?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="{if $_G['setting']['mobile'][mobilecachetime] > 0}{$_G['setting']['mobile'][mobilecachetime]}{else}no-cache{/if}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="{if !empty($metakeywords)}{echo dhtmlspecialchars($metakeywords)}{/if}" />
<meta name="description" content="{if !empty($metadescription)}{echo dhtmlspecialchars($metadescription)} {/if},$_G['setting']['bbname']" />
<title><!--{if !empty($navtitle)}-->$navtitle -<!--{/if}--><!--{if empty($nobbname)}-->$_G['setting']['bbname'] -<!--{/if}-->{lang waptitle} - Powered by Discuz!</title>
<link rel="stylesheet" href="$_G['style'][styleimgdir]/style.css" type="text/css" media="all">
<script src="{STATICURL}js/mobile/jquery-1.8.3.min.js?{VERHASH}"></script>
<script type="text/javascript">var STYLEID = '{STYLEID}', STATICURL = '{STATICURL}', IMGDIR = '{IMGDIR}', VERHASH = '{VERHASH}', charset = '{CHARSET}', discuz_uid = '$_G[uid]', cookiepre = '{$_G[config][cookie][cookiepre]}', cookiedomain = '{$_G[config][cookie][cookiedomain]}', cookiepath = '{$_G[config][cookie][cookiepath]}', showusercard = '{$_G[setting][showusercard]}', attackevasive = '{$_G[config][security][attackevasive]}', disallowfloat = '{$_G[setting][disallowfloat]}', creditnotice = '<!--{if $_G['setting']['creditnotice']}-->$_G['setting']['creditnames']<!--{/if}-->', defaultstyle = '$_G[style][defaultextstyle]', REPORTURL = '$_G[currenturl_encode]', SITEURL = '$_G[siteurl]', JSPATH = '$_G[setting][jspath]';</script>
<link rel="stylesheet" type="text/css" href="$_G['style'][styleimgdir]/menu_topside.css" />
<script src="$_G['style'][styleimgdir]/js/common.js?{VERHASH}" charset="{CHARSET}"></script>
<style>
.header, .header .nav {
background:$_G['style']['headerbgcolor'];
	color: #333;
}
.header h2, .header .tit {
}
.btn_login .pn, .btn_register .pn, .blue_btn, #uhd, .button, .pn.pnc, .index_sub, .qianglou a, .view_reply, .guide_hd, .guide_nav .a i, .sub_forum li .num, .menu-footer .on i, .btn_pn_blue, .top-btn li i {
background-color:$_G['style']['allcol'];
}

.menu-wrap a {
color:$_G['style']['menutext'];
}
.menu-wrap a:visited, .menu-wrap a:hover {
color:$_G['style']['menuhovertext'];
}
.sidelist li a.a, .xld dt a, .buddy h4 a, .topnews li strong, .slnav a.a, .tbmu .a, .menu-footer .on em {
color:$_G['style']['allcol'];
}
.view_reply::before {
border-top: 3px solid $_G['style']['allcol'];
}
.forumdisplay-nav {
	height: 49px;
	position: relative;
}
.forumdisplay-post {
	position: absolute;
	left: 50%;
	height: 50px;
	width: 50px;
	margin: 0 auto;
	margin-top: -10px;
	margin-left: -25px;
	border-radius: 50%;
	background-color: #f9f9f9;
	z-index: 1;
}
.forumdisplay-post img {
background-color: $_G['style']['allcol'];
	height: 40px;
	width: 40px;
	border-radius: 50%;
	margin: 5px;
}
.forumdisplay-hd {
	height: 90px;
	overflow: hidden;
	position: relative;
}
.uhdbg img {
 filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=26, MakeShadow=false);
	filter: blur(26px);
	-ms-filter: blur(26px);
	-moz-filter: blur(26px);
	-webkit-filter: blur(26px);
	width: 100%;
	margin-top: 0;
}
.forumdisplay-hd dl {
	position: absolute;
	top: 0;
	left: 0px;
	width: 100%;
	overflow: hidden;
	z-index: 1;
	padding: 15px;
	box-sizing: border-box;
}
.forumdisplay-hd dt {
	float: left;
	width: 60px;
	height: 60px;
	overflow: hidden;
	margin-right: 16px;
}
.forumdisplay-hd dt img {
	width: 60px;
	height: 60px;
	border-radius: 5px;
}
.forumdisplay-hd dd, .forumdisplay-hd dd a, .forumdisplay-hd dd p {
	color: #FFF;
	text-shadow: 0 1px 0px #282d31;
}
.forumdisplay-hd dd h1 {
	margin: 2px 0 10px 0;
	height: 24px;
	font-size: 18px;
	font-weight: normal;
	overflow: hidden;
}
</style>
<!--{if isset($_G[cookie][extstyle]) && strpos($_G[cookie][extstyle], TPLDIR) !== false}-->
<link rel="stylesheet" id="css_extstyle" type="text/css" href="$_G[cookie][extstyle]/style.css" />
<!--{/if}-->

</head>

<body class="bg">
<div id="upfile"></div>
<div class="container">
<nav class="menu-footer"> 
  
  <!--{if $_GET['mod'] === 'forumdisplay'}-->
  
  <div class="forumdisplay-nav"> <a href="forum.php?mod=post&action=newthread&fid=$_G[fid]" title="{lang send_threads}" class="forumdisplay-post"><img src="$_G['style'][styleimgdir]/img/post_icon.png" /></a>
    <div class="menu-y"> 
      <!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts'] || $subexists}--> 
      <span class="side_icon" id="open-rside"></span> 
      <!--{/if}--> 
    </div>
    <a href="{if $typeid}forum.php?mod=forumdisplay&fid=$_G['forum']['fup']{elseif $_GET[filter] === 'typeid' || $_GET[filter] === 'shortid'}forum.php?mod=forumdisplay&fid=$_G['fid']{else}forum.php?forumlist=1&mobile=2{/if}" class="menu-z"><img src="$_G['style'][styleimgdir]/img/icon_back.png" /></a> </div>
    
    
    
    <!--{elseif $_GET['mod'] === 'post'}-->
    
    
    <input type="submit" id="postsubmit" class="btn_pn <!--{if $_GET[action] == 'edit'}-->btn_pn_blue" disable="false"<!--{else}-->btn_pn_grey" disable="true"<!--{/if}--> name="{if $_GET[action] == 'newthread'}发布{elseif $_GET[action] == 'reply'}replysubmit{elseif $_GET[action] == 'edit'}编辑{/if}" value="<!--{if $_GET[action] == 'newthread'}-->发布<!--{elseif $_GET[action] == 'reply'}-->{lang join_thread}<!--{elseif $_GET[action] == 'edit'}-->编辑<!--{/if}-->" />

   
  <!--{elseif $_GET['mod'] === 'viewthread'}-->
  
  <div class="page-view-vote"> 
    
    <!--{if ($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']}--> 
    <!--{if !empty($_G['setting']['recommendthread']['addtext'])}-->
    <div class="view-vote">
      <div class="up-box"> <a class="{if $_G['uid']}favbtn {/if}upclick" href="<!--{if !$_G['uid']}-->member.php?mod=logging&action=login&mobile=2<!--{else}-->forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}<!--{/if}-->" title="{lang maketoponce}"><span>赞</span> </a> </div>
    </div>
    
    <!--{/if}--> 
    <!--{if !empty($_G['setting']['recommendthread']['subtracttext'])}-->
    <div class="view-vote" style="display:none;">
      <div class="down-box"> <a class="favbtn" href="forum.php?mod=misc&action=recommend&do=subtract&tid=$_G[tid]&hash={FORMHASH}" title="{lang makebottomonce}"><span> {if $_G['forum_thread']['recommend_add']}$_G[forum_thread][recommend_add]{else}0{/if}
        
        {if $_G['forum_thread']['recommend_sub']}$_G[forum_thread][recommend_sub]{else}0{/if}</span></a> </div>
    </div>
    <!--{/if}--> 
    <!--{/if}-->
    
    <div class="view-vote">
      <div class="down-box"> <a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$_G[forum_firstpid]&page=$page"><span>回复</span></a> </div>
    </div>
    <div class="view-vote">
      <div class="favor-box"><a href="<!--{if !$_G['uid']}-->member.php?mod=logging&action=login&mobile=2<!--{else}-->home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]&mobile=2<!--{/if}-->" class="{if $_G['uid']}favbtn {/if}" title="{lang favorite}"><span>{lang favorite}</span></a></div>
    </div>
  </div>
  <div class="postplc cl" style="display:none;">
    <form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$_GET[extra]&replysubmit=yes&mobile=2">
      <input type="hidden" name="formhash" value="{FORMHASH}" />
      <div class="fastpost"> <a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$_G[forum_firstpid]&page=$page" class="z" style="height:30px;width:30px;margin-top:7px;background:url({STATICURL}image/mobile/images/icon_photo.png) no-repeat"><span class="none">{lang reply}</span></a>
        <input type="button" value="回复" class="button" name="replysubmit" id="fastpostsubmit" onclick="jQuery('.qianglou').css('display','none');">
        <div class="message">
          <textarea type="text" value="{lang send_reply_fast_tip}" class="input grey" color="gray" rows="1" name="message" id="fastpostmessage" placeholder="我也说一句"></textarea>
        </div>
      </div>
    </form>
  </div>
  
  <!--{else}-->
  
  <ul>
    <a href="forum.php?mod=misc&amp;action=nav" title="{lang send_threads}" class="forumdisplay-post"><img src="$_G['style'][styleimgdir]/img/post_icon.png" /></a>
    <li {if $_GET['mod'] === 'guide'}class="on"{/if}><a href="forum.php?mod=guide&view=newthread&mobile=2"><i style="background-image:url($_G['style'][styleimgdir]/img/footernav-guide.png)"></i><em>发现</em></a></li>
    
   
    
        <li {if $_G['forum']['picstyle']}class="on"{/if}><a href="forum.php?mod=forumdisplay&fid=43&mobile=2"><i style="background-image:url($_G['style'][styleimgdir]/img/footernav-pic.png)"></i><em>微游记</em></a></li>

     <li style="float:right;" {if $_G['basescript'] == 'portal'}class="on"{/if}>
    <a href="forum.php?mod=forumdisplay&fid=44&mobile=2"><i style="background-image:url($_G['style'][styleimgdir]/img/footernav-book.png)"></i><em>业内版</em></a>
    </li> 
    
    
    
    <li style="float:right;" {if $_G['basescript'] == 'home' || $_G['basescript'] == 'member'}class="on"{/if}>
    <a href="home.php?mod=space&uid=$_G['uid']&do=profile&mycenter=1&mobile=2"><i style="background-image:url($_G['style'][styleimgdir]/img/footernav-user.png)"></i> 
    <!--{if $_G['uid'] && $_G[member][newprompt] || $_G[member][newpm]}--> 
    <!--{if $_G[member][newprompt] || $_G[member][newpm]}--> 
    <!--{eval settype($_G[member][newprompt], 'integer');}--> 
    <!--{eval settype($_G[member][newpm], 'integer');}--> 
    <!--{eval $noticenum = $_G[member][newprompt] + $_G[member][newpm];}--> 
    <s class="bounce_s">{if $noticenum > 9}N{else}$noticenum{/if}</s> 
    <!--{/if}--> 
    <!--{/if}--> 
    <em>我的</em> </a>
    </li>
    
  </ul>
  
  <!--{/if}--> 
  
</nav>

<!--{if $_GET['do'] == 'notice' || $_GET['do'] == 'pm' || $_GET['ac'] == 'pm' }-->
<div class="rside-wrap"> 
  
  <!--{subtemplate home/space_prompt_nav}--> 
  
</div>
<!--{/if}--> 

<!--{if $_GET['mod'] === 'space' && $_GET['form'] === 'space'}-->
<div class="rside-wrap">
  <div class="sidelist cl">
    <ul>
      <li><a href="home.php?mod=space&uid=$space[uid]&do=profile&from=space"{if $do==profile} class="a"{/if}>关于TA</a> </li>
      <li><a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me&from=space"{if $do=='thread'} class="a"{/if}>主题</a> </li>
      <!--{if helper_access::check_module('blog')}-->
      <li><a href="home.php?mod=space&uid=$space[uid]&do=blog&view=me&from=space"{if $do=='blog'} class="a"{/if}>{lang blog}</a> </li>
      <!--{/if}--> 
      <!--{if helper_access::check_module('album')}-->
      <li><a href="home.php?mod=space&uid=$space[uid]&do=album&view=me&from=space"{if $do=='album'} class="a"{/if}>{lang album}</a> </li>
      <!--{/if}-->
      <li><a href="home.php?mod=space&uid=$space[uid]&do=home&view=me&from=space"{if $do=='home'} class="a"{/if}>动态</a> </li>
      <li><a href="portal.php">返回首页</a> </li>
    </ul>
  </div>
</div>
<!--{/if}-->

<div class="content-wrap">
<div class="content">

<!--{hook/global_header_mobile}--> 

