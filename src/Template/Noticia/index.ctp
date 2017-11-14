<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
            <?= $this->Html->link('<i class="fa fa-plus-square"></i> <span> Adicionar</span>', ['action' => 'add'],array( 'class' => 'btn btn-block btn-primary','escape' => false, 'title'=> 'Adicionar')) ?>

        </h3>
        <div class="box-tools no-margin pull-right">

        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width: 10px"><?= $this->Paginator->sort('id','#') ?></th>
          <th><?= $this->Paginator->sort('Descricao') ?></th>
          <th><?= $this->Paginator->sort('Data') ?></th>
          <th><?= __('Ações') ?></th>
      </tr>

      <?php foreach ($noticia as $noticium): ?>
        <tr>
            <td><?= $this->Number->format($noticium->id) ?></td>
            <td><?= h($noticium->Descricao) ?></td>
            <td><?= h($noticium->Data) ?></td>
            <td class="actions" width="12%;" align="center">
                <div class="pull-center">

                <!--Icone visualizar -->
                <?php echo $this->Html->link(
                    '<button type="button" class="btn btn-default btn-sm"><i class="fa fa-search"></i></button>',
                    array('action' => 'view', $noticium->id),
                    array('escape' => false, 'title'=>'Visualizar') // This line will parse rather then output HTML
                ); ?>
                <!--Icone Editar -->
                <?php echo $this->Html->link(
                    '<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>',
                    array('action' => 'edit', $noticium->id),
                    array('escape' => false, 'title'=>'Editar') // This line will parse rather then output HTML
                ); ?>

                <!--Icone Ecluir -->
                 <?php echo $this->Form->postLink(
                    '<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>',
                    array('action' => 'delete', $noticium->id),
                    array('escape' => false, 'title'=>'Excluir', 'confirm'=> __('Tem certeza de que deseja excluir # {0}?', $noticium->id))
                ); ?>
            </div>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
</div>
<!-- /.box-body -->
<div class="box-footer clearfix paginator">
  <ul class="pagination pagination-sm no-margin pull-right">
    <?= $this->Paginator->first('<< ') ?>
    <?= $this->Paginator->prev('< ' ) ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next( ' >') ?>
    <?= $this->Paginator->last( ' >>') ?>
</ul>
<p><?= $this->Paginator->counter(['format' => __('Página(s): {{page}}/{{pages}} - Mostrando: {{current}}/{{count}}')]) ?></p>
</div>
</div>

</div>
</div>
