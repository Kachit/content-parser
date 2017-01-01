<?php
/**
 * Class ParserInterface
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

interface ParserInterface
{
    /**
     * @param mixed $content
     * @return ResultInterface
     */
    public function parse($content);
}