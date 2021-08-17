<?php

declare(strict_types = 1);

namespace IntegraCommerceTest\unit\Api\Handler\Sales;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use IntegraCommerce\Api;
use IntegraCommerce\Api\Service\ClientBuilderInterface;
use IntegraCommerce\Api\Service\ServiceJson;

/**
 * Class OrderHandlerTest
 *
 * @package IntegraCommerceTest\unit\Api\Handler\Sales
 */
class OrderHandlerTest extends TestCase
{
    private $service;
    private $builder;
    private $client;
    private $api;

    protected function setUp()
    {
        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar'], '{"orders":[]}'),
            new Response(202, ['Content-Length' => 0]),
            new RequestException("Error Communicating with Server", new Request('GET', 'test'))
        ]);

        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);

        $this->builder = $this->createMock(ClientBuilderInterface::class);
        $this->builder->method('build')->willReturn($this->client);

        $this->service = new ServiceJson('http://www.example.com', [], [], $this->builder);

        $this->api = new Api('anyone@anyone.com', 'anything', null, 'https://api.integracommerce.com', $this->service);
    }

    /**
     * @test
     */
    public function orders()
    {
        $result = $this->api->order()->orders()->body();
        $this->assertEquals('{"orders":[]}', $result);
    }
}
