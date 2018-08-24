

<!-- <div class="registroTecs index large-9 medium-8 columns content">

   <table cellpadding="0" cellspacing="0">
      <thead>
         <tr>
            <th scope="col"><?= $this->Paginator->sort('tec_reg_id','Código') ?></th>
            <th scope="col"><?= $this->Paginator->sort('titulo','Título') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created','Data Criação') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified', 'Data Atualização') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
         </tr>
      </thead>
      <tbody>
         <?php 
            foreach ($registroTec as $registro): ?>
         <tr>
            <td><?= $this->Number->format($registro->tec_reg_id) ?></td>
            <td><?= h($registro->titulo) ?></td>
            <td><?= h($registro->created) ?></td>
            <td><?= h($registro->modified) ?></td>
            <td class="actions">
               <?= $this->Html->link(__('View'), ['action' => 'view', $registro->tec_reg_id]) ?>
               <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registro->tec_reg_id]) ?>
               <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registro->tec_reg_id], ['confirm' => __('Are you sure you want to delete # {0}?', $registro->tec_reg_id)]) ?>
            </td>
         </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
   <div class="paginator">
      <ul class="pagination">
         <?= $this->Paginator->first('<< ' . __('first')) ?>
         <?= $this->Paginator->prev('< ' . __('previous')) ?>
         <?= $this->Paginator->numbers() ?>
         <?= $this->Paginator->next(__('next') . ' >') ?>
         <?= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
      <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
   </div>
</div> -->

<div class="page-header">
   <h1>
      Lista de Registro Técnico
      <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Listagem geral dos registro técnico
      </small>
   </h1>
