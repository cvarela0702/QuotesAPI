<?php
namespace QuotesAPI\V1\Rest\Quotesrest;

class QuotesrestEntity
{
    public $entity_id;
    public $author_id;
    public $quote;
    public $location;
    public $created_at;
    
    /**
     * 
     * @return type
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
    
    /**
     * 
     * @param array $data
     */
    public function exchangeArray(array $data)
    {
        $this->entity_id=(!empty($data['entity_id']))? $data['entity_id']:null;
        $this->author_id=(!empty($data['author_id']))? $data['author_id']:null;
        $this->quote=(!empty($data['quote']))? $data['quote']:null;
        $this->location=(!empty($data['location']))? $data['location']:null;
        $this->created_at=(!empty($data['created_at']))? $data['created_at']:null;
    }
}
