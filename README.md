# Community Store Paypal Standard
Paypal Standard payments for Community Store for Concrete CMS

This is considred a legacy payment method, and is not recommended for new installations. The 'Paypal Checkout' payment method is recommended instead.

Install Community Store First.

**Please Note:** IPN callbacks using sandbox/testing mode do not work correctly due to PayPal's broken sandbox. In testing mode orders can be placed and paid via PayPal, but the IPN callback to inform the store of the payment will not complete successfully.

To confirm the integration is working it is recommended to try a low value real transaction.
