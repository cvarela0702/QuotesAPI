<?php
namespace QuotesAPI\V1\Rest\Quotesrest;

class QuotesrestResourceFactory
{
    public function __invoke($services)
    {
        return new QuotesrestResource($services->get('QuotesAPI\V1\Rest\Quotesrest\TableGatewayMapper'));
    }
}
