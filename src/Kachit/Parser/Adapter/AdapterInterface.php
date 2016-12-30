<?php
/**
 * Class AdapterInterface
 * @package Kachit\Parser\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Adapter;

interface AdapterInterface
{
    /**
     * @param string $content
     * @return mixed
     */
    public function parse($content);
}