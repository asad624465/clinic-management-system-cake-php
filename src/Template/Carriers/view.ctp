<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Carriers Details</h2>
           
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
                                       <tr>
                                            <th scope="row"><?= __('Carriers Name') ?></th>
                                            <td><?= h($carrier->carriers_name) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Carriers Code') ?></th>
                                            <td><?= h($carrier->carriers_code) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Active') ?></th>
                                            <td><?= $carrier->active ? __('Yes') : __('No'); ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Related Patients</h2>
           
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
                                        <tr>
                                            <th scope="col" style="width:5%"><?= __('Id') ?></th>
                                            <th scope="col" style="width:10%"><?= __('Patient Name') ?></th>
                                            <th scope="col" style="width:10%"><?= __('Phone') ?></th>
                                            <th scope="col" style="width:10%"><?= __('Age') ?></th>
                                            <th scope="col" style="width:15%"><?= __('Address') ?></th>
                                            <th scope="col" style="width:10%"><?= __('City') ?></th>
                                            <th scope="col" style="width:5%"><?= __('Zip Code') ?></th>
                                            <th scope="col" style="width:10%"><?= __('Active') ?></th>
                                            <th scope="col" style="width:25%" class="actions"><?= __('Actions') ?></th>
                                        </tr>
                                         <tbody>
                                            <?php foreach ($carrier->patients as $patients): ?>
                                            <tr>
                                                <td><?= h($patients->id) ?></td>
                                                <td><?= h($patients->patient_name) ?></td>
                                                <td><?= h($patients->phone) ?></td>
                                                <td><?= h($patients->age) ?></td>
                                                <td><?= h($patients->address) ?></td>
                                                <td><?= h($patients->city) ?></td>
                                                <td><?= h($patients->zip_code) ?></td>
                                                <td><?= ($patients->active=="1")?'<span class="badge badge-success">Active</span>':'<span class="badge badge-primary">Inactive</span>'; ?></td>
                                                <td class="actions">
                                                    <?= $this->Html->link(__('View'), ['controller' => 'Patients', 'action' => 'view', $patients->id],['class'=>'btn btn-info btn-sm']) ?>
                                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Patients', 'action' => 'edit', $patients->id],['class'=>'btn btn-primary btn-sm']) ?>
                                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patients', 'action' => 'delete', $patients->id], ['class'=>'btn btn-danger btn-sm','confirm' => __('Are you sure you want to delete # {0}?', $patients->id)]) ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

