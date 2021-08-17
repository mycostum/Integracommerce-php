<?php

namespace IntegraCommerce\Api\Handler\Request\Catalog\Product;

use IntegraCommerce\Api\DataTransformer\Catalog\Product\Variation\Update;
use IntegraCommerce\Api\EntityInterface\Catalog\Product\Variation;
use IntegraCommerce\Api\Handler\Request\HandlerAbstract;
use IntegraCommerce\Api\Handler\Response\HandlerInterface;

/**
 * BSeller Platform | B2W - Companhia Digital
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  SkuHub
 * @package   SkuHub
 *
 * @copyright Copyright (c) 2018 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 * @author    Tiago Sampaio <tiago.sampaio@e-smart.com.br>
 */
class VariationHandler extends HandlerAbstract
{

    /** @var string */
    protected $baseUrlPath = '/variations';


    /**
     * @param string $sku
     *
     * @return HandlerInterface
     */
    public function get($sku)
    {
        /** @var HandlerInterface $responseHandler */
        $responseHandler = $this->service()->get($this->baseUrlPath($sku));
        return $responseHandler;
    }


    /**
     * @param string $sku
     *
     * @return HandlerInterface
     */
    public function delete($sku)
    {
        /** @var HandlerInterface $responseHandler */
        $responseHandler = $this->service()->delete($this->baseUrlPath($sku));
        return $responseHandler;
    }


    /**
     * @param string $sku
     * @param string $variationSku
     * @param string $variationQty
     * @param string $variationEan
     * @param array  $variationImages
     * @param array  $variationSpecifications
     *
     * @return \IntegraCommerce\Api\Handler\Response\HandlerInterface
     */
    public function update(
        $sku,
        $variationSku,
        $variationQty = null,
        $variationEan = null,
        array $variationImages = [],
        array $variationSpecifications = []
    ) {
        $transformer = new Update(
            $variationSku,
            $variationQty,
            $variationEan,
            $variationImages,
            $variationSpecifications
        );

        $body = $transformer->output();

        /** @var \IntegraCommerce\Api\Handler\Response\HandlerInterface $responseHandler */
        $responseHandler = $this->service()->put($this->baseUrlPath($sku), $body);
        return $responseHandler;
    }


    /**
     * @return Variation
     */
    public function entityInterface()
    {
        return new Variation($this);
    }
}
