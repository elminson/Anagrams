<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Date: 6/27/2018
 * Time: 4:42 PM
 */


namespace Anagram;

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Anagram;

class ATest extends TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function testCheckWordsnotArray()
    {
        $this->expectException('TypeError');
        $container = new StringUtils();
        $container->anagrams("");
    }

    public function testCheckSearchnotString()
    {
        $this->expectException('TypeError');
        $container = new StringUtils();
        $container->anagrams(["a","b"],"");
    }

}
