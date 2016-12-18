<?php

namespace Concrete\Package\CommunityStorePaypalStandard;

use Package;
use Route;
use Whoops\Exception\ErrorException;
use \Concrete\Package\CommunityStore\Src\CommunityStore\Payment\Method as PaymentMethod;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{
    protected $pkgHandle = 'community_store_paypal_standard';
    protected $appVersionRequired = '5.7.2';
    protected $pkgVersion = '1.0';

    public function getPackageDescription()
    {
        return t("Paypal Standard Payment Method for Community Store");
    }

    public function getPackageName()
    {
        return t("Paypal Payment Method");
    }

    public function install()
    {
        $installed = Package::getInstalledHandles();
        if(!(is_array($installed) && in_array('community_store',$installed)) ) {
            throw new ErrorException(t('This package requires that Community Store be installed'));
        } else {
            $pkg = parent::install();
            $pm = new PaymentMethod();
            $pm->add('community_store_paypal_standard','Paypal Standard',$pkg);
        }

    }
    public function uninstall()
    {
        $pm = PaymentMethod::getByHandle('community_store_paypal_standard');
        if ($pm) {
            $pm->delete();
        }
        $pkg = parent::uninstall();
    }

    public function on_start() {
        Route::register('/checkout/paypalresponse','\Concrete\Package\CommunityStorePaypalStandard\Src\CommunityStore\Payment\Methods\CommunityStorePaypalStandard\CommunityStorePaypalStandardPaymentMethod::validateCompletion');
    }
}
?>