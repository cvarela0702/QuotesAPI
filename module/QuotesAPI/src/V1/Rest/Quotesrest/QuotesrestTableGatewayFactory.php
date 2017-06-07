<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QuotesAPI\V1\Rest\Quotesrest;

use DomainException;

/**
 * Description of QuotesrestTableGatewayFactory
 *
 * @author gabriel
 */
class QuotesrestTableGatewayFactory
{
    
    public function __invoke($services)
    {
        $db = 'Db\Quotes';
        $table = 'quotes';
        if ($services->has('config'))
        {
            $config=$services->get('config');
            switch(isset($config['quotesconfig']))
            {
                case true:
                    $config=$config['quotesconfig'];
                    
                    if(array_key_exists('db', $config)&& !empty($config['db']))
                    {
                        $db=$config['db'];
                    }
                    
                    if(array_key_exists('table', $config)&& !empty($config['table']))
                    {
                        $table=$config['table'];
                    }
                    break;
                case false:
                default:
                    break;
            }
        }
        
        if(!$services->has($db))
        {
            throw new DomainException(
                sprintf(
                    'Unable to create QuotesrestTableGatewayFactory due to missing "%s" service',
                    $db
                )
            );
        }
        
        return new QuotesrestTableGateway($table, $services->get($db));
    }
}
