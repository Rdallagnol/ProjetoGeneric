<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<div class="" onclick="this.classList.add('hidden');">
<strong>
	<i class="ace-icon fa fa-times"></i>		
</strong>
<?= $message ?></div>
