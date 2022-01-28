<?php

class Action
{
    public function __construct(
        public string $type,
        public array $action
    ) {}
}

$initialState = [
    'count' => 0
];

$reducer =  function (array $state, Action $action) :array {

    return match ($action->type) {
        "INCREMENT" => array_replace([], $state, ['count' => $state['count'] + $action->action['number']]),
        "DECREMENT" =>  array_replace([], $state, ['count' => $state['count'] - $action->action['number']]),
        default => $state
    };
};

$reducerMath =  function (array $state, Action $action) :array {

    return match ($action->type) {
        "MULTIPLY" => array_replace([], $state, ['count' => $state['count'] * $action->action['number']]),
        "MODULO" =>  array_replace([], $state, ['count' => $state['count'] % $action->action['number']]),
        default => $state
    };
};

class Store
{

    public function __construct(
        public array $state,
        public Closure $reducer ,
        public array $listeners = []
    ) {
    }

    public function subscribe(callable $listener)
    {
        $this->listeners[] = $listener;
    }

    public function dispatch(Action $action)
    {
        $reducer =  $this->reducer;

        $this->state = $reducer($this->state, $action);
        foreach($this->listeners as $listener) {
            $listener($this->state);
        }
    }
}

$store = new Store( reducer : $reducer, state : $initialState);

$store->subscribe(function($state) {
    echo $state['count'] . PHP_EOL ;
});

$store->dispatch(new Action(type : "INCREMENT", action : ['number' => 1] ));
$store->dispatch(new Action(type : "INCREMENT", action : ['number' => 1] ));
$store->dispatch(new Action(type : "DECREMENT", action : ['number' => 1] ));
$store->dispatch(new Action(type : "INCREMENT", action : ['number' => 1] ));
$store->dispatch(new Action(type : "INCREMENT", action : ['number' => 1] ));
$store->dispatch(new Action(type : "INCREMENT", action : ['number' => 1] ));
$store->dispatch(new Action(type : "INCREMENT", action : ['number' => 1] ));

// Combine reducer imaginez maintenant comment combiner vos reducers

$reducers = [
    'reducer' => $reducer,
    'math' => $reducerMath
];

$combineReducer = function(array $reducers) {
    return function(array $state, Action $action) use ($reducers) {
        
    };
};


$store2 = new Store( reducer : $combineReducer($reducers), state : $initialState);

$store2->subscribe(function($state) {
    print_r($state);
});


print_r($combineReducer($reducers));

// $store2->dispatch(new Action(type : "INCREMENT", action : ['number' => 1] ));
