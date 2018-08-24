

<div class="page-header">
   <h1>
      Visualização do usuário
      <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Visualização detalhada do usuário
      </small>
   </h1>
</div>
<!-- /.page-header -->
<div class="row">
<div class="col-sm-12">
   <div class="widget-box">
      <div class="widget-header widget-header-flat">
         <h4 class="widget-title smaller">
            Dados do Usuário
         </h4>
      </div>
      <div class="widget-body">
         <div class="widget-main">
            <div class="row">
               <div class="col-xs-12">
                  <div class="users view large-9 medium-8 columns content">
                     <div id="user-profile-1" class="user-profile row">
                        <div class="col-xs-12 col-sm-3 center">
                           <div>
                              <span class="profile-picture">
                              <?php echo $this->Html->image('uploads/'.$user['img_name'], ['alt' => 'userImg', 'class' => 'editable img-responsive']); ?>
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
               </div>
               <div class="row">
                  <div class="col-xs-12">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


<?php 
 echo  $this->Html->link($this->Html->tag("i", "<span class=''></span>",array("class" => "ace-icon fa fa-pencil "))
                           . ' Editar', array('class' => '', 'controller' => 'users', 'action' => 'edit', 
                           $this->request->session()->read('Auth.User.user_id')),array('escape' => false));?> 