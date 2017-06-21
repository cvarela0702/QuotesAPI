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
use ZF\ApiProblem\ApiProblem;

/**
 * Description of QuotesrestTableGatewayMapper
 *
 * @author gabriel
 */
class QuotesrestTableGatewayMapper {
    protected $tableGateway;
    
    public function __construct($tableGateway) {
        $this->tableGateway=$tableGateway;
    }
    
    public function fetchAll($params=array())
    {
        return new QuotesrestCollection(new DbTableGateway($this->tableGateway,$params));
    }
    
    public function create($data=array())
    {
        if ($data instanceof Traversable) {
            $data = ArrayUtils::iteratorToArray($data);
        }
        if (is_object($data)) {
            $data = (array) $data;
        }

        if (!is_array($data)) {
            throw new InvalidArgumentException(sprintf(
                'Invalid data provided to %s; must be an array or Traversable',
                __METHOD__
            ));
        }
        
        $this->tableGateway->insert($data);
        $data['entity_id']=$this->tableGateway->lastInsertValue;
        //$data['id']=$this->tableGateway->lastInsertValue;
        
        //$data['entity_id']=13;
        
        return array(
            'response'=>$data,
            'success'=>true,
        );
    }
}
