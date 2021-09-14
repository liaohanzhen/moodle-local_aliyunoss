<?php
// This file was auto-generated from sdk-root/src/data/endpoints.json
return [ 'partitions' => [ 
    [ 'defaults' => [ 
        'hostname' => '{service}.{region}.{dnsSuffix}', 
        'protocols' => [ 'https', ], 
        'signatureVersions' => [ 'v4', ], ], 
    'dnsSuffix' => 'aliyuncs.com', 
    'partition' => 'cs', 
    'partitionName' => 'Aliyun Standard', 
    'regionRegex' => '^(us|eu|ap|sa|ca|me)\\-\\w+\\-\\d+$', 
    'regions' => [ 
        'oss-cn-beijing' => [ 'description' => '华北2 (北京)', ], 
        'oss-cn-hangzhou' => [ 'description' => '华东1 (杭州)', ], ], 
    'services' => [],
    ], ], ];
