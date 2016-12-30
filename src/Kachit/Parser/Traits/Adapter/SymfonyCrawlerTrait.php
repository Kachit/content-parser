<?php
/**
 * Class SymfonyCrawlerTrait
 * @package Kachit\Parser\Traits\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Traits\Adapter;

use Kachit\Parser\Adapter\AdapterInterface;
use Kachit\Parser\Adapter\SymfonyCrawler;

trait SymfonyCrawlerTrait
{
    /**
     * @return AdapterInterface|SymfonyCrawler
     */
    protected function getAdapter()
    {
        return new SymfonyCrawler();
    }
}