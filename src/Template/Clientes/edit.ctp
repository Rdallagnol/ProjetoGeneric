<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

    <?= $this->Html->css('jquery-ui.custom.min.css') ?> 
    <?= $this->Html->css('jquery.gritter.min.css') ?> 
    <?= $this->Html->css('select2.min.css') ?> 
    <?= $this->Html->css('bootstrap-datepicker3.min.css') ?> 
    <?= $this->Html->css('bootstrap-editable.min.css') ?> 


<div class="page-header">
   <h1>
      Criar Cliente
      <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Criação de Clientes
      </small>
   </h1>
</div>

<div class="row">
    <div class="space-4"></div>
                  <div class="col-xs-12 ">
    <?= $this->Form->create($cliente,['id' => 'ClienteForm','class'=>'form-horizontal']) ?>
  
        <div class="form-group ">
            <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('nome',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Nome '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
             <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('email',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Email '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
             <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('telefone',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Telefone: '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
             <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('cpf',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Cpf '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
              <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('endereco',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Endereço '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
              <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('bairro',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Bairro '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
              <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('cidade',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'Cidade '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
              <div class="col-sm-12 ">
                 <?php
                 echo $this->Form->control('uf',array('label'=>array('class'=>'col-sm-3 control-label','text' => 'UF '),'class' => 'col-xs-10 col-sm-5'));
                  ?>
            </div>
        </div>
     

  
    <div class="form-actions center">
      <?php 
 echo  $this->Html->link($this->Html->tag("i", "<span class=''></span>",array("class" => "ace-icon fa fa-reply "))
                           . ' Voltar', array('class' => '', 'action' => 'index'),
                        array('escape' => false));?> 
  &nbsp; &nbsp; &nbsp;
                        <?= $this->Form->button('Registrar ' . $this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-arrow-right icon-on-right")),['class' => 'btn btn-sm btn-success']) ?>
                     </div>


    <?= $this->Form->end() ?>
</div>
</div>
</div>

