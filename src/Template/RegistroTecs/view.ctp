<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($registroTec->tec_reg_id) ?></h3> 

    <?= $this->HtmlFormat->safeHtml($registroTec->descricao) ?>    
</div>
