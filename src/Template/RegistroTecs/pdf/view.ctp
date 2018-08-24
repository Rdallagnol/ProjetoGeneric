<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="alert"> 
	<?= $this->HtmlFormat->safeHtml($registroTec->titulo) ?>    
</div>
<div class="alert">  
    <?= $this->HtmlFormat->safeHtml($registroTec->descricao) ?>    
</div>
