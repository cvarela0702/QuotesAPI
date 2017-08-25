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
            'quotes-api.rest.quotesrest' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/quotesrest[/:quotesrest_id]',
                    'defaults' => [
                        'controller' => 'QuotesAPI\\V1\\Rest\\Quotesrest\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'quotes-api.rest.authors',
            1 => 'quotes-api.rest.quotes',
            2 => 'quotes-api.rest.quotesrest',
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
            'page_size' => '250',
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
            'collection_query_whitelist' => [
                0 => 'author_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \QuotesAPI\V1\Rest\Quotes\QuotesEntity::class,
            'collection_class' => \QuotesAPI\V1\Rest\Quotes\QuotesCollection::class,
            'service_name' => 'quotes',
        ],
        'QuotesAPI\\V1\\Rest\\Quotesrest\\Controller' => [
            'listener' => \QuotesAPI\V1\Rest\Quotesrest\QuotesrestResource::class,
            'route_name' => 'quotes-api.rest.quotesrest',
            'route_identifier_name' => 'quotesrest_id',
            'collection_name' => 'quotesrest',
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
            'collection_query_whitelist' => [
                0 => 'author_id',
            ],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \QuotesAPI\V1\Rest\Quotesrest\QuotesrestEntity::class,
            'collection_class' => \QuotesAPI\V1\Rest\Quotesrest\QuotesrestCollection::class,
            'service_name' => 'quotesrest',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'QuotesAPI\\V1\\Rest\\Authors\\Controller' => 'HalJson',
            'QuotesAPI\\V1\\Rest\\Quotes\\Controller' => 'HalJson',
            'QuotesAPI\\V1\\Rest\\Quotesrest\\Controller' => 'HalJson',
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
            'QuotesAPI\\V1\\Rest\\Quotesrest\\Controller' => [
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
                2 => 'application/x-www-form-urlencoded',
            ],
            'QuotesAPI\\V1\\Rest\\Quotesrest\\Controller' => [
                0 => 'application/vnd.quotes-api.v1+json',
                1 => 'application/json',
                2 => 'application/x-www-form-urlencoded',
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
            \QuotesAPI\V1\Rest\Quotesrest\QuotesrestEntity::class => [
                'entity_identifier_name' => 'entity_id',
                'route_name' => 'quotes-api.rest.quotesrest',
                'route_identifier_name' => 'quotesrest_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \QuotesAPI\V1\Rest\Quotesrest\QuotesrestCollection::class => [
                'entity_identifier_name' => 'entity_id',
                'route_name' => 'quotes-api.rest.quotesrest',
                'route_identifier_name' => 'quotesrest_id',
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
        'QuotesAPI\\V1\\Rest\\Quotesrest\\Controller' => [
            'input_filter' => 'QuotesAPI\\V1\\Rest\\Quotesrest\\Validator',
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
        'QuotesAPI\\V1\\Rest\\Quotesrest\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'entity_id',
                'description' => 'The key id',
                'field_type' => 'int',
                'error_message' => 'Please enter a valid entity_id',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'author_id',
                'description' => 'The author ID',
                'field_type' => 'int',
                'error_message' => 'Please provide a valid author_id',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'quote',
                'description' => 'The quote',
                'error_message' => 'Please provide a valid quote',
            ],
            3 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'location',
                'description' => 'The quote location',
                'allow_empty' => true,
                'continue_if_empty' => true,
                'error_message' => 'Please provide a valid quote location',
            ],
            4 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'created_at',
                'description' => 'The quote creation date and time',
                'error_message' => 'Please provide a valid creation date and time',
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'QuotesAPI\\V1\\Rest\\Authors\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'QuotesAPI\\V1\\Rest\\Quotes\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \QuotesAPI\V1\Rest\Quotesrest\QuotesrestResource::class => \QuotesAPI\V1\Rest\Quotesrest\QuotesrestResourceFactory::class,
            'QuotesAPI\\V1\\Rest\\Quotesrest\\TableGatewayMapper' => \QuotesAPI\V1\Rest\Quotesrest\QuotesrestTableGatewayMapperFactory::class,
            'QuotesAPI\\V1\\Rest\\Quotesrest\\TableGateway' => \QuotesAPI\V1\Rest\Quotesrest\QuotesrestTableGatewayFactory::class,
        ],
    ],
];
