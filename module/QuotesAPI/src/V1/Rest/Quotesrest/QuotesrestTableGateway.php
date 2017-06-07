<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QuotesAPI\V1\Rest\Quotesrest;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway as ZFTableGateway;
use Zend\Hydrator\ObjectProperty as ObjectPropertyHydrator;

/**
 * Description of QuotesTableGateway
 *
 * @author gabriel
 */
class QuotesrestTableGateway extends ZFTableGateway
{
    public function __construct($table, AdapterInterface $adapter, $features = null)
    {
        $resultSet = new HydratingResultSet(new ObjectPropertyHydrator(),new QuotesrestEntity());
        return parent::__construct($table, $adapter, $features, $resultSet);
    }
}
