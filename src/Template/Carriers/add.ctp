<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrier $carrier
 */
?>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            
            <div class="x_content">
                <br />
                <?= $this->Form->create($carrier) ?>
                    <fieldset>
                        <legend><?= __('Add Carrier') ?></legend>
                        <?php
                            echo $this->Form->control('carriers_name');
                            echo $this->Form->control('carriers_code');
                            echo $this->Form->control('active');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>