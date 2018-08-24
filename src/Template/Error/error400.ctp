<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;



if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?= $this->element('auto_table_warning') ?>
<?php
if (extension_loaded('xdebug')) :
    xdebug_print_function_stack();
endif;

$this->end();
endif;
?>

<div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->

                                <div class="error-container">
                                    <div class="well">
                                        <h1 class="grey lighter smaller">
                                            <span class="blue bigger-125">
                                                <i class="ace-icon fa fa-sitemap"></i>
                                                <?= h($message) ?>
                                            </span>
                                         
                                        </h1>

                                        <hr />
                                        <h3 class="lighter smaller"><?= __d('cake', 'O endereço {0} não foi encontrado  no servidor.', "<strong>'{$url}'</strong>") ?></h3>

                                        <div>
                                          

                                            <div class="space"></div>
                                            
                                        </div>

                                        <hr />
                                        <div class="space"></div>

                                        <div class="center">
                                            <a href="javascript:history.back()" class="btn btn-grey">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                Voltar
                                            </a>


                                           
                                        </div>
                                    </div>
                                </div>

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->