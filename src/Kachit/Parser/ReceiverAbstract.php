<?php
/**
 * Class ReceiverAbstract
 * @package Kachit
 * @author Kachit
 */
namespace Kachit\Parser;

abstract class ReceiverAbstract implements ReceiverInterface
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