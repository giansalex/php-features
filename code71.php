<?php

// Nullable
function sum(?int $a, ?int $b): ?int
{
    if ($a == null || $b == null) {
        return null;
    }

    return $a + $b;
}

var_dump(sum(null, null));

interface Fooable {
    function foo(): ?string;
}
interface StrictFooable extends Fooable {
    function foo(): string; // valid
}

function dump(iterable $items)
{
    var_dump($items);
}

dump([2, 3, 4]);

// Closure
class Test
{
    public function exposeFunction(): Closure
    {
        return Closure::fromCallable([$this, 'privateFunction']);
    }

    private function privateFunction($param): void
    {
        var_dump($param);
    }
}

$privFunc = (new Test)->exposeFunction();
$privFunc('some value');

// void
function ab(): void {

}

// visibility const
class Data {
    private const PRIVATE_CONST = 4;
}

try {
    // algo de código
} catch (Exception | InvalidArgumentException $e) {
    // manejar la primera y segunda excepción
}

pcntl_async_signals(true); // turn on async signals

pcntl_signal(SIGHUP,  function($sig) {
    echo "SIGHUP\n";
});

posix_kill(posix_getpid(), SIGHUP);