
                    <div class="registroTecs index large-9 medium-8 columns content">
    <h3><?= ('Registros Técnicos') ?></h3>
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
</div>

