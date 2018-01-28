<?php

  if ( ! defined( 'ABSPATH' ) ) { exit; }
  $form_id = FLW_Rave_Pay::gen_rand_string();

?>

<div role="form" class="wpcf7" id="wpcf7-f23-p282-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form id="<?php echo $form_id ?>" class="flw-simple-pay-now-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="23">
<input type="hidden" name="_wpcf7_version" value="4.9.2">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f23-p282-o2">
<input type="hidden" name="_wpcf7_container_post" value="282">
</div>
<div id="notice"></div>
<div class="row element-bottom-40">

<?php if ( empty( $atts['email'] ) ) : ?>
<div class="col-md-4">
<div class="form-group">
            <label class="pay-now"><?php _e( 'Email', 'rave-pay' ) ?></label><br>
           <span class="wpcf7-form-control-wrap your-email"><input class="flw-form-input-text wpcf7-form-control wpcf7-validates-as-required form-control" id="flw-customer-email" type="email" placeholder="<?php _e( 'Email', 'rave-pay' ) ?>" required />
           </span>
        </div></div>
<?php endif; ?>

<?php if ( empty( $atts['amount'] ) ) : ?>
<div class="col-md-4">
<div class="form-group  text-left">
            <label class="pay-now"><?php _e( 'Amount', 'rave-pay' ); ?></label><br>
            <span class="wpcf7-form-control-wrap menu-133"><div class="select-wrap"><select name="menu-133" id="flw-amount" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="500">500</option><option value="1000">1000</option><option value="2000">2000</option><option value="5000">5000</option><option value="10000">10000</option><option value="15000">15000</option><option value="20000">20000</option><option value="100000">100000</option></select></div></span>
        </div></div>
<?php endif; ?>

<div class="col-md-4">
<div class="text-center element-top-40">
    <?php wp_nonce_field( 'flw-rave-pay-nonce', 'flw_sec_code' ); ?>
    <button value="submit" class='flw-pay-now-button' href='#'><?php _e( $btn_text, 'rave-pay' ) ?></button>
</div></div>
</div>
</form></div>