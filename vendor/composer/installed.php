<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.2.1',
            'version' => '5.2.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => '23e50829f958ea1d741d63e2781716be037e4644',
            'dev_requirement' => false,
        ),
        'twbs/bootstrap-icons' => array(
            'pretty_version' => 'v1.9.1',
            'version' => '1.9.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap-icons',
            'aliases' => array(),
            'reference' => 'f7f6f61194419dcf4447dbe05b78a72601646490',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.2.1',
            ),
        ),
    ),
);
