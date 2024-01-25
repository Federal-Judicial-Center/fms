<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://ijenie.ao.dcn/fim/sps/fjc/saml20'] = array (
  'entityid' => 'https://ijenie.ao.dcn/fim/sps/fjc/saml20',
  'name' => 
  array (
    'en' => 'US Courts-iJENIE',
  ),
  'description' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationName' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'US Courts',
  ),
  'url' => 
  array (
    'en' => 'ijenie.ao.dcn',
  ),
  'OrganizationURL' => 
  array (
    'en' => 'ijenie.ao.dcn',
  ),
  'contacts' => 
  array (
    0 => 
    array (
      'contactType' => 'technical',
      'company' => 'US Courts',
      'givenName' => 'Pankaj',
      'surName' => 'Chopra',
      'emailAddress' => 
      array (
        0 => 'pankaj_chopra@ao.uscourts.gov',
      ),
      'telephoneNumber' => 
      array (
        0 => '2025022154',
      ),
    ),
  ),
  'metadata-set' => 'saml20-idp-remote',
  'redirect.sign' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ijenie.ao.dcn/fim/sps/fjc/saml20/login',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIICjDCCAfWgAwIBAgIIEtmCTc3AIugwDQYJKoZIhvcNAQEFBQAwdzELMAkGA1UEBhMCVVMxFjAUBgNVBAgTDVNUPVdhc2hpbmd0b24xDTALBgNVBAcTBEw9REMxFDASBgNVBAoTC089VVMgQ291cnRzMRAwDgYDVQQLEwdPVT1TRFNEMRkwFwYDVQQDExBDTj10amVuaWUuYW8uZGNuMB4XDTEzMDExNTE0MjcxM1oXDTIzMDExMzE0MjcxM1owdzELMAkGA1UEBhMCVVMxFjAUBgNVBAgTDVNUPVdhc2hpbmd0b24xDTALBgNVBAcTBEw9REMxFDASBgNVBAoTC089VVMgQ291cnRzMRAwDgYDVQQLEwdPVT1TRFNEMRkwFwYDVQQDExBDTj10amVuaWUuYW8uZGNuMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDF/g6519Uh35sbhNjTaJTuI+OdNqYPqpz+CCIRAzPI2wyRAhrllbEhEjy7GFg44Hdk1kwbk24D6RopO1kMjfAxm+WA1ka0pqEGrCLQh3MzRHmgbxz4Bi7wsmnWumjSOlS249IJstt7OnyetpplEkLhzk/bmrvuHKql8vzezGHuAQIDAQABoyEwHzAdBgNVHQ4EFgQUF6vjaA9zVK8Kj6j65gUzisYE4SIwDQYJKoZIhvcNAQEFBQADgYEADCoRm2+65omeEyMYWC6B3A3rC/IVyycdaXv8p9rT7OuJrzEm0k48f5IYca5/6KP1/E0yO7Zc9PyLCQRNibum73frS1ldbby8WLuD8qtCHXM1+Iqlnu0t8/CF20AwRiK/yUkcjj7u9YCfRhDTuh0XYa3skFIAqWBEAKoDEb1XEyA=',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIICjDCCAfWgAwIBAgIIEtmCTc3AIugwDQYJKoZIhvcNAQEFBQAwdzELMAkGA1UEBhMCVVMxFjAUBgNVBAgTDVNUPVdhc2hpbmd0b24xDTALBgNVBAcTBEw9REMxFDASBgNVBAoTC089VVMgQ291cnRzMRAwDgYDVQQLEwdPVT1TRFNEMRkwFwYDVQQDExBDTj10amVuaWUuYW8uZGNuMB4XDTEzMDExNTE0MjcxM1oXDTIzMDExMzE0MjcxM1owdzELMAkGA1UEBhMCVVMxFjAUBgNVBAgTDVNUPVdhc2hpbmd0b24xDTALBgNVBAcTBEw9REMxFDASBgNVBAoTC089VVMgQ291cnRzMRAwDgYDVQQLEwdPVT1TRFNEMRkwFwYDVQQDExBDTj10amVuaWUuYW8uZGNuMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDF/g6519Uh35sbhNjTaJTuI+OdNqYPqpz+CCIRAzPI2wyRAhrllbEhEjy7GFg44Hdk1kwbk24D6RopO1kMjfAxm+WA1ka0pqEGrCLQh3MzRHmgbxz4Bi7wsmnWumjSOlS249IJstt7OnyetpplEkLhzk/bmrvuHKql8vzezGHuAQIDAQABoyEwHzAdBgNVHQ4EFgQUF6vjaA9zVK8Kj6j65gUzisYE4SIwDQYJKoZIhvcNAQEFBQADgYEADCoRm2+65omeEyMYWC6B3A3rC/IVyycdaXv8p9rT7OuJrzEm0k48f5IYca5/6KP1/E0yO7Zc9PyLCQRNibum73frS1ldbby8WLuD8qtCHXM1+Iqlnu0t8/CF20AwRiK/yUkcjj7u9YCfRhDTuh0XYa3skFIAqWBEAKoDEb1XEyA=',
    ),
  ),
);

