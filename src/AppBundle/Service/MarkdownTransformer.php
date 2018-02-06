<?php

namespace AppBundle\Service;

class MarkdownTransformer
{
    private $markdownParser;

    public function __construct($markdownParser)
    {
        $this->markdownParser = $markdownParser;
    }

    public function parse($str)
    {
        return $funFact = $this->markdownParser->transform($str);
    }
}