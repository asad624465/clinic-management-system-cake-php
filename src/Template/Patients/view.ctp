<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Patient Details</h2>
            <ul class="nav navbar-right panel_toolbox">
                <a href="<?php echo $this->Url->build(['action'=>'index']);?>" class="btn btn-primary btn-sm">Back to Patient list</a>
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
                                        <tr>
                                            <th scope="row"><?= __('Patient Name') ?></th>
                                            <td><?= h($patient->patient_name) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Phone') ?></th>
                                            <td><?= h($patient->phone) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Age') ?></th>
                                            <td><?= h($patient->age) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Address') ?></th>
                                            <td><?= h($patient->address) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('City') ?></th>
                                            <td><?= h($patient->city) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Zip Code') ?></th>
                                            <td><?= h($patient->zip_code) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Doctor Name') ?></th>
                                            <td><?= h($patient->doctor->first_name.' '.$patient->doctor->last_name) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Carrier') ?></th>
                                            <td><?= h($patient->carrier->carriers_name) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><?= __('Active') ?></th>
                                            <td><?= $patient->active ? __('Yes') : __('No'); ?></td>
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