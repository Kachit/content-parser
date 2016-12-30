<?php
/**
 * Class ReceiverInterface
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

interface ReceiverInterface
{
    /**
     * @param DataInterface $data
     */
    public function receive(DataInterface $data);
}