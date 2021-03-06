<?php
   /**
    * @var \App\View\AppView $this
    * @var \App\Model\Entity\User $user
    */
   ?>
<div class="page-header">
   <h1>
      Alteração do usuário
      <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Atualização das informações do usuário
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
                     
                   
                     <div id="user-profile-1" class="user-profile row">
                        <div class="col-xs-6 col-sm-2 center">
                           <div>
                              <span class="profile-picture">
                              <?php echo $this->Html->image('uploads/'.$user['img_name'], ['alt' => 'userImg', 'class' => 'editable img-responsive']); ?>
                              </span>
                              <div class="space-4"></div>
                             
                           </div>
                        </div>
                     </div>


                     <?= $this->Form->create($user,array('type'=>'file', 'class'=>'form-horizontal')) ?>
             
                         
                         <div class="form-group">
                           <div class="col-xs-12 col-sm-4">
                                 
                                 <?php
                                 echo $this->Form->control('img_name',array('label'=>array('class'=>'','text' => ''),'type' => 'file', 'class' => 'col-xs-10 col-sm-5'));
                                 ?>
                           </div> 
                        </div>
                        <div class="form-group">
                       
                              <?php
                                 echo $this->Form->control('name',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Nome '),'class' => 'col-xs-10 col-sm-5'));
                                 ?>
                      
                        </div>
                        <div class="form-group">
                       
                              <?php
                                 echo $this->Form->control('email',array('readonly' => 'readonly','label'=>array('class'=>'col-sm-3 control-label','text' => 'Email '),'class' => 'col-xs-10 col-sm-5'));
                                 ?>
                        
                        </div>
                        <div class="form-group">
                         
                              <?php
                                 echo $this->Form->control('password',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Password '),'class' => 'col-xs-10 col-sm-5'));
                                 ?>
                         
                        </div>
                         
                    
                     <div class="form-actions center">


                       <?php  echo  $this->Html->link(
                              $this->Html->tag("i", "<span class=''></span>",
                                           array("class" => "ace-icon fa fa-reply ")). ' Voltar', 
                                           array('class' => '', 'controller' => 'users', 'action' => 'view', 
                                           $this->request->session()->read('Auth.User.user_id')),
                                           array('escape' => false));
                        ?> 
                        
                        &nbsp; &nbsp; &nbsp;
                           
                        <?= $this->Form->button('Registrar ' . $this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-arrow-right icon-on-righ")),
                                                                                                          ['class' => 'btn btn-sm btn-success']) ?>
                          

                     </div>
                     <?= $this->Form->end() ?>
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
</div>





<!-- PAGE CONTENT ENDS -->


