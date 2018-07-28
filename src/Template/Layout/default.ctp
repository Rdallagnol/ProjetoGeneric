<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    
	<?= $this->Html->css('bootstrap.min.css') ?> 
    <?= $this->Html->css('/font-awesome/4.5.0/css/font-awesome.min.css') ?> 
    <?= $this->Html->css('fonts.googleapis.com.css') ?> 
    <?= $this->Html->css('ace.min.css') ?> 
    <?= $this->Html->css('ace-rtl.min.css') ?> 
    <?= $this->Html->script('jquery-2.1.4.min.js') ?> 
    <?= $this->Html->script('jquery.mobile.custom.min.js') ?> 
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
	
	<?php if($this->Session->read('Auth.User')){ ?>	
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
                <li><?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')); ?></li>
            </ul>
        </div>
    </nav>
    <?php } ?>	
    <?= $this->Flash->render() ?>
    <?= $this->Flash->render('auth') ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    
</body>
</html>
