<?php

namespace SVS\Client\Kazpost;

use GuzzleHttp\Client;

/**
 * Class AbstractClient
 *
 * @package SVS\Client\Kazpost
 */
class AbstractClient
{

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * AbstractClient constructor.
     */
    public function __construct()
    {
        $this->client = new Client(
            [

            ]
        );
    }
}
