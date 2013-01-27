<?php
$user = Yii::app()->session['user'];
if (!Yii::app()->user->isGuest){?>
    <div class="comments_area">
      <div class="events_head">管理员信息</div>
      <div class="comments_text">
        <div align="left"><?php if(isset($user['username'])){echo $user['username'];}?><br />
      </div>
       </div>
      <div class="comments_text">
        <div align="left"><?php if(isset($user['nickname'])){echo $user['nickname'];}?><br />
          <a href="<?php echo Yii::app()->homeUrl;?>manage/user/logout" class="comments_link">退出</a>
      </div>
    </div>
    </div>
    <div class="comments_area">
      <div class="newletter_head">Newslinks</div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Sed massa Integer tincidunt </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Dapibus nunc</a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Phasellus ac Nunc</a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Quisque rhoncus felis in </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Ultricies sollicitudin diam orci </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Mollis risusin rhoncus velit </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Nulla ege</a></div>
      </div>
    </div>
<?php }?>