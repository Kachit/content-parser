<?php
namespace Kachit\Parser\Traits\Adapter;

use Kachit\Parser\Adapter\AdapterInterface;
use Kachit\Parser\Adapter\SymfonyCrawler;

/**
 * Class SymfonyCrawlerTrait
 * @package Kachit\Parser\Traits\Adapter
 * @author Kachit
 *
 * @property array $settings
 */
trait SymfonyCrawlerTrait
{
    /**
     * @return AdapterInterface|SymfonyCrawler
     */
    protected function getAdapter()
    {
        return new SymfonyCrawler($this->settings);
    }
}