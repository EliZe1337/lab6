<?php return array(
    'root' => array(
        'name' => 'user/lab6',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'user/lab6' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'user/library' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '9542a3e6692898bbaa00f432d01225d2353c7989',
            'type' => 'library',
            'install_path' => __DIR__ . '/../user/library',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
