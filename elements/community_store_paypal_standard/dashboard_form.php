<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
extract($vars);
?>
<div class="form-group">
    <label><?= t('Test Mode')?></label>
    <?= $form->select('paypalTestMode',array(false=>'Live',true=>'Test Mode'),$paypalTestMode); ?>
</div>
<div class="form-group">
    <?= $form->label('paypalCurrency',t("Currency")); ?>
    <?= $form->select('paypalCurrency',$currencies,$paypalCurrency?$paypalCurrency:'USD');?>
</div>
<div class="form-group">
    <label><?= t("PayPal E-mail")?></label>
    <input type="text" name="paypalEmail" value="<?= $paypalEmail?>" class="form-control">
</div>