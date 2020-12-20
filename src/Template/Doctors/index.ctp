<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor[]|\Cake\Collection\CollectionInterface $doctors
 */
?>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Doctor List</h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="<?php echo $this->Url->build(['action'=>'add']);?>" class="btn btn-primary btn-sm">Add new doctor</a>
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
                                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                            <?php foreach ($doctors as $doctor): ?>
                                            <tr>
                                                <td><?= $this->Number->format($doctor->id) ?></td>
                                                <td><?= h($doctor->first_name) ?></td>
                                                <td><?= h($doctor->last_name) ?></td>
                                                <td><?= h($doctor->email) ?></td>
                                                <td><?= h($doctor->phone) ?></td>
                                                <td><?= h($doctor->address) ?></td>
                                                <td><?= ($doctor->active=="1")?'<span class="badge badge-success">Active</span>':'<span class="badge badge-primary">Inactive</span>'; ?></td>
                                                <td class="actions">
                                                    <a href="<?php echo $this->Url->build(['action' => 'view', $doctor->id]);?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                                    <a href="<?php echo $this->Url->build(['action' => 'edit', $doctor->id]);?>" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                                                    <?= $this->Form->postLink(__('Del'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)],['class'=>'btn btn-danger btn-sm']) ?>
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
