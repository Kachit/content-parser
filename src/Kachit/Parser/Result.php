<?php
/**
 * Class Data
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

class Result implements ResultInterface
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @var string
     */
    private $source = '';

    /**
     * Data constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        $this->setData($data);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return ResultInterface
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->data);
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return Result
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }
}