$metadata['https://ijenie.ao.dcn/isam/sps/ssofed/saml20'] = array (
  'entityid' => 'https://ijenie.ao.dcn/isam/sps/ssofed/saml20',
  'description' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationName' => 
  array (
    'en' => 'US Courts',
  ),
  'name' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'US Courts',
  ),
  'url' => 
  array (
    'en' => '',
  ),
  'OrganizationURL' => 
  array (
    'en' => '',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://ijenie.ao.dcn/isam/sps/ssofed/saml20/login',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    1 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    3 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDJDCCAgygAwIBAgIIJxEaz3xpA44wDQYJKoZIhvcNAQELBQAwMDELMAkGA1UEBhMCVVMxEjAQBgNVBAoTCVVTIENvdXJ0czENMAsGA1UEAxMESUFNUzAeFw0xODA2MTAyMTM4MzJaFw0yODA2MDgyMTM4MzJaMDAxCzAJBgNVBAYTAlVTMRIwEAYDVQQKEwlVUyBDb3VydHMxDTALBgNVBAMTBElBTVMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC2DpGjU5sEjgScBHCYaHn47YhGtJTjdUOIkOjQRNg6j9AHiBG/i8Ot5UXxSarXBiqtw2nJHhV5TxKt2lu59hF9D0Yr8y4qHyPFwJYClTKKErXJHCiyCGcUUIpxyg428lr5RRd5bmTqITn3SrUrW+fs5v3Lh2yU8rvJSrQHyeTofsTZudwPwEN3dR1fp1h6Wf6ifgaDB1ehVIkUxPmCjJxznRRpJh/8KhvUPqQXUcHjh/u57CceG71ZwCDQrtI/LZXt/e3CweoHLoX/AMjJ/jGUINXZqBfxj6sKJlQBNyc5BS8K4+EH03PXHXqMrMU8PLLAM5aLQJQzdrKeq9xF57vlAgMBAAGjQjBAMB0GA1UdDgQWBBTELBduHUEMcTFBIVnE4WK2EXnhZDAfBgNVHSMEGDAWgBTELBduHUEMcTFBIVnE4WK2EXnhZDANBgkqhkiG9w0BAQsFAAOCAQEAj7xpBSwD821bTZWJJ8AO2fHI7bdZGjL41kTHGA3x8IJcqo2IySt7tgitTg/lHMCx55JI+oZtcIKjS6gk6lWeOPVs0s0Oir3Jc+3i46PEXmDtt+qmlTKLOBjOmwQrP5Eq2sYiQIkurtYcG46o7xbwU0iuvAUrvjh5OF13k2Z1h76AwWtgRAiBrB+tb3A03oyDJg0ILYb8KWO+cjESEuGVeZd9Pz3n7GIwXQVDoDszI6YpFrLQjK8X6lZAXkMMTAhtxeDSYWX69Sqg7kBp5iWXIXClvQXYOZkobyEnU9Qb+yzGeJogfpCnTeGrdbBtTie+7LYXl3AveCYnVjzcoApzuw==',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDJDCCAgygAwIBAgIIJxEaz3xpA44wDQYJKoZIhvcNAQELBQAwMDELMAkGA1UEBhMCVVMxEjAQBgNVBAoTCVVTIENvdXJ0czENMAsGA1UEAxMESUFNUzAeFw0xODA2MTAyMTM4MzJaFw0yODA2MDgyMTM4MzJaMDAxCzAJBgNVBAYTAlVTMRIwEAYDVQQKEwlVUyBDb3VydHMxDTALBgNVBAMTBElBTVMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQC2DpGjU5sEjgScBHCYaHn47YhGtJTjdUOIkOjQRNg6j9AHiBG/i8Ot5UXxSarXBiqtw2nJHhV5TxKt2lu59hF9D0Yr8y4qHyPFwJYClTKKErXJHCiyCGcUUIpxyg428lr5RRd5bmTqITn3SrUrW+fs5v3Lh2yU8rvJSrQHyeTofsTZudwPwEN3dR1fp1h6Wf6ifgaDB1ehVIkUxPmCjJxznRRpJh/8KhvUPqQXUcHjh/u57CceG71ZwCDQrtI/LZXt/e3CweoHLoX/AMjJ/jGUINXZqBfxj6sKJlQBNyc5BS8K4+EH03PXHXqMrMU8PLLAM5aLQJQzdrKeq9xF57vlAgMBAAGjQjBAMB0GA1UdDgQWBBTELBduHUEMcTFBIVnE4WK2EXnhZDAfBgNVHSMEGDAWgBTELBduHUEMcTFBIVnE4WK2EXnhZDANBgkqhkiG9w0BAQsFAAOCAQEAj7xpBSwD821bTZWJJ8AO2fHI7bdZGjL41kTHGA3x8IJcqo2IySt7tgitTg/lHMCx55JI+oZtcIKjS6gk6lWeOPVs0s0Oir3Jc+3i46PEXmDtt+qmlTKLOBjOmwQrP5Eq2sYiQIkurtYcG46o7xbwU0iuvAUrvjh5OF13k2Z1h76AwWtgRAiBrB+tb3A03oyDJg0ILYb8KWO+cjESEuGVeZd9Pz3n7GIwXQVDoDszI6YpFrLQjK8X6lZAXkMMTAhtxeDSYWX69Sqg7kBp5iWXIXClvQXYOZkobyEnU9Qb+yzGeJogfpCnTeGrdbBtTie+7LYXl3AveCYnVjzcoApzuw==',
    ),
  ),
);