</div>
<div class="row">
   <div class="col-xs-12">
      
      <div class="clearfix">
         <div class="pull-right tableTools-container"></div>
      </div>
      <div class="table-header">
         Resultados de "Registros técnicos"
      </div>
      <div>
         <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
               <tr>
                  <th class="hidden-480"></th>
                  <th class="hidden-480">Código</th>
                  <th>Título</th>
                  <th><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i> Criação</th>
                  <th class="hidden-480"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i> Atualização</th>                
                  <th>Ações</th>
               </tr>
            </thead>
            <tbody>
                 <?php foreach ($registroTec as $registro): ?>
               <tr>
                  <td class="hidden-480"></td>
                  <td class="hidden-480">
                     <?= $this->Number->format($registro->tec_reg_id) ?></a>
                  </td>
                  <td><?= h($registro->titulo) ?></td>
                  <td><?= h($registro->created) ?></td>
                  <td class="hidden-480"><?= h($registro->modified) ?></td>
                
                  <td>
                     <div class="hidden-sm hidden-xs action-buttons">
                     
                         <?php echo $this->Html->link($this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-search-plus bigger-130")), array('action' => 'view',  $registro->tec_reg_id),array('escape' => false)); ?>
                   
                         <?php echo $this->Html->link($this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-pencil bigger-130")), array('action' => 'edit',  $registro->tec_reg_id),array('escape' => false, 'class'=>'green')); ?>

                         <?php echo $this->Form->postLink($this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-trash-o bigger-130")), array('action' => 'delete',  $registro->tec_reg_id),array('escape' => false, 'class'=>'red','confirm' => 'Tem certeza de que deseja excluir?', $registro->tec_reg_id)); ?>
                        </a>
                            
                     </div>
                     
                     <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                  <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                  </button>

                                  <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    <li>
                                       <?php echo $this->Html->link($this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-search-plus bigger-130")), array('action' => 'view',  $registro->tec_reg_id),array('escape' => false,'class'=>'blue')); ?>
                                    </li>

                                    <li>
                                       <?php echo $this->Html->link($this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-pencil bigger-130")), array('action' => 'edit',  $registro->tec_reg_id),array('escape' => false, 'class'=>'green')); ?>
                                    </li>

                                    <li>
                                  
                         <?php echo $this->Html->link($this->Html->tag("i", "<span></span>",array("class" => "ace-icon fa fa-trash-o bigger-130")), array('action' => 'delete',  $registro->tec_reg_id),array('escape' => false, 'class'=>'red','confirm' => 'Tem certeza de que deseja excluir?', $registro->tec_reg_id)); ?>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                  </td>
               </tr>
                  <?php endforeach; ?>
           
            </tbody>
         </table>
      </div>
   </div>
</div>
<?php 
   echo  $this->Html->link($this->Html->tag("i", "<span class=''></span>",array("class" => "ace-icon glyphicon glyphicon-plus  "))
                             . ' Criar Registro', array('class' => '', 'action' => 'add'),array('escape' => false));?> 






<script type="text/javascript">
   jQuery(function($) {
       //initiate dataTables plugin
       var myTable = 
       $('#dynamic-table')
       //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
       .DataTable( {
           bAutoWidth: false,
           "aoColumns": [
             { "bSortable": false },
             null, null,null, null,
             { "bSortable": false }
           ],
           "aaSorting": [],          
           
       } );
   
       
       
       $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
       
       new $.fn.dataTable.Buttons( myTable, {
           buttons: [
             {
               "extend": "colvis",
               "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
               "className": "btn btn-white btn-primary btn-bold",
               columns: ':not(:first):not(:last)'
             },
             {
               "extend": "copy",
               "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
               "className": "btn btn-white btn-primary btn-bold"
             },
             {
               "extend": "print",
               "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
               "className": "btn btn-white btn-primary btn-bold",
               autoPrint: false,
               message: ''
             }       
           ]
       } );
       myTable.buttons().container().appendTo( $('.tableTools-container') );
       
       //style the message box
       var defaultCopyAction = myTable.button(1).action();
       myTable.button(1).action(function (e, dt, button, config) {
           defaultCopyAction(e, dt, button, config);
           $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
       });
       
       
       var defaultColvisAction = myTable.button(0).action();
       myTable.button(0).action(function (e, dt, button, config) {
           
           defaultColvisAction(e, dt, button, config);
           
           
           if($('.dt-button-collection > .dropdown-menu').length == 0) {
               $('.dt-button-collection')
               .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
               .find('a').attr('href', '#').wrap("<li />")
           }
           $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
       });
   
       ////
   
       setTimeout(function() {
           $($('.tableTools-container')).find('a.dt-button').each(function() {
               var div = $(this).find(' > div').first();
               if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
               else $(this).tooltip({container: 'body', title: $(this).text()});
           });
       }, 500);
             
       
       myTable.on( 'select', function ( e, dt, type, index ) {
           if ( type === 'row' ) {
               $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
           }
       } );
       myTable.on( 'deselect', function ( e, dt, type, index ) {
           if ( type === 'row' ) {
               $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
           }
       } );
   
   
   
   
       /////////////////////////////////
       //table checkboxes
       $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
       
       //select/deselect all rows according to table header checkbox
       $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
           var th_checked = this.checked;//checkbox inside "TH" table header
           
           $('#dynamic-table').find('tbody > tr').each(function(){
               var row = this;
               if(th_checked) myTable.row(row).select();
               else  myTable.row(row).deselect();
           });
       });
       
       //select/deselect a row when the checkbox is checked/unchecked
       $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
           var row = $(this).closest('tr').get(0);
           if(this.checked) myTable.row(row).deselect();
           else myTable.row(row).select();
       });
   
   
   
       $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
           e.stopImmediatePropagation();
           e.stopPropagation();
           e.preventDefault();
       });
       
       
       
       //And for the first simple table, which doesn't have TableTools or dataTables
       //select/deselect all rows according to table header checkbox
       var active_class = 'active';
       $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
           var th_checked = this.checked;//checkbox inside "TH" table header
           
           $(this).closest('table').find('tbody > tr').each(function(){
               var row = this;
               if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
               else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
           });
       });
       
       //select/deselect a row when the checkbox is checked/unchecked
       $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
           var $row = $(this).closest('tr');
           if($row.is('.detail-row ')) return;
           if(this.checked) $row.addClass(active_class);
           else $row.removeClass(active_class);
       });
   
       
   
       /********************************/
       //add tooltip for small view action buttons in dropdown menu
       $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
       
       //tooltip placement on right or left
       function tooltip_placement(context, source) {
           var $source = $(source);
           var $parent = $source.closest('table')
           var off1 = $parent.offset();
           var w1 = $parent.width();
   
           var off2 = $source.offset();
           //var w2 = $source.width();
   
           if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
           return 'left';
       }
       
       
       
       
       /***************/
       $('.show-details-btn').on('click', function(e) {
           e.preventDefault();
           $(this).closest('tr').next().toggleClass('open');
           $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
       });
       /***************/
       
       
       
       
       
       /**
       //add horizontal scrollbars to a simple table
       $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
         {
           horizontal: true,
           styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
           size: 2000,
           mouseWheelLock: true
         }
       ).css('padding-top', '12px');
       */
   
   
   })
</script>

