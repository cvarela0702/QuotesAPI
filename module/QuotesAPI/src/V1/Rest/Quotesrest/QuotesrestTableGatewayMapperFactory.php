<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QuotesAPI\V1\Rest\Quotesrest;

use DomainException;

/**
 * Description of QuotesrestTableGatewayMapperFactory
 *
 * @author gabriel
 */
class QuotesrestTableGatewayMapperFactory {
    public function __invoke($services) {
        if(!$services->has('QuotesAPI\V1\Rest\Quotesrest\TableGateway'))
        {
            throw new DomainException('Cannot create QuotesAPI\V1\Rest\Quotesrest\TableGatewayMapper; missing QuotesAPI\V1\Rest\Quotesrest\TableGateway dependency');
        }
        return new QuotesrestTableGatewayMapper($services->get('QuotesAPI\V1\Rest\Quotesrest\TableGateway'));
    }
}