$metadata['https://sjenie.ao.dcn/isam/sps/ssofed/saml20'] = array (
  'entityid' => 'https://sjenie.ao.dcn/isam/sps/ssofed/saml20',
  'description' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationName' => 
  array (
    'en' => 'US Courts',
  ),
  'name' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'US Courts',
  ),
  'url' => 
  array (
    'en' => '',
  ),
  'OrganizationURL' => 
  array (
    'en' => '',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://sjenie.ao.dcn/isam/sps/ssofed/saml20/login',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    1 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    3 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDJDCCAgygAwIBAgIIMY17mkq5IeAwDQYJKoZIhvcNAQELBQAwMDELMAkGA1UEBhMCVVMxEjAQBgNVBAoTCVVTIENvdXJ0czENMAsGA1UEAxMESUFNUzAeFw0xODA5MTYxNDQxMzlaFw0yODA5MTQxNDQxMzlaMDAxCzAJBgNVBAYTAlVTMRIwEAYDVQQKEwlVUyBDb3VydHMxDTALBgNVBAMTBElBTVMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCrxDuXM/YqHIqetqftm0uOrCiZHjdlWPoOSuzSittPX7c42zLpvjqbu8gF/SGZOSjSD83Uc7scb8q6YszmEMiZI/zLTX0zJqgeEmPpVeEGVFI74kPAdoJPDyazaTFPBetDVILedj0+QR7i2WxYrSPvHCK7Vtvwq5HYD9lZWt+pdTKBXdODavXpTULdKE5sk3NYTRfiolqpdN2vpTgM4P9LrOMsuAdHKNKfCBoQJGW7OTAfBUONJzfdkd2EzqCTwWSEgBepaMlqyFolR203BA1EQ1S9+v4qf687xgW6dBE4F6XYa36ezwMXyJbkJA/I8Qng6TfmNfy0xhwJIcqHCBfNAgMBAAGjQjBAMB0GA1UdDgQWBBTxVusMs2u47HC1Igv42AlnbXbpzTAfBgNVHSMEGDAWgBTxVusMs2u47HC1Igv42AlnbXbpzTANBgkqhkiG9w0BAQsFAAOCAQEAGzxpmJ/ecGj4DG4xwRJUcLfxmoNZ7xe7OjOXwyfUeSCmtACbI81/I3zlBRtFfPi2Z69ctM8pisYcVn1L3Dh42ZgZk0H7RMSSzMFbLzkkDuT/sGJMTjZMX/fWLQT0ZS0GBC6XXsJG79SAqqIAjPA254D2MbSfEhyPknA0TfvukRX0LBwL9k1A/i/eLhQ5aUFEpToHjNJj2DzHY6snoE3FzpUlBoPbPFyp3NjK0dKrn518KbfuOMzb5LBFhJeoJ4Ny6rJnDZo+ztyrxTzeYk25jOWJ4HmfleOob5ElguZZbVnZ/AFNFAtky6c7A6Riv9nFbYvfYNramWRBg0SvIP6HUg==',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDJDCCAgygAwIBAgIIMY17mkq5IeAwDQYJKoZIhvcNAQELBQAwMDELMAkGA1UEBhMCVVMxEjAQBgNVBAoTCVVTIENvdXJ0czENMAsGA1UEAxMESUFNUzAeFw0xODA5MTYxNDQxMzlaFw0yODA5MTQxNDQxMzlaMDAxCzAJBgNVBAYTAlVTMRIwEAYDVQQKEwlVUyBDb3VydHMxDTALBgNVBAMTBElBTVMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCrxDuXM/YqHIqetqftm0uOrCiZHjdlWPoOSuzSittPX7c42zLpvjqbu8gF/SGZOSjSD83Uc7scb8q6YszmEMiZI/zLTX0zJqgeEmPpVeEGVFI74kPAdoJPDyazaTFPBetDVILedj0+QR7i2WxYrSPvHCK7Vtvwq5HYD9lZWt+pdTKBXdODavXpTULdKE5sk3NYTRfiolqpdN2vpTgM4P9LrOMsuAdHKNKfCBoQJGW7OTAfBUONJzfdkd2EzqCTwWSEgBepaMlqyFolR203BA1EQ1S9+v4qf687xgW6dBE4F6XYa36ezwMXyJbkJA/I8Qng6TfmNfy0xhwJIcqHCBfNAgMBAAGjQjBAMB0GA1UdDgQWBBTxVusMs2u47HC1Igv42AlnbXbpzTAfBgNVHSMEGDAWgBTxVusMs2u47HC1Igv42AlnbXbpzTANBgkqhkiG9w0BAQsFAAOCAQEAGzxpmJ/ecGj4DG4xwRJUcLfxmoNZ7xe7OjOXwyfUeSCmtACbI81/I3zlBRtFfPi2Z69ctM8pisYcVn1L3Dh42ZgZk0H7RMSSzMFbLzkkDuT/sGJMTjZMX/fWLQT0ZS0GBC6XXsJG79SAqqIAjPA254D2MbSfEhyPknA0TfvukRX0LBwL9k1A/i/eLhQ5aUFEpToHjNJj2DzHY6snoE3FzpUlBoPbPFyp3NjK0dKrn518KbfuOMzb5LBFhJeoJ4Ny6rJnDZo+ztyrxTzeYk25jOWJ4HmfleOob5ElguZZbVnZ/AFNFAtky6c7A6Riv9nFbYvfYNramWRBg0SvIP6HUg==',
    ),
  ),
);

