<?php

// Type object
function test(object $obj) : object
{
    return new SplQueue();
}

test(new StdClass());

$ab = 'as';
$ac = 'ac';

sodium_add($ab, $ac);


interface A
{
    public function Test(array $input);
}

class B implements A
{
    public function Test($input){} // type omitted for $input
}


