<?php
namespace Kachit\Parser\Traits\Adapter;

use Kachit\Parser\Adapter\AdapterInterface;
use Kachit\Parser\Adapter\SimpleXML;

/**
 * Class SimpleXmlTrait
 * @package Kachit\Parser\Traits\Adapter
 * @author Kachit
 *
 * @property array $settings
 */
trait SimpleXmlTrait
{
    /**
     * @return AdapterInterface|SimpleXML
     */
    protected function getAdapter()
    {
        return new SimpleXML($this->settings);
    }
}