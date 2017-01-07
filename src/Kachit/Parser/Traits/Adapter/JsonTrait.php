<?php
/**
 * Class SymfonyCrawlerTrait
 * @package Kachit\Parser\Traits\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Traits\Adapter;

use Kachit\Parser\Adapter\AdapterInterface;
use Kachit\Parser\Adapter\Json;

trait JsonTrait
{
    /**
     * @return AdapterInterface|Json
     */
    protected function getAdapter()
    {
        return new Json();
    }
}