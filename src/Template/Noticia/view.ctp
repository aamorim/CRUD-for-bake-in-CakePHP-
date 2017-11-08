<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Noticium'), ['action' => 'edit', $noticium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Noticium'), ['action' => 'delete', $noticium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Noticia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="noticia view large-9 medium-8 columns content">    
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($noticium->Descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($noticium->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($noticium->Data) ?></td>
        </tr>
    </table>
</div>




