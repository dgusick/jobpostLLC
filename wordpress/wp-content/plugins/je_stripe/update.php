<?php 

require_once dirname(__FILE__) . '/inc/inc.update.php';

class JE_Stripe_Update extends ET_Plugin_Updater{
	const VERSION = '1.3.1';

	// setting up updater
	public function __construct(){
		$this->product_slug 	= plugin_basename( dirname(__FILE__) . '/stripe.php' );
		$this->slug 			= 'je_stripe';
		$this->license_key 		= get_option('et_license_key', '');
		$this->current_version 	= self::VERSION;
		$this->update_path 		= 'http://www.enginethemes.com/?do=product-update&product=je_stripe&type=plugin';

		parent::__construct();
	}
}
new JE_Stripe_Update();

?>