$metadata['https://jenie.ao.dcn/isam/sps/ssofed/saml20'] = array (
  'entityid' => 'https://jenie.ao.dcn/isam/sps/ssofed/saml20',
  'description' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationName' => 
  array (
    'en' => 'US Courts',
  ),
  'name' => 
  array (
    'en' => 'US Courts',
  ),
  'OrganizationDisplayName' => 
  array (
    'en' => 'US Courts',
  ),
  'url' => 
  array (
    'en' => '',
  ),
  'OrganizationURL' => 
  array (
    'en' => '',
  ),
  'contacts' => 
  array (
  ),
  'metadata-set' => 'saml20-idp-remote',
  'sign.authnrequest' => true,
  'SingleSignOnService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'https://jenie.ao.dcn/isam/sps/ssofed/saml20/login',
    ),
  ),
  'SingleLogoutService' => 
  array (
  ),
  'ArtifactResolutionService' => 
  array (
  ),
  'NameIDFormats' => 
  array (
    0 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent',
    1 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    2 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    3 => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
  ),
  'keys' => 
  array (
    0 => 
    array (
      'encryption' => false,
      'signing' => true,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDJDCCAgygAwIBAgIIDEotzqd1bsEwDQYJKoZIhvcNAQELBQAwMDELMAkGA1UEBhMCVVMxEjAQBgNVBAoTCVVTIENvdXJ0czENMAsGA1UEAxMESUFNUzAeFw0xODEwMTIwMTI1MDJaFw0yODEwMTAwMTI1MDJaMDAxCzAJBgNVBAYTAlVTMRIwEAYDVQQKEwlVUyBDb3VydHMxDTALBgNVBAMTBElBTVMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDSAgXBDPu8AOku0dXIhIjEHGW8Q46E4UpcdBg0NZqHU6C35HQnhItHEhk+wE7rPMpEkSKymaR3hkpJcP7lbpWBYnLcE1d2MX82fTBo3EYhtSsXvniCiUb4WE4IRRUVwD3IFwpB4JI8i+Rk8siY3SN7FY7aInWxgegM1kEn2ndVwXloMJBxmu+wdOng5MlpYR0bQv0/EQc+qt3I1PNaaAcZHuPjBP1XJrofpxCekrkYy2NpOcOkZmy66Ws/dyzs13diL5BTEom8wDwI3eRADZ7wJTRIbDk4xxK5X3h+wFz740tEpWPU4xm2jkYRrM5L8gzyPwUtMVqkuK5+jOGUnTG3AgMBAAGjQjBAMB0GA1UdDgQWBBSUs81v+wpOsU6zzKq1VqjU75lpDDAfBgNVHSMEGDAWgBSUs81v+wpOsU6zzKq1VqjU75lpDDANBgkqhkiG9w0BAQsFAAOCAQEANKqgCG9B+o9yqrb9NWCiHLR9PAJDfO6HACZgQh8n9xKZ1FaQp9Hj3ByXesMCKiydWBmwZSyi/5YUG7sTo3ECrXhqW0watutaUxhAL3OhDon74k1tzLqq2xzUazjUXVVbrBAHr0V1Eqa/p8K7cJ/bzq2YUukMD2JIlV+cOaYPASh5fqtFuI2y4yTPYr5TXHZN9TlHlStm2zhR5uljJmBptOudS6og5gyTnXTueWH3aEfeMLYTiaF4/n3TujSphgmocQzQGx/14MWZ0U356KF9qYEoYVbrIj7nUcodpbU8EYCxMZVOImbBKeV8lJ8i2Uml9lcdA+StWjE5NKkAjXId7w==',
    ),
    1 => 
    array (
      'encryption' => true,
      'signing' => false,
      'type' => 'X509Certificate',
      'X509Certificate' => 'MIIDJDCCAgygAwIBAgIIDEotzqd1bsEwDQYJKoZIhvcNAQELBQAwMDELMAkGA1UEBhMCVVMxEjAQBgNVBAoTCVVTIENvdXJ0czENMAsGA1UEAxMESUFNUzAeFw0xODEwMTIwMTI1MDJaFw0yODEwMTAwMTI1MDJaMDAxCzAJBgNVBAYTAlVTMRIwEAYDVQQKEwlVUyBDb3VydHMxDTALBgNVBAMTBElBTVMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDSAgXBDPu8AOku0dXIhIjEHGW8Q46E4UpcdBg0NZqHU6C35HQnhItHEhk+wE7rPMpEkSKymaR3hkpJcP7lbpWBYnLcE1d2MX82fTBo3EYhtSsXvniCiUb4WE4IRRUVwD3IFwpB4JI8i+Rk8siY3SN7FY7aInWxgegM1kEn2ndVwXloMJBxmu+wdOng5MlpYR0bQv0/EQc+qt3I1PNaaAcZHuPjBP1XJrofpxCekrkYy2NpOcOkZmy66Ws/dyzs13diL5BTEom8wDwI3eRADZ7wJTRIbDk4xxK5X3h+wFz740tEpWPU4xm2jkYRrM5L8gzyPwUtMVqkuK5+jOGUnTG3AgMBAAGjQjBAMB0GA1UdDgQWBBSUs81v+wpOsU6zzKq1VqjU75lpDDAfBgNVHSMEGDAWgBSUs81v+wpOsU6zzKq1VqjU75lpDDANBgkqhkiG9w0BAQsFAAOCAQEANKqgCG9B+o9yqrb9NWCiHLR9PAJDfO6HACZgQh8n9xKZ1FaQp9Hj3ByXesMCKiydWBmwZSyi/5YUG7sTo3ECrXhqW0watutaUxhAL3OhDon74k1tzLqq2xzUazjUXVVbrBAHr0V1Eqa/p8K7cJ/bzq2YUukMD2JIlV+cOaYPASh5fqtFuI2y4yTPYr5TXHZN9TlHlStm2zhR5uljJmBptOudS6og5gyTnXTueWH3aEfeMLYTiaF4/n3TujSphgmocQzQGx/14MWZ0U356KF9qYEoYVbrIj7nUcodpbU8EYCxMZVOImbBKeV8lJ8i2Uml9lcdA+StWjE5NKkAjXId7w==',
    ),
  ),
);

