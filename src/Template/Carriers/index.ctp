<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrier[]|\Cake\Collection\CollectionInterface $carriers
 */
?>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Carriers List</h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="<?php echo $this->Url->build(['action'=>'add']);?>" class="btn btn-primary btn-sm">Add new Carrier</a>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered no-footer" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width:10%"><?= $this->Paginator->sort('id') ?></th>
                                                <th scope="col" style="width:20%"><?= $this->Paginator->sort('carriers_name') ?></th>
                                                <th scope="col" style="width:20%"><?= $this->Paginator->sort('carriers_code') ?></th>
                                                <th scope="col" style="width:20%"><?= $this->Paginator->sort('active') ?></th>
                                                <th scope="col" class="actions" style="width:30%"><?= __('Actions') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($carriers as $carrier): ?>
                                            <tr>
                                                <td><?= $this->Number->format($carrier->id) ?></td>
                                                <td><?= h($carrier->carriers_name) ?></td>
                                                <td><?= h($carrier->carriers_code) ?></td>
                                                <td><?= ($carrier->active=="1")?'<span class="badge badge-success">Active</span>':'<span class="badge badge-primary">Inactive</span>'; ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('View'), ['action' => 'view', $carrier->id],['class'=>'btn btn-primary btn-sm']) ?>
                                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrier->id],['class'=>'btn btn-success btn-sm']) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrier->id], ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $carrier->id)]) ?>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
