<?php

namespace App;

// class CalculateAgeClass
// {
//     public $age;

//     public function provide_birth_year($yearOfBirth)
//     {
//         $this->age = 2022 - $yearOfBirth;
//     }
//     public function get_age()
//     {
//         return $this->age;
//     }
// }


class container
{
    protected $bindings = [];
    public function bind($name, callable $resolver)
    {
        $this->bindings[$name] = $resolver;
    }
    public function make($name)
    {
        return $this->bindings[$name];
    }
}
$container = new container;
$container->bind('Game', function () {
    return 'Football';
});
print_r($container->make('Game'));
