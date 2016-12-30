<?php
/**
 * Class SymfonyCrawlerTrait
 * @package Kachit\Parser\Traits\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Traits\Adapter;

use Kachit\Parser\Adapter\AdapterInterface;
use Kachit\Parser\Adapter\SimpleXML;

trait SimpleXmlTrait
{
    /**
     * @return AdapterInterface|SimpleXML
     */
    protected function getAdapter()
    {
        return new SimpleXML();
    }
}