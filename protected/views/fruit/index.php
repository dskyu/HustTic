<?php
$this->pageTitle=Yii::app()->name.' - 作品';
$this->breadcrumbs=array(
	'作品',
);
?>

<link href="<?php echo Yii::app()->homeUrl;;?>/public/css/galledy.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="<?php echo Yii::app()->homeUrl;;?>/public/css/galledy_exp.css" type="text/css" rel="stylesheet" media="screen"/>
 <div id="content1"><a href="#"><img id="changebj"
	src="<?php echo Yii::app()->homeUrl;;?>/public/images/changebj.png" /></a> <img id="bj" src="<?php echo Yii::app()->homeUrl;;?>/public/images/galledy/bj.jpg" /> </div>
    <!-- end of content1 -->
    <div id="content2">
   
      <div class="woaicss">
        <ul class="woaicss_title woaicss_title_bg1" id="woaicsstitle">
          	<s:if test="type == 0">
          		<li>
          			<a href="galledy?type=0">
            			<div class="tabpic1_hover" id="tabmain1"></div>
            		</a>
            	</li>
          		<li>
          			<a href="galledy?type=1">
            		<div class="tabpic2" id="tabmain2"></div>
            		</a>
            	</li>
            </s:if>
            <s:else>
            	<li>
          			<a href="galledy?type=0">
            			<div class="tabpic1" id="tabmain1"></div>
            		</a>
            	</li>
          		<li>
          			<a href="galledy?type=1">
            			<div class="tabpic2_hover" id="tabmain2"></div>
            		</a>
            	</li>
            </s:else>
        </ul>
        <div style="clear: both;"></div>
        <div class="woaicss_con" id="woaicss_con1" style="display: block;">
        <s:set name="floor" value="1" id="i"/>
		<s:iterator value="pager.resultList">
          	<div class="workshow"><img class="workpic"
				src="<?php echo Yii::app()->homeUrl;;?>/public/images/works/web/01.jpg" />
		 		<s:url id="url" value="galledyExp">
		 			<s:param name="index" value="#i"/>
		 		</s:url>
		  		<s:a href="%{url}">
          			<div class="cover">
              		<p><s:property value="name"/><br />
                		时间：<span><s:date name="endDate" format="dd-MM-yyyy"/></span></p>
            		</div>
            	</s:a>
            </div>
            <s:set value="#i-1" name="floor" id="i"/>
		</s:iterator>  	
        </div>
      </div>
    </div>
    <!-- end of content2 -->
    <div id="content3">
      <div id="menu1">
        <ul>    				                    	
                    <li class="back"><span>
                    	<s:if test="pageNo > 1">                    		       
                    		<s:url id="url_pre" value="galledy">
                    			<s:param name="type" value="type"/>
                    			<s:param name="pageNo" value="pageNo-1"/>                  			
                    		</s:url>
                    		<s:a href="%{url_pre}"/>                   		
                    	</s:if>
                    </span></li>                	
                    <s:iterator value="pager.arrayPage" id="key">                      	
                        <s:url id="url" value="galledy">
                        	<s:param name="type" value="type"/>
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
                        	<s:url id="url_forword" value="galledy">
                        		<s:param name="type" value="type"/>
                        		<s:param name="pageNo" value="pageNo + 1"/>
                        	</s:url>
                        	<s:a href="%{url_forword}"></s:a>
                        </s:if>
                    </span></li>
                </ul>  
      </div>
    </div>
    <!-- end of content3 -->