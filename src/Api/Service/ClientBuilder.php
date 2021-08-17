<?php

declare(strict_types = 1);

namespace IntegraCommerce\Api\Service;

use GuzzleHttp\Client as HttpClient;

/**
 * Class ClientBuilder
 *
 * @package IntegraCommerce\Api\Service
 */
class ClientBuilder implements ClientBuilderInterface
{
    /**
     * @inheritDoc
     */
    public function build($baseUri = null, array $defaults = [])
    {
        return new HttpClient([
            'base_uri' => $baseUri,
            'defaults' => $defaults
        ]);
    }
}
