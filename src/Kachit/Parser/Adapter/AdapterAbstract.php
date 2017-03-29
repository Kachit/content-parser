<?php
/**
 * Class AdapterAbstract
 * @package Kachit\Parser\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Adapter;

abstract class AdapterAbstract implements AdapterInterface
{
    /**
     * @var array
     */
    protected $settings = [];

    /**
     * AdapterAbstract constructor.
     * @param array $settings
     */
    public function __construct(array $settings = [])
    {
        $this->settings = $settings;
    }
}