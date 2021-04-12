<?php
//引入控制文件
include 'controller/config.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="keywords" content="<?php echo $servername;?>"/>
    <meta name="description" content="<?php echo $introduced;?>"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>欢迎加入<?php echo $servername;?>服务器</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link href="css/coming-sssoon.css" rel="stylesheet" />
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
             <li>
                <a href="<?php echo $qqgrouplink;?>"> 
                    <i class="glyphicon glyphicon-flag"></i>
                    QQ群
                </a>
            </li>
             <li>
                <a href="mailto:<?php echo $email;?>"> 
                    <i class="glyphicon glyphicon-envelope"></i>
                    Email
                </a>
            </li>
       </ul>
      
    </div>
  </div>
</nav>
<div class="main" style="background-image: url('images/default.jpg')">

    
    <div class="cover black" data-color="black"></div>
     

    <div class="container">
        <h1 class="logo">
          <?php echo $servername;?>
        </h1>
        
        <div class="content">
            <h4 class="motto"><?php echo $introduced;?></h4>
            <div class="subscribe">
            <div class="row">
                        <form class="info-text" action="minecraft://?addExternalServer=<?php echo $servername;?>|<?php echo $serverip;?>:<?php echo $serverport;?>">
                          <div style="margin-left: 130px;margin-right: 130px;">
                          <button type="submit" class="btn btn-lg btn-block btn-danger btn-fill">立即加入</button>
                          </div>
                        </form>
                </div>
            <h5 class="info-text">
                    服务器の信息
                </h5>
                    <div class="col-md-4 col-md-offset-4">
                    <p class="info-text">状态:<?php echo $status;?></p>
                    <?php
                    if ($status == "在线") {
                      echo "<p class='info-text'>在线人数:".$online."/".$max."</p>";
                      echo "<p class='info-text'>延迟:".$delay."ms</p>";
                      echo "<p class='info-text'>支持的游戏版本:".$version."</p>";
                    } else {
                      echo "<p class='info-text'>请联系<a href=".$qqgrouplink.">管理员</p>";
                    }
                    ?>
                    </div>
            </div>
        </div>
    </div>
 </div>
 </body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>