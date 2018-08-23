<?php

namespace Anagram;

require __DIR__ . '/vendor/autoload.php';

/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Date: 6/27/2018
 * Time: 2:46 PM
 */

$words = ["tumblr", "terse", "rest", "tears", "steer", "street"];
$util = new StringUtils();
echo json_encode($util->anagrams($words, $argv[1]));
