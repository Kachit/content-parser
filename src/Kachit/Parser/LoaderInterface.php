<?php
/**
 * Class LoaderInterface
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

interface LoaderInterface
{
    /**
     * @param string $path
     * @param array $params
     * @return string
     */
    public function load($path, array $params = []);
}