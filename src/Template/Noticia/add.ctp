<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Noticia'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="noticia form large-9 medium-8 columns content">
    <?= $this->Form->create($noticium) ?>
    <fieldset>
        <legend><?= __('Add Noticium') ?></legend>
        <?php
            echo $this->Form->input('Descricao');
            echo $this->Form->input('Data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
