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
            <?= $this->Html->link(__('List Apods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="apods form content">
            <?= $this->Form->create($apod) ?>
            <fieldset>
                <legend><?= __('Add Apod') ?></legend>
                <?php
                    echo $this->Form->control('copyright');
                    echo $this->Form->control('explanation');
                    echo $this->Form->control('hdurl');
                    echo $this->Form->control('media_type');
                    echo $this->Form->control('service_version');
                    echo $this->Form->control('title');
                    echo $this->Form->control('url');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
