<?php
$this->pageTitle=Yii::app()->name.' - 联系我们';
$this->breadcrumbs=array(
	'联系我们',
);
?>

<link href="<?php echo Yii::app()->homeUrl;;?>/public/css/contact.css" type="text/css" rel="stylesheet" media="screen"/>
<div id="content1"> <a href="#"><img id="changebj" src="<?php echo Yii::app()->homeUrl;;?>/public/images/changebj.png"/></a> <img id="id" src="<?php echo Yii::app()->homeUrl;;?>/public/images/contact/bj.jpg"/> </div>
    <!-- end of content1 -->
    <div id="content2">
      <div id="patch1"> <img class="title_pic" src="<?php echo Yii::app()->homeUrl;;?>/public/images/contact/contact.jpg"/> <img  class="b_left" src="<?php echo Yii::app()->homeUrl;;?>/public/images/department/border_department.jpg"/> <img  class="b_right" src="<?php echo Yii::app()->homeUrl;;?>/public/images/department/border_department.jpg"/>
        <h2>最新留言 Latest Message</h2>
        <div id="talkbox">
          <s:set name="floor" value="pager.endIndex" id="i"/>
          <s:iterator value="pager.resultList" id="key">
          <div class="mate">
            <div class="board1"><span class="date"><s:date name="#key.createDate" format="dd-MM-yyyy"/></span>
				<span><s:property value="#i"/>楼：<s:property value="#key.nickname"/></span></div>

            <div class="board2"><span><s:property value="#key.content"/></span></div>
            <s:set value="#i-1" name="floor" id="i"/>
          </div>
          </s:iterator>
          <div id="menu1">
            <ul>    				                    	
                    <li class="back"><span>
                    	<s:if test="pageNo > 1">                    		       
                    		<s:url id="url_pre" value="showContact">
                    			<s:param name="pageNo" value="pageNo-1"/>
                    		</s:url>
                    		<s:a href="%{url_pre}"/>                   		
                    	</s:if>
                    </span></li>                	
                    <s:iterator value="pager.arrayPage" id="key">                      	
                        <s:url id="url" value="showContact">
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
                        	<s:url id="url_forword" value="showContact">
                        		<s:param name="pageNo" value="pageNo + 1"/>
                        	</s:url>
                        	<s:a href="%{url_forword}"></s:a>
                        </s:if>
                    </span></li>
                </ul>   			
          </div>
          <div id="comment">
            <div class="paper_ico"><span>你的留言会出现在上面的【最新留言板块】板块，欢迎给我们意见和建议！</span></div>            
            <div class="edit">
            	<form name="form" action="addContact" method="post">
					<s:textarea id="msgText" name="content"></s:textarea>
                    <div class="public">
                    	<input type="radio" name="public"/>&nbsp;&nbsp;匿名
						<input type="radio" checked="checked" name="public"/>&nbsp;&nbsp;公开
                        <div class="talk_ico"><span>俱乐部论坛：<a href="http://bbs.husttic.com">http://bbs.husttic.com</a> 欢迎登陆我们的论坛做进一步的交流</span></div>
                    </div>
					
                    
					<s:textfield name="nickname" id="disName"/>
					<input type="submit" style="display:none;"/>
                    <input type="button" title="创建帐号" onclick="regist();" onblur="this.className='btn-submit'" onfocus="this.className='btn-submit-act'" class="btn-submit" name="创建账号"/>
				</form>
                
             </div>
          </div>
          <!-- end of comment -->
        </div>
        <!-- end of talkbox -->
      </div>
      <!-- end of patch1 -->
    </div>
    <!-- end of content2 -->
    <div id="content3"> </div>
    <!-- end of content3 -->