$metadata['https://sts.windows.net/d7865ce6-f701-4df3-92a8-fc7e369d0915/'] = [
    'entityid' => 'https://sts.windows.net/d7865ce6-f701-4df3-92a8-fc7e369d0915/',
    'contacts' => [],
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/d7865ce6-f701-4df3-92a8-fc7e369d0915/saml2',
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://login.microsoftonline.com/d7865ce6-f701-4df3-92a8-fc7e369d0915/saml2',
        ],
    ],
    'SingleLogoutService' => [
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/d7865ce6-f701-4df3-92a8-fc7e369d0915/saml2',
        ],
    ],
    'ArtifactResolutionService' => [],
    'NameIDFormats' => [],
    'keys' => [
        [
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIC8DCCAdigAwIBAgIQItYKR8w12K5PINLvda9/CjANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yNDAxMjIyMDE2MzBaFw0yNzAxMjIyMDE2MzBaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA90sjWcRlnVK9NN/yRegRYQRARQeKndUUNTY1J53vKPDFylpO/oOW/BJXwRAHzI33ArGiPgY8GlYF9ozdFy5ol25OiXAmr0Rnr15We+3lebOH1cjMAL2EDTGTB+2a3YIR0om6kV+4LNuii+m2+UyOJIH3TDDCeuIla4e0YIrqgLmiYmwUxJW+uqWw3z0vix6kXMEE9bCI6hH9Fja9l1Kgo7xLVkaFPrI4ZxmrWcoQPABWpttjmLn35SVAuZMmpX/WP927VZMVgeabgjlDYnlXd2y5cl0y7NvbxVxdS4R2a1L9ZM/tNjf+X/4DDAcLcnOjOrrNz3p2bZS3+vBYoZy6yQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQAXcEz3EPBwNTfX6zWo05M4K6VfqoJfGMQcnge918c/Cn1aT/U1WEW0a02h5SD4Oou6++GLVgCVZ6cegeNTozldZmZ38GGmIySLcST+keQ0UOn53wCjn5C9Wo0QAbGYhYWrHxSq7e8xN9VHiNE6mz7JNK2hEPpUv+zhnQ9IhnaLWngh9h9xFU7ChHXJB06Ihg2qLC7TrqAyRSjLpIzihPtWDmvuwOItU9bVW3RWH16u7CSNszaJpq+24JiSH0XsSvXoXve2DLa8pJVBEJ4Bkwcp7YwM/JiBobXSyyAAQWAQMp2uPENB/A1+aMC4HP3/nLCCEzKKT0NJ5qM6oCcPrCtN',
        ],
    ],
];
