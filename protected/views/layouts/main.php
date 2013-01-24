<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo Yii::app()->params['title'];?></title>

<link href="<?php echo Yii::app()->request->baseUrl;?>/public/css/reset.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="<?php echo Yii::app()->request->baseUrl;?>/public/css/contact.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="<?php echo Yii::app()->request->baseUrl;?>/public/css/share.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="<?php echo Yii::app()->request->baseUrl;?>/public/css/tab.css" type="text/css" rel="stylesheet" media="screen"/>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/public/js/jquery-1.4.4.min.js"></script>
<script>
function woaicssq(num){
for(var id = 1;id<=2;id++ )
{
var MrJin="woaicss_con" +id;
if(id==num)
document.getElementById(MrJin).style.display="block";
else
document.getElementById(MrJin).style.display="none";
}
if(num==1){
document.getElementById("tabmain1").className="tabpic1_hover";
document.getElementById("tabmain2").className="tabpic2";
}
if(num==2){
document.getElementById("tabmain1").className="tabpic1";
document.getElementById("tabmain2").className="tabpic2_hover";
}
}
</script>


</head>

<body>
<div id="container">
  <div id="left"></div>
  <div id="right"> </div>
  <div id="middle">
    <div id="header">
      <div id="tabs">
        <div class="nav">
          <ul>
            <li class="title_home"><a href="<?php echo Yii::app()->request->baseUrl;?>/"></a></li>
            <li class="title_view"><a href="<?php echo Yii::app()->request->baseUrl;?>/introduce"></a></li>
            <li class="title_galledy"><a href="<?php echo Yii::app()->request->baseUrl;?>/fruit"></a></li>
            <li class="title_department"><a href="<?php echo Yii::app()->request->baseUrl;?>/member"></a></li>
            <li class="title_contact"><a href="<?php echo Yii::app()->request->baseUrl;?>/contact"></a></li>
          </ul>
        </div>
        <!-- end of nav -->
      </div>
      <!-- end of tabs -->
      <div id="illustrat"></div>
    </div>
    <!-- end of header -->
    
    <div id="contentx">
    	<?php echo $content; ?>
    </div>
    
    <div id="footer"><span><?php echo Yii::app()->params['copyrightInfo'];?></span> </div>
  </div>
  <!-- end of middle -->
</div>
</body>
</html>
