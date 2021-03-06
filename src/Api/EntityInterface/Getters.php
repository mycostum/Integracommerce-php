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

namespace IntegraCommerce\Api\EntityInterface;

use IntegraCommerce\Api\EntityInterface\Catalog\Product;

trait Getters
{
    
    /**
     * @return Product
     */
    public function productEntityInterface()
    {
        return new Product($this);
    }

    /**
     * @return Product\Attribute
     */
    public function productAttributeEntityInterface()
    {
        return new Product\Attribute($this);
    }
}
