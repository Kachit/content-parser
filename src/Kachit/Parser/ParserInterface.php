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
     * @param $content
     * @return mixed
     */
    public function parse($content);
}