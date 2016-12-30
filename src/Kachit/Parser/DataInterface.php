<?php
/**
 * Class DataInterface
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

interface DataInterface
{
    /**
     * @return array
     */
    public function getData();

    /**
     * @param mixed $data
     * @return DataInterface
     */
    public function setData($data);

    /**
     * @return bool
     */
    public function isEmpty();
}