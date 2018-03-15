<?php

namespace Songshenzong\Support\Str;

use PHPUnit\Framework\TestCase;
use Songshenzong\Support\Strings;


class StrTest extends TestCase
{
    /**
     * @var string
     */
    protected $xmlString = <<<ETO
<?xml version="1.0" encoding="UTF-8"?>
<books>
  <book>
    <author>Jack Herrington</author>
    <title>PHP Hacks</title>
    <publisher>O'Reilly</publisher>
  </book>
  <book>
    <author>Jack Herrington</author>
    <title>Podcasting Hacks</title>
    <publisher>O'Reilly</publisher>
  </book>
</books>
ETO;

    /**
     * @var string
     */
    protected $jsonString = '{ "tools": [ { "name":"css format" , "site":"https://songshenzong.com" }, { "name":"pwd check" , "site":"https://songshenzong.com" } ] }';

    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function testIsJson(): void
    {
        $this->assertEquals(false, Strings::isJson());
        $this->assertEquals(false, Strings::isJson(''));
        $this->assertEquals(false, Strings::isJson($this->xmlString));
        $this->assertEquals(true, Strings::isJson('{"json":true}'));
        $this->assertEquals(true, Strings::isJson($this->jsonString));
    }


    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function testIsXml(): void
    {
        $this->assertEquals(false, Strings::isXml(''));
        $this->assertEquals(false, Strings::isXml());
        $this->assertEquals(false, Strings::isXml($this->jsonString));
        $this->assertEquals(true, Strings::isXml($this->xmlString));
        $this->assertEquals(false, Strings::isXml('{"json":true}'));
    }


}
