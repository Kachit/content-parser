<?php
/**
 * Class ParserAbstract
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

use Kachit\Parser\Adapter\AdapterInterface;

abstract class ParserAbstract implements ParserInterface
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * @var ResultInterface
     */
    protected $result;

    /**
     * @var array
     */
    protected $settings = [];

    /**
     * ParserAbstract constructor
     *
     * @param array $settings
     */
    public function __construct(array $settings = [])
    {
        $this->settings = $settings;
        $this->adapter = $this->getAdapter();
        $this->result = new Result();
    }

    /**
     * @param string $content
     * @return ResultInterface
     */
    public function parse($content)
    {
        $content = $this->parseContent($content);
        return $this->result->setData($content);
    }


    /**
     * @return AdapterInterface
     */
    abstract protected function getAdapter();

    /**
     * @param mixed $content
     * @return mixed
     */
    abstract protected function parseContent($content);
}