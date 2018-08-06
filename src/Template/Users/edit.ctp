

<?php
   /**
    * @var \App\View\AppView $this
    * @var \App\Model\Entity\User $user
    */
   ?>
<div class="row">
   <div class="col-xs-12">
      <?= $this->Form->create($user,array('class'=>'form-horizontal')) ?>
      <fieldset>
         <legend><?= __('Alteração do usuário') ?></legend>
         <div class="form-group">
            <div class="col-sm-9">
               <?php
                  echo $this->Form->control('name',array('label'=>array('class'=>'col-sm-3 control-label no-padding-right','text' => 'Nome '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
         </div>
         <div class="form-group">
            <div class="col-sm-9">
               <?php
                  echo $this->Form->control('email',array('readonly' => 'readonly','label'=>array('class'=>'col-sm-3 control-label no-padding-right','text' => 'Email '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
         </div>
         <div class="form-group">
            <div class="col-sm-9">
               <?php
                  echo $this->Form->control('password',array('label'=>array('class'=>'col-sm-3 control-label no-padding-right','text' => 'Password '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
         </div>
      </fieldset>
      <div class="form-actions center">
         <?= $this->Form->button('Submit ' . $this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-arrow-right icon-on-righ")),['class' => 'btn btn-sm btn-success']) ?>
      </div>
      <?= $this->Form->end() ?>
   </div>
</div>

