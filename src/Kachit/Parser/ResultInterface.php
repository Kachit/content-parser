<?php
/**
 * Class DataInterface
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

interface ResultInterface
{
    /**
     * @return array
     */
    public function getData();

    /**
     * @param mixed $data
     * @return ResultInterface
     */
    public function setData($data);

    /**
     * @return bool
     */
    public function isEmpty();

    /**
     * @return string
     */
    public function getSource();

    /**
     * @param string $source
     * @return ResultInterface
     */
    public function setSource($source);
}