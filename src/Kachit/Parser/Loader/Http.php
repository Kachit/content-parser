<?php
/**
 * Class Http
 * @package Kachit\Parser\Loader
 * @author Kachit
 */
namespace Kachit\Parser\Loader;

use Kachit\Parser\LoaderAbstract;
use GuzzleHttp\Client as HttpClient;

class Http extends LoaderAbstract
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * Http constructor.
     * @param HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient = null)
    {
        $this->httpClient = ($httpClient) ? $httpClient : new HttpClient();
    }

    /**
     * @param string $path
     * @param array $params
     * @return string
     */
    public function load($path, array $params = [])
    {
        $response = $this->httpClient->get($path);
        return $response->getBody()->getContents();
    }
}