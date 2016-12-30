<?php
/**
 * Class Dummy
 * @package Kachit\Parser\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Adapter;

class Dummy implements AdapterInterface
{
    /**
     * @param string $content
     * @return mixed
     */
    public function parse($content)
    {
        return $content;
    }
}