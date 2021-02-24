<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Apod $apod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Apod'), ['action' => 'edit', $apod->date], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Apod'), ['action' => 'delete', $apod->date], ['confirm' => __('Are you sure you want to delete # {0}?', $apod->date), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Apods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Apod'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="apods view content">
            <h3><?= h($apod->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Copyright') ?></th>
                    <td><?= h($apod->copyright) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hdurl') ?></th>
                    <td><?= h($apod->hdurl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Media Type') ?></th>
                    <td><?= h($apod->media_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Version') ?></th>
                    <td><?= h($apod->service_version) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($apod->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($apod->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($apod->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Explanation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($apod->explanation)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
