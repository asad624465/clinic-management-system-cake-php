<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient[]|\Cake\Collection\CollectionInterface $patients
 */
?>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Doctor List</h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="<?php echo $this->Url->build(['action'=>'add']);?>" class="btn btn-primary">Add new Patient</a>
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
                                                <th scope="col"><?= $this->Paginator->sort('patient_name') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('zip_code') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('doctor_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('carrier_id') ?></th>
                                                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($patients as $patient): ?>
                                            <tr>
                                                <td><?= $this->Number->format($patient->id) ?></td>
                                                <td><?= h($patient->patient_name) ?></td>
                                                <td><?= h($patient->phone) ?></td>
                                                <td><?= h($patient->age) ?></td>
                                                <td><?= h($patient->address) ?></td>
                                                <td><?= h($patient->city) ?></td>
                                                <td><?= h($patient->zip_code) ?></td>
                                                <td><?= h($patient->doctor->first_name.' '.$patient->doctor->last_name) ?></td>
                                                <td><?= h($patient->carrier->carriers_name) ?></td></td>
                                                <td><?= ($patient->active=="1")?'<span class="badge badge-success">Active</span>':'<span class="badge badge-primary">Inactive</span>'; ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('View'), ['action' => 'view', $patient->id],['class'=>'btn btn-primary btn-sm']) ?>
                                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $patient->id],['class'=>'btn btn-success btn-sm']) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $patient->id], ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?>
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
