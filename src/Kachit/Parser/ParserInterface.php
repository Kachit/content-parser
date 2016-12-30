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
     * @return DataInterface
     */
    public function parse($content);
}