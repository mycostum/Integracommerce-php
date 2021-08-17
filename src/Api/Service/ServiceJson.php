<?php
/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  SkuHub
 * @package   SkuHub
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */

namespace IntegraCommerce\Api\Service;

/**
 * Class ServiceJson
 *
 * @package IntegraCommerce\Api\Service
 */
class ServiceJson extends ServiceDefault
{
    /**
     * @var array
     */
    private $headers = [
        'Accept'       => 'application/json',
        'Content-Type' => 'application/json'
    ];

    /**
     * @return $this
     */
    protected function prepareRequestHeaders()
    {
        $this->getOptionsBuilder()
            ->getHeadersBuilder()
            ->addHeaders($this->headers);

        return $this;
    }

    /**
     * @param array $bodyData
     *
     * @return $this
     */
    protected function prepareRequestBody($bodyData)
    {
        $this->getOptionsBuilder()->setBody($bodyData, OptionsBuilderInterface::BODY_TYPE_JSON);
        return $this;
    }
}
