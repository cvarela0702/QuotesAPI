<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QuotesAPI\V1\Rest\Quotesrest;

use DomainException;
use InvalidArgumentException;
use Traversable;
use Zend\Paginator\Adapter\DbTableGateway;


/**
 * Description of QuotesrestTableGatewayMapper
 *
 * @author gabriel
 */
class QuotesrestTableGatewayMapper {
    protected $table;
    
    public function __construct($table) {
        $this->table=$table;
    }
    
    public function fetchAll($params=array())
    {
        return new QuotesrestCollection(new DbTableGateway($this->table,$params));
    }
}
