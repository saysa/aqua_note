<?php

namespace AppBundle\Twig;

class MarkdownExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('markdownify', [$this, 'parseMarkdown']),
        ];
    }

    public function parseMarkdown($str)
    {
        return strtoupper($str);
    }
}