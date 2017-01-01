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
     * @param ResultInterface $data
     */
    public function receive(ResultInterface $data);
}