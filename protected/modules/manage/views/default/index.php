<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>

<div id="welcome">
	<table class = "logintable">
		
        <?php if (!isset($root['id'])){?> 
        
        <form method="post" action="<?php echo Yii::app()->request->baseUrl?>/manage/default/login">
        <tr>
        	<td >&nbsp;  </td>
        	<td width="230px" > <h2 >&nbsp;&nbsp;&nbsp;<b>管理员登录</b> </h2> </td>
            <td rowspan="3" valign="bottom" > <input name="" id="button" type="submit"  value=""  />   </td>
        </tr>
        <tr>
        	<td align="center" > <label>账&nbsp;号:</label> </td>
            <td> 
                <input name="rootname" type="text" id="rootname" />
                
            </td>
          </tr>
         <tr>
            <td align="center"> <label>密&nbsp;码:</label> </td>
            <td> 
                <input name="password" type="password" id="password" />
               
             </td>
          </tr>
          <tr height="50px">
            <td colspan="3">
           
            </td>
          </tr>
        </form>
    </table>
    

    <?php }?>
</div>