<?php

/**
 * B2W Digital - Companhia Digital
 *
 * Do not edit this file if you want to update this SDK for future new versions.
 * For support please contact the e-mail bellow:
 *
 * sdk@e-smart.com.br
 *
 * @category  IntegraCommerce
 * @package   IntegraCommerce
 *
 * @copyright Copyright (c) 2021 B2W Digital - BSeller Platform. (http://www.bseller.com.br).
 *
 */

namespace IntegraCommerce\Api\DataTransformer\Catalog\Product\Stock;

use IntegraCommerce\Api\DataTransformer\Builders;
use IntegraCommerce\Api\DataTransformer\DataTransformerAbstract;

class Update extends DataTransformerAbstract
{
    use Builders;

    /**
     * Update constructor.
     *
     * @param int $qty
     */
    public function __construct($qty)
    {
        $this->setOutputData([
            'product' => [
                'qty' => $qty,
            ]
        ]);

        parent::__construct();
    }
}
