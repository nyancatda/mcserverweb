<?php
//引入控制文件
include 'controller/config.php';
?>

<!doctype html>
<html lang="zh">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>欢迎加入<?php echo $servername;?>服务器</title>
    
    <link href="css/bootstrap.css" rel="stylesheet" />
	  <link href="css/coming-sssoon.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
  <div class="container">

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
             <li>
                <a href="<?php echo $qqgrouplink;?>"> 
                    <i class="fa fa-twitter"></i>
                    QQ群
                </a>
            </li>
             <li>
                <a href="mailto:<?php echo $email;?>"> 
                    <i class="fa fa-envelope-o"></i>
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
    <div class="footer">
    </div>
 </div>
 </body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>