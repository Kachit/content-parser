<?php
/**
 * Class SimpleXML
 * @package Kachit\Parser\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Adapter;

class Json implements AdapterInterface
{
    /**
     * @param string $content
     * @return array
     */
    public function parse($content)
    {
        return json_decode($content);
    }
}