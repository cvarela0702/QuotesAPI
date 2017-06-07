<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QuotesAPI\V1\Rest\Quotesrest;

/**
 * Description of QuotesrestMapper
 *
 * @author gabriel
 */
class QuotesrestMapper {
    protected $tableGateway;
    
    /**
     * 
     * @param TableGateway $tableGateway
     */
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway=$tableGateway;
    }
    
    public function fetchAll($params=array())
    {
        return "some";
    }
}
