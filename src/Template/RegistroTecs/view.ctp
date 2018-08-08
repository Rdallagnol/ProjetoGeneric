<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="page-header">
   <h1>
      Visualização Registro Técnico
      <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Visualização detalhada do registro técnico
      </small>
   </h1>
</div>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($registroTec->tec_reg_id) ?></h3> 

    <?= $this->HtmlFormat->safeHtml($registroTec->descricao) ?>    
</div>
<?php 
 echo  $this->Html->link($this->Html->tag("i", "<span class=''></span>",array("class" => "ace-icon fa fa-reply "))
                           . ' Voltar', array('class' => '', 'action' => 'index'),
                        array('escape' => false));?> 