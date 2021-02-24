<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apod[]|\Cake\Collection\CollectionInterface $apods
 */
?>
<div class="apods index content">
    <?= $this->Html->link(__('New Apod'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Apods') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('copyright') ?></th>
                    <th><?= $this->Paginator->sort('hdurl') ?></th>
                    <th><?= $this->Paginator->sort('media_type') ?></th>
                    <th><?= $this->Paginator->sort('service_version') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apods as $apod): ?>
                <tr>
                    <td><?= h($apod->date) ?></td>
                    <td><?= h($apod->copyright) ?></td>
                    <td><?= h($apod->hdurl) ?></td>
                    <td><?= h($apod->media_type) ?></td>
                    <td><?= h($apod->service_version) ?></td>
                    <td><?= h($apod->title) ?></td>
                    <td><?= h($apod->url) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $apod->date]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $apod->date]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $apod->date], ['confirm' => __('Are you sure you want to delete # {0}?', $apod->date)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
