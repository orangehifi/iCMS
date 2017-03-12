<?php /**
 * @package iCMS
 * @copyright 2007-2017, iDreamSoft
 * @license http://www.idreamsoft.com iDreamSoft
 * @author coolmoo <idreamsoft@qq.com>
 */
defined('iPHP') OR exit('What are you doing?');
admincp::head();
?>
<div class="iCMS-container">
  <div class="row-fluid">
    <div class="span12 center" style="text-align: center;">
      <ul class="quick-actions">
        <li><a href="javascript:;" class="tip" title="开发中..."><i class="icon-calendar"></i>日程管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=article"><i class="icon-survey"></i>文章管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=tags"><i class="icon-tag"></i>标签管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=spider&do=project"><i class="icon-download"></i>采集管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=user"><i class="icon-people"></i>用户管理</a></li>
        <li><a href="<?php echo __ADMINCP__; ?>=database&do=backup"><i class="icon-database"></i>数据库管理</a></li>
      </ul>
    </div>
  </div>
  <div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    欢迎使用iCMS内容管理系统！<strong><?php echo members::$data->username;?></strong>。您最后一次登陆时间:<strong><?php echo get_date(members::$data->lastlogintime,"Y-n-j H:i:s") ; ?></strong>，IP地址为:<strong><?php echo members::$data->lastip; ?></strong>。如有异常请及时排查！ </div>
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-signal"></i> </span>
      <h5>站点数据统计</h5>
    </div>
    <div class="widget-content">
      <div class="row-fluid">
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-sitemap"></i> <strong><?php echo $acc ; ?></strong> <small>文章栏目</small></li>
            <li><i class="fa fa-sitemap"></i> <strong><?php echo $tac ; ?></strong> <small>标签分类</small></li>
            <li><i class="fa fa-sitemap"></i> <strong><?php echo $pac ; ?></strong> <small>推送分类</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-user"></i> <strong><?php echo $uc ; ?></strong> <small>用户</small></li>
          </ul>
        </div>
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-file-text"></i> <strong><?php echo $ac ; ?></strong> <small>文章总数</small></li>
            <li><i class="fa fa-file"></i> <strong><?php echo $ac0 ; ?></strong> <small>草稿</small></li>
            <li><i class="fa fa-file-o"></i> <strong><?php echo $ac2 ; ?></strong> <small>回收站</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-tag"></i> <strong><?php echo $tc ; ?></strong> <small>标签</small></li>
          </ul>
        </div>
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-comment"></i> <strong><?php echo $ctc ; ?></strong> <small>评论</small></li>
            <li><i class="fa fa-paperclip"></i> <strong><?php echo $kc ; ?></strong> <small>内链</small></li>
            <li><i class="fa fa-thumb-tack"></i> <strong><?php echo $pc ; ?></strong> <small>推送</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-heart"></i> <strong><?php echo $lc ; ?></strong> <small>友链</small></li>
          </ul>
        </div>
        <div class="span3">
          <ul class="site-stats">
            <li><i class="fa fa-database"></i> <strong><?php echo iFS::sizeUnit($datasize+$indexsize) ; ?></strong> <small>数据库</small></li>
            <li><i class="fa fa-puzzle-piece"></i> <strong><?php echo count($iTable) ; ?></strong><small>iCMS表</small></li>
            <li><i class="fa fa-puzzle-piece"></i> <strong><?php echo count($oTable) ; ?></strong> <small>其它表</small></li>
            <li class="divider"></li>
            <li><i class="fa fa-files-o"></i> <strong><?php echo $fdc ; ?></strong> <small>文件</small></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-tachometer"></i> </span>
      <h5>系统信息</h5>
    </div>
    <div class="widget-content nopadding">
      <table class="table table-bordered table-striped">
        <tr>
          <td>当前程序版本</td>
          <td>iCMS <?php echo iCMS_VERSION ; ?>[<?php echo iCMS_RELEASE ; ?>]</td>
          <td>
            <a href="<?php echo __ADMINCP__;?>=patch&do=check&force=1&frame=iPHP" target="iPHP_FRAME" id="home_patch">最新版本</a>
            /
            <a href="<?php echo __ADMINCP__;?>=patch&do=git_check&git=true" data-toggle="modal" data-target="#iCMS-MODAL" data-meta="{&quot;width&quot;:&quot;85%&quot;,&quot;height&quot;:&quot;640px&quot;}" title="开发版信息">开发版</a>
          </td>
          <td>
            <span id="iCMS_RELEASE"><img src="./app/admincp/ui/img/ajax_loader.gif" width="16" height="16" align="absmiddle"></span>
            <span id="GIT_COMMIT_TIME" class="hide"><img src="./app/admincp/ui/img/ajax_loader.gif" width="16" height="16" align="absmiddle"></span>
          </td>
        </tr>
        <tr>
          <td>服务器操作系统</td>
          <td><?php $os = explode(" ", php_uname()); echo $os[0];?> &nbsp;内核版本：<?php if('/'==DIRECTORY_SEPARATOR){echo $os[2];}else{echo $os[1];} ?></td>
          <td>WEB服务器版本</td>
          <td><?php echo $_SERVER['SERVER_SOFTWARE'] ; ?></td>
        </tr>
        <tr>
          <td>服务器端口</td>
          <td><?php echo getenv(SERVER_PORT) ; ?></td>
          <td>服务器时间</td>
          <td><?php echo date("Y-m-d H:i:s"); ?></td>
        </tr>
        <tr>
          <td>服务器总空间</td>
          <td><?php
            $dt = round(@disk_total_space(".")/(1024*1024*1024),3);
            echo $dt?$dt:'∞'
           ?>G</td>
          <td>服务器剩余空间</td>
          <td><?php
            $df = round(@disk_free_space(".")/(1024*1024*1024),3);
            echo $df?$df:'∞'
           ?>G</td>
        </tr>
        <tr>
          <td>PHP版本</td>
          <td><?php echo PHP_VERSION ; ?></td>
          <td>PHP运行方式</td>
          <td><?php echo strtoupper(php_sapi_name());?></td>
        </tr>
        <tr>
          <td>脚本占用最大内存</td>
          <td><?php echo $this->show("memory_limit"); ?></td>
          <td>脚本上传文件大小限制</td>
          <td><?php echo $this->show("upload_max_filesize");?></td>
        </tr>
        <tr>
          <td>POST方法提交最大限制</td>
          <td><?php echo $this->show("post_max_size"); ?></td>
          <td>脚本超时时间</td>
          <td><?php echo $this->show("max_execution_time"); ?>秒</td>
        </tr>
        <tr>
          <td>MySQL 类库</td>
          <td><?php echo version_compare(PHP_VERSION,'5.5','>=')?'mysqli':'mysql';?></td>
          <td>MySQL 版本</td>
          <td><?php echo iDB::version() ; ?></td>
        </tr>
        <tr>
          <td>FTP支持：</td>
          <td><?php echo $this->isfun("ftp_login");?></td>
          <td>CURL支持：</td>
          <td><?php echo $this->isfun("curl_init");?></td>
        </tr>
        <tr>
          <td>GD库支持</td>
          <td><?php
            if(function_exists('gd_info')) {
                $gd_info = @gd_info();
              echo $gd_info["GD Version"];
          }else{
            echo $this->check(0);
          }
          ?></td>
          <td>Session支持</td>
          <td><?php echo $this->isfun("session_start") ; ?></td>
        </tr>
        <tr>
          <td>被屏蔽的函数</td>
          <td><?php echo get_cfg_var("disable_functions")?'<a class="tip" href="javascript:;" title="'.get_cfg_var("disable_functions").'">查看</a>':"无" ; ?></td>
          <td>安全模式</td>
          <td><?php echo $this->check(ini_get('safe_mode')); ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="iCMS-container">
  <div class="row-fluid">
    <div class="span5">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-info-circle"></i> </span>
          <h5>iCMS 开发信息</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered">
            <tr>
              <td style="width:60px">版权所有</td>
              <td>
                <a class="btn btn-inverse" href="http://www.idreamsoft.com" target="_blank"><i class="fa fa-copyright"></i> 艾梦软件（iDreamSoft.com）</a>
              </td>
            </tr>
            <tr>
              <td>开 发 者</td>
              <td>
                <a class="btn" href="http://git.oschina.net/php/icms" target="_blank"><i class="fa fa-github"></i> Git@OSC</a>
                <a class="btn" href="https://github.com/idreamsoft/iCMS" target="_blank"><i class="fa fa-github"></i> GitHub</a>
              </td>
            </tr>
            <tr>
              <td>帮助</td>
              <td><a class="btn" href="http://www.idreamsoft.com/doc/iCMS/index.html" target="_blank">模版标签说明</a></td>
            </tr>
            <tr>
              <td>许可协议</td>
              <td>
                <a class="btn" href="http://www.idreamsoft.com/doc/iCMS.LGPL.html" target="_blank">LGPL 开源协议</a>
                <a class="btn btn-danger" href="http://www.idreamsoft.com/service.html" target="_blank"><i class="fa fa-ticket"></i> 商业授权</a>
                <a class="btn btn-success" href="http://www.idreamsoft.com/donate.html" target="_blank"><i class="fa fa-jpy"></i> 捐赠</a>
              </td>
            </tr>
            <tr>
              <td>相关链接</td>
              <td><a class="btn btn-small" href="http://www.idreamsoft.com" target="_blank">iDreamSoft</a>
                <a class="btn btn-small" href="http://www.idreamsoft.com/iCMS/" target="_blank">iCMS</a>
                <a class="btn btn-small" href="http://www.idreamsoft.com/template/" target="_blank">&#x6A21;&#x677F;</a>
                <a class="btn btn-small" href="http://www.idreamsoft.com/doc" target="_blank">&#x6587;&#x6863;</a>
                <a class="btn btn-small" href="http://www.idreamsoft.com/feedback/" target="_blank">&#x8BA8;&#x8BBA;&#x533A;</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="span3">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-wechat"></i> </span>
          <h5>iCMS 微信公众平台</h5>
        </div>
        <div class="widget-content nopadding">
          <img src="./app/admincp/ui/iCMS.qrcode.jpg" alt="iCMS 微信公众平台" style="height: 230px">
        </div>
      </div>
    </div>
    <div class="span4">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-bug"></i> </span>
          <h5>BUG提交</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="http://www.idreamsoft.com/cms/feedback.php" method="post" class="form-inline" id="iCMS-feedback" target="iPHP_FRAME">
            <textarea id="bug_content" name="content" class="tip" title="为了保证效率，请务必描述清楚你的问题，例如包含 iCMS 版本号、服务器操作系统、WEB服务器版本、浏览器版本等必要信息，不合格问题将可能会被无视掉" style="width:95%; height: 160px; margin:4px 0px 4px 10px;padding: 4px;">
  iCMS 版本号:iCMS <?php echo iCMS_VERSION ; ?>[<?php echo iCMS_RELEASE ; ?>]
  服务器操作系统:<?php echo PHP_OS ; ?>;
  WEB服务器版本:<?php echo $_SERVER['SERVER_SOFTWARE'] ; ?>;
  MYSQL版本:<?php echo iDB::version() ; ?>;
  浏览器版本:<?php echo $_SERVER['HTTP_USER_AGENT'] ; ?>;
  出问题的URL:
  问题描述:</textarea>
            <div class="clearfix mt10"></div>
            <button id="bug_button" class="btn btn-primary fr mr20" type="submit"><i class="fa fa-check"></i> 提交</button>
            <input id="bug_email" name="email" type="text" class="ml10" placeholder="您的邮箱">
            <div class="clearfix mt10"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(function(){
	window.setTimeout(function(){
		$.getJSON("http://www.idreamsoft.com/cms/version.php?VERSION=<?php echo iCMS_VERSION ; ?>&RELEASE=<?php echo iCMS_RELEASE ; ?>&callback=?",
		    function(o){
            $('#iCMS_RELEASE').text(o.release);
            // $('#GIT_COMMIT_TIME').text(o.commit_time);
		    }
		);
	},1000);
});
</script>
<?php patchAdmincp::check_js();?>
<?php admincp::foot();?>