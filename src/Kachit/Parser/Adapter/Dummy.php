<?php
/**
 * Class Dummy
 * @package Kachit\Parser\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Adapter;

class Dummy extends AdapterAbstract
{
    /**
     * @param string $content
     * @return mixed
     */
    public function build($content)
    {
        return $content;
    }
}