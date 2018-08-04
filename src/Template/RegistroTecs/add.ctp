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




<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($registroTec) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
       
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


