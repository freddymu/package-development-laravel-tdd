<?php


namespace freddymu\Press\Tests\Feature;


use freddymu\Press\MarkdownParser;
use freddymu\Press\Tests\TestCase;

class MarkdownTest extends TestCase
{
    /** @test */
    public function simple_markdown_is_parsed()
    {
        $this->assertEquals("<h1>Heading</h1>", MarkdownParser::parse('# Heading'));
    }

}