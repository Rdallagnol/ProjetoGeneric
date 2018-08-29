<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
 <?= $this->Html->css('bootstrap.min.css') ?> 
   

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="no-skin">

    <div id="header">
        <div>
            <div class="alert">
                <span class="user-info">
                    <small>Consultor</small>
                    <br>
                    <?php echo $this->request->session()->read('Auth.User.name')  ; ?>                                 
                </span>
            </div>                                
        </div>    
    </div> 

    <div id="container">
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
    </div>

</body>
</html>