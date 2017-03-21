<?php
return [
    'router' => [
        'routes' => [
            'quotes-api.rest.authors' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/authors[/:authors_id]',
                    'defaults' => [
                        'controller' => 'QuotesAPI\\V1\\Rest\\Authors\\Controller',
                    ],
                ],
            ],
            'quotes-api.rest.quotes' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/quotes[/:quotes_id]',
                    'defaults' => [
                        'controller' => 'QuotesAPI\\V1\\Rest\\Quotes\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'quotes-api.rest.authors',
            1 => 'quotes-api.rest.quotes',
        ],
    ],
    'zf-rest' => [
        'QuotesAPI\\V1\\Rest\\Authors\\Controller' => [
            'listener' => 'QuotesAPI\\V1\\Rest\\Authors\\AuthorsResource',
            'route_name' => 'quotes-api.rest.authors',
            'route_identifier_name' => 'authors_id',
            'collection_name' => 'authors',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \QuotesAPI\V1\Rest\Authors\AuthorsEntity::class,
            'collection_class' => \QuotesAPI\V1\Rest\Authors\AuthorsCollection::class,
            'service_name' => 'authors',
        ],
        'QuotesAPI\\V1\\Rest\\Quotes\\Controller' => [
            'listener' => 'QuotesAPI\\V1\\Rest\\Quotes\\QuotesResource',
            'route_name' => 'quotes-api.rest.quotes',
            'route_identifier_name' => 'quotes_id',
            'collection_name' => 'quotes',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \QuotesAPI\V1\Rest\Quotes\QuotesEntity::class,
            'collection_class' => \QuotesAPI\V1\Rest\Quotes\QuotesCollection::class,
            'service_name' => 'quotes',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'QuotesAPI\\V1\\Rest\\Authors\\Controller' => 'HalJson',
            'QuotesAPI\\V1\\Rest\\Quotes\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'QuotesAPI\\V1\\Rest\\Authors\\Controller' => [
                0 => 'application/vnd.quotes-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'QuotesAPI\\V1\\Rest\\Quotes\\Controller' => [
                0 => 'application/vnd.quotes-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'QuotesAPI\\V1\\Rest\\Authors\\Controller' => [
                0 => 'application/vnd.quotes-api.v1+json',
                1 => 'application/json',
            ],
            'QuotesAPI\\V1\\Rest\\Quotes\\Controller' => [
                0 => 'application/vnd.quotes-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \QuotesAPI\V1\Rest\Authors\AuthorsEntity::class => [
                'entity_identifier_name' => 'entity_id',
                'route_name' => 'quotes-api.rest.authors',
                'route_identifier_name' => 'authors_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \QuotesAPI\V1\Rest\Authors\AuthorsCollection::class => [
                'entity_identifier_name' => 'entity_id',
                'route_name' => 'quotes-api.rest.authors',
                'route_identifier_name' => 'authors_id',
                'is_collection' => true,
            ],
            \QuotesAPI\V1\Rest\Quotes\QuotesEntity::class => [
                'entity_identifier_name' => 'entity_id',
                'route_name' => 'quotes-api.rest.quotes',
                'route_identifier_name' => 'quotes_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \QuotesAPI\V1\Rest\Quotes\QuotesCollection::class => [
                'entity_identifier_name' => 'entity_id',
                'route_name' => 'quotes-api.rest.quotes',
                'route_identifier_name' => 'quotes_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'QuotesAPI\\V1\\Rest\\Authors\\AuthorsResource' => [
                'adapter_name' => 'db',
                'table_name' => 'authors',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'QuotesAPI\\V1\\Rest\\Authors\\Controller',
                'entity_identifier_name' => 'entity_id',
                'table_service' => 'QuotesAPI\\V1\\Rest\\Authors\\AuthorsResource\\Table',
            ],
            'QuotesAPI\\V1\\Rest\\Quotes\\QuotesResource' => [
                'adapter_name' => 'db',
                'table_name' => 'quotes',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'QuotesAPI\\V1\\Rest\\Quotes\\Controller',
                'entity_identifier_name' => 'entity_id',
                'table_service' => 'QuotesAPI\\V1\\Rest\\Quotes\\QuotesResource\\Table',
            ],
        ],
    ],
    'zf-content-validation' => [
        'QuotesAPI\\V1\\Rest\\Authors\\Controller' => [
            'input_filter' => 'QuotesAPI\\V1\\Rest\\Authors\\Validator',
        ],
        'QuotesAPI\\V1\\Rest\\Quotes\\Controller' => [
            'input_filter' => 'QuotesAPI\\V1\\Rest\\Quotes\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'QuotesAPI\\V1\\Rest\\Authors\\Validator' => [
            0 => [
                'name' => 'first_name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '30',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'last_name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '30',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'dob',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'created_at',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
        'QuotesAPI\\V1\\Rest\\Quotes\\Validator' => [
            0 => [
                'name' => 'author_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'db',
                            'table' => 'authors',
                            'field' => 'entity_id',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'quote',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '30',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'location',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '30',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'created_at',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
];
