<?php
// This file was auto-generated from sdk-root/src/data/taxsettings/2018-05-10/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For custom endpoint with region not set and fips disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'Endpoint' => 'https://example.com', 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with fips enabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'Endpoint' => 'https://example.com', 'UseFIPS' => true, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'Endpoint' => 'https://example.com', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-east-1', ], ], ], 'url' => 'https://tax-fips.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-east-1', ], ], ], 'url' => 'https://tax-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-east-1', ], ], ], 'url' => 'https://tax.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-east-1', ], ], ], 'url' => 'https://tax.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'cn-northwest-1', ], ], ], 'url' => 'https://tax-fips.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'cn-northwest-1', ], ], ], 'url' => 'https://tax-fips.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'cn-northwest-1', ], ], ], 'url' => 'https://tax.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'cn-northwest-1', ], ], ], 'url' => 'https://tax.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-gov-west-1', ], ], ], 'url' => 'https://tax-fips.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-gov-west-1', ], ], ], 'url' => 'https://tax-fips.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-gov-west-1', ], ], ], 'url' => 'https://tax.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-gov-west-1', ], ], ], 'url' => 'https://tax.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-iso-east-1', ], ], ], 'url' => 'https://tax-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-iso-east-1', ], ], ], 'url' => 'https://tax.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-isob-east-1', ], ], ], 'url' => 'https://tax-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-isob-east-1', ], ], ], 'url' => 'https://tax.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'eu-isoe-west-1', ], ], ], 'url' => 'https://tax-fips.eu-isoe-west-1.cloud.adc-e.uk', ], ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-isoe-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'eu-isoe-west-1', ], ], ], 'url' => 'https://tax.eu-isoe-west-1.cloud.adc-e.uk', ], ], 'params' => [ 'Region' => 'eu-isoe-west-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-isof-south-1', ], ], ], 'url' => 'https://tax-fips.us-isof-south-1.csp.hci.ic.gov', ], ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isof-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingRegion' => 'us-isof-south-1', ], ], ], 'url' => 'https://tax.us-isof-south-1.csp.hci.ic.gov', ], ], 'params' => [ 'Region' => 'us-isof-south-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'Missing region', 'expect' => [ 'error' => 'Invalid Configuration: Missing Region', ], ], ], 'version' => '1.0',];
