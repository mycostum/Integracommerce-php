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

namespace IntegraCommerce\Api\DataTransformer\Catalog\Product\Variation;

use IntegraCommerce\Api\DataTransformer\Builders;
use IntegraCommerce\Api\DataTransformer\DataTransformerAbstract;

class Create extends DataTransformerAbstract
{

    use Builders;


    /**
     * CreateVariation constructor.
     *
     * @param string $sku
     * @param string $qty
     * @param string $ean
     * @param array  $images
     * @param array  $specifications
     */
    public function __construct($sku, $qty = null, $ean = null, array $images = [], array $specifications = [])
    {
        $variation['sku'] = (string) $sku;

        if ($qty !== null) {
            $variation['qty'] = (int) $qty;
        }

        if ($ean) {
            $variation['ean'] = (string) $ean;
        }

        /** Build product variation's images. */
        $this->buildProductImages($variation, (array) $images);

        /** Build product variation's specifications. */
        $this->buildProductSpecifications($variation, (array) $specifications);

        $this->setOutputData(['variation' => $variation]);

        parent::__construct();
    }
}
