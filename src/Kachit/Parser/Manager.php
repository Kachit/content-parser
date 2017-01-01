<?php
/**
 * Class Manager
 * @package Kachit\Parser
 * @author Kachit
 */
namespace Kachit\Parser;

class Manager
{
    /**
     * @var ParserInterface
     */
    private $parser;

    /**
     * @var ReceiverInterface
     */
    private $receiver;

    /**
     * @var LoaderInterface
     */
    private $loader;

    /**
     * Manager constructor.
     * @param ParserInterface $parser
     * @param ReceiverInterface $receiver
     * @param LoaderInterface $loader
     */
    public function __construct(ParserInterface $parser, ReceiverInterface $receiver, LoaderInterface $loader)
    {
        $this->parser = $parser;
        $this->receiver = $receiver;
        $this->loader = $loader;
    }

    /**
     * @param string $path
     * @param array $options
     * @throws Exception
     */
    public function parse($path, array $options = [])
    {
        $content = $this->loader->load($path, $options);
        if (empty($content)) {
            throw new Exception('Nothing to parse');
        }
        $result = $this->parser->parse($content);
        if ($result->isEmpty()) {
            throw new Exception('Nothing to receive');
        }
        $this->receiver->receive($result);
    }

    /**
     * @param ParserInterface $parser
     * @return Manager
     */
    public function setParser(ParserInterface $parser)
    {
        $this->parser = $parser;
        return $this;
    }

    /**
     * @param ReceiverInterface $receiver
     * @return Manager
     */
    public function setReceiver(ReceiverInterface $receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * @param LoaderInterface $loader
     * @return Manager
     */
    public function setLoader(LoaderInterface $loader)
    {
        $this->loader = $loader;
        return $this;
    }
}