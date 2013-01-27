<?php
$this->pageTitle=Yii::app()->name.' - 成员';
$this->breadcrumbs=array(
	'成员',
);
?>

<link href="<?php echo Yii::app()->homeUrl;;?>/public/css/department.css" type="text/css" rel="stylesheet" media="screen"/> <div id="content1">       	
            <a href="#"><img id="changebj" src="<?php echo Yii::app()->homeUrl;;?>/public/images/changebj.png"/></a>
            <img id="bj" src="<?php echo Yii::app()->homeUrl;;?>/public/images/department/bj.jpg"/>
        </div><!-- end of content1 --> 
        <div id="content2">
                <div id="patch1">
                	<img class="title_pic" src="<?php echo Yii::app()->homeUrl;;?>/public/images/department/department.jpg"/>
                    <img  class="b_left" src="<?php echo Yii::app()->homeUrl;;?>/public/images/department/border_department.jpg"/>
                    <img  class="b_right" src="<?php echo Yii::app()->homeUrl;;?>/public/images/department/border_department.jpg"/>             
                	<s:iterator value="pager.resultList">
                    	<div class="picshow">
                    	<!-- 图片以后还要从数据库里面提取 -->
						<img src="<s:property value='miniPhoto'/></img>"/><br/>
						<h2><s:property value="username" /><br/></h2>
						<p><s:property value="description" /><br/></p>
						</div>
					</s:iterator>
                </div><!-- end of patch1 -->                               
        </div><!-- end of content2 -->
        <div id="content3">
       		<div id="menu1">
                	<ul>    				                    	
                    <li class="back"><span>
                    	<s:if test="pageNo > 1">                    		       
                    		<s:url id="url_pre" value="department">
                    			<s:param name="pageNo" value="pageNo-1"/>
                    		</s:url>
                    		<span><s:a href="%{url_pre}"/></span>                   		
                    	</s:if>
                    </span></li>                	
                    <s:iterator value="pager.arrayPage" id="key">                      	
                        <s:url id="url" value="department">
                        	<s:param name="pageNo" value="key"/>
                        </s:url>
                        <s:if test="pageNo == key ">
                        <li class="block" style="background:yellow;">
                        	<s:a href="%{url}">
                        		<s:property/>
                        	</s:a>
                       	 </li>
                       	 </s:if>
                       	 <s:else>
                       	 <li class="block">
                        	<s:a href="%{url}">
                        		<s:property/>
                        	</s:a>
                       	 </li>
                       	 </s:else>
                    </s:iterator>
                 	<li class="forward"><span>
                        <s:if test="pageNo < pager.pageCount">
                        	<s:url id="url_forword" value="department">
                        		<s:param name="pageNo" value="pageNo + 1"/>
                        	</s:url>
                        	<s:a href="%{url_forword}"></s:a>
                        </s:if>
                    </span></li>
                </ul>   	
        	</div> 
        </div>	<!-- end of content3 -->
       