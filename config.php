<?php
/**
 * Build a configuration array to pass to `Hybridauth\Hybridauth`
 */

$config = [
    /**
     * Set the Authorization callback URL to https://path/to/hybridauth/examples/example_06/callback.php.
     * Understandably, you need to replace 'path/to/hybridauth' with the real path to this script.
     */
    'callback' => 'http://localhost/oauth-sample/callback.php',
    'providers' => [
        'Microsoft' => [
            'enabled' => true,
            'keys' => [
                'id' => '4f83587b-a4f9-4421-a451-e9de456f3c6b   ',
                'secret' => '21fe2dfd-6a59-455d-969b-193822b904f9',
            ],
            'scope' => 'User.Read',  // Example scope
            'authorize_url_parameters' => [
                'response_type' => 'code',
                'prompt' => 'select_account',  // To always ask the user to choose an account
                'tenant' => '07d6494d-657e-470b-a9c0-30774fae045a',  // Set the tenant ID here
            ],
            'tenant' => '07d6494d-657e-470b-a9c0-30774fae045a', // This limits to the specific Azure AD tenant
        ],        
    ],
];
