<?php

namespace IntegraCommerceTest;

use IntegraCommerce\Api;

/**
 * BSeller Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  SkuHubTest
 * @package   SkuHubTest
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */
trait Base
{
    
    /** @var Api */
    protected $api       = null;
    
    /** @var string */
    protected $email     = 'test@e-smart.com.br';
    
    /** @var string */
    protected $apiKey    = 'testApiKey';
    
    
    /**
     * @return Api
     */
    protected function api()
    {
        if (empty($this->api)) {
            $this->api = new Api($this->email, $this->apiKey);
        }
    
        return $this->api;
    }
}
