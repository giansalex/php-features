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
    public function foo(): ?string;
}
interface StrictFooable extends Fooable {
    public function foo(): string; // valid
}

trait MoveTrait {
    public $action;
    public function move(int $value): void {

    }
}
interface Action {
    public function run(): void;
}

class Person implements Action {

    use MoveTrait {
        MoveTrait::move as protected movePerson;
        MoveTrait::move as protected;
    }
    public function run(): void
    {
        // TODO: Implement run() method.
    }
}

class Child extends Person {
    public function build()
    {
        $this->movePerson(2);
    }
}
function dump(iterable $items)
{
    var_dump($items);
}

dump([2, 3, 4]);

// Closure
class Test
{
    private const PRIVATE_CONST = 4;
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

$person = new Person();
if ($person instanceof Action) {

}