<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient $patient
 */
?>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <br />
                <?= $this->Form->create($patient) ?>
                <fieldset>
                    <legend><?= __('Add Patient') ?></legend>
                    <?php
                        echo $this->Form->control('patient_name');
                        echo $this->Form->control('phone');
                        echo $this->Form->control('age');
                        echo $this->Form->control('address');
                        echo $this->Form->control('city');
                        echo $this->Form->control('zip_code');
                        echo $this->Form->control('doctor_id');
                        echo $this->Form->control('carrier_id',['options' => $carriers]);
                        echo $this->Form->control('active');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>