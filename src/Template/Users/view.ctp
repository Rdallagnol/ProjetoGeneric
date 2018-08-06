<div class="users view large-9 medium-8 columns content">
   <div id="user-profile-1" class="user-profile row">
      <div class="col-xs-12 col-sm-3 center">
         <div>
            <span class="profile-picture">
            <?php echo $this->Html->image('logo.png', ['alt' => 'userImg', 'class' => 'editable img-responsive']); ?>
            </span>
            <div class="space-4"></div>
            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
               <div class="inline position-relative">
                  <i class="ace-icon fa fa-circle light-green"></i>
                  &nbsp;
                  <span class="white"><?= h($user->name) ?></span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="space-6"></div>
   <div class="profile-user-info profile-user-info-striped">
      <div class="profile-info-row">
         <div class="profile-info-name"> Email </div>
         <div class="profile-info-value">
            <span class="editable" id="username"><?= h($user->email) ?></span>
         </div>
      </div>
      <div class="profile-info-row">
         <div class="profile-info-name"> Criação: </div>
         <div class="profile-info-value">
            <span class="editable" id="signup"><?= h($user->created) ?></span>
         </div>
      </div>
      <div class="profile-info-row">
         <div class="profile-info-name"> Atualizado: </div>
         <div class="profile-info-value">
            <span class="editable" id="login"><?= h($user->modified) ?></span>
         </div>
      </div>
   </div>
</div>

