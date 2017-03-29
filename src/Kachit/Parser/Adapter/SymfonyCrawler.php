<?php
/**
 * Class Goutte
 * @package Kachit\Parser\Adapter
 * @author Kachit
 */
namespace Kachit\Parser\Adapter;

use Symfony\Component\DomCrawler\Crawler;

class SymfonyCrawler extends AdapterAbstract
{
    /**
     * @param string $content
     * @return mixed|Crawler
     */
    public function build($content)
    {
        $crawler = new Crawler();
        $crawler->addContent($content);
        return $crawler;
    }
}