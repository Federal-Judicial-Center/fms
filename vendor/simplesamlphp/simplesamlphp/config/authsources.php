<?php

$config = [
    /*
     * When multiple authentication sources are defined, you can specify one to use by default
     * in order to authenticate users. In order to do that, you just need to name it "default"
     * here. That authentication source will be used by default then when a user reaches the
     * SimpleSAMLphp installation from the web browser, without passing through the API.
     *
     * If you already have named your auth source with a different name, you don't need to change
     * it in order to use it as a default. Just create an alias by the end of this file:
     *
     * $config['default'] = &$config['your_auth_source'];
     */

    // This is a authentication source which handles admin authentication.
    'admin' => [
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ],

#    'fms-sp' => array(
#        'saml:SP',
#        'privatekey' => 'fms.pem',
#        'certificate' => 'fms.crt',
#        'entityID' => 'https://fms.fjc.dcn/',
#        'idp' => 'https://jenie.ao.dcn/isam/sps/ssofed/saml20',
#        'discoURL' => NULL,
#    ),

    'fms-sp' => array(
        'saml:SP',
        'privatekey' => 'fms.pem',
        'certificate' => 'fms.crt',
        'entityID' => 'https://fms.fjc.dcn',
        'idp' => 'https://sts.windows.net/d7865ce6-f701-4df3-92a8-fc7e369d0915/',
        'discoURL' => NULL,
    ),

];
