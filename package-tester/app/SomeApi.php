<?php


namespace App;


class SomeApi
{
    protected $vendorId;
    protected $apiToken;

    public function __construct($vendorId,$apiToken)
    {
        $this->apiToken=$apiToken;
        $this->vendorId=$vendorId;
    }

    public function fetch(){
        //tương tác với $apiToken,$vendorId
        return "{$this->vendorId} - {$this->apiToken}";
    }

}
