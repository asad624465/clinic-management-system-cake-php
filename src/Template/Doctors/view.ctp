<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Doctor Details</h2>
           
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
                                            <th scope="row"><?= __('First Name') ?></th>
                                            <td><?= h($doctor->first_name) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Last Name') ?></th>
                                            <td><?= h($doctor->last_name) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Email') ?></th>
                                            <td><?= h($doctor->email) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Phone') ?></th>
                                            <td><?= h($doctor->phone) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Address') ?></th>
                                            <td><?= h($doctor->address) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Id') ?></th>
                                            <td><?= $this->Number->format($doctor->id) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Created') ?></th>
                                            <td><?= h($doctor->created) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Modified') ?></th>
                                            <td><?= h($doctor->modified) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Active') ?></th>
                                            <td><?= $doctor->active ? __('Yes') : __('No'); ?></td>
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
                                            <th scope="col"><?= __('Id') ?></th>
                                            <th scope="col"><?= __('Patient Name') ?></th>
                                            <th scope="col"><?= __('Phone') ?></th>
                                            <th scope="col"><?= __('Age') ?></th>
                                            <th scope="col"><?= __('Address') ?></th>
                                            <th scope="col"><?= __('City') ?></th>
                                            <th scope="col"><?= __('Zip Code') ?></th>
                                            <th scope="col"><?= __('Doctor Id') ?></th>
                                            <th scope="col"><?= __('Carrier Id') ?></th>
                                            <th scope="col"><?= __('Active') ?></th>
                                           
                                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                                        </tr>
                                         <tbody>
                                            <?php foreach ($doctor->patients as $patients): ?>
                                                <tr>
                                                    <td><?= h($patients->id) ?></td>
                                                    <td><?= h($patients->patient_name) ?></td>
                                                    <td><?= h($patients->phone) ?></td>
                                                    <td><?= h($patients->age) ?></td>
                                                    <td><?= h($patients->address) ?></td>
                                                    <td><?= h($patients->city) ?></td>
                                                    <td><?= h($patients->zip_code) ?></td>
                                                    <td><?= h($patients->doctor_id) ?></td>
                                                    <td><?= h($patients->carrier_id) ?></td>
                                                    <td><?= h($patients->active) ?></td>
                                                    <td class="actions">
                                                        <?= $this->Html->link(__('View'), ['controller' => 'Patients', 'action' => 'view', $patients->id]) ?>
                                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Patients', 'action' => 'edit', $patients->id]) ?>
                                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patients', 'action' => 'delete', $patients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patients->id)]) ?>
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
