# community_store_paypal_standard
Paypal Standard payments for Community Store for concrete5

Install Community Store First.

**Please Note:** IPN callbacks using sandbox/testing mode do not work correctly due to PayPal's broken sandbox. In testing mode orders can be placed and paid via PayPal, but the IPN callback to inform the store of the payment will not complete successfully.

To confirm the integration is working it is recommended to try a low value real transaction.
