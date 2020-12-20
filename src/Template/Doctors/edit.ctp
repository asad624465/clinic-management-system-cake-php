<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctor $doctor
 */
?>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            
            <div class="x_content">
                <br />
                 <?= $this->Form->create($doctor) ?>
                    <fieldset>
                        <legend><?= __('Edit Doctor') ?></legend>
                        <?php
                            echo $this->Form->control('first_name');
                            echo $this->Form->control('last_name');
                            echo $this->Form->control('email');
                            echo $this->Form->control('phone');
                            echo $this->Form->control('address');
                            echo $this->Form->control('active');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>