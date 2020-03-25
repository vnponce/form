<?php

namespace Styde;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * @var string
     */
    public $method;

    protected $specialMethods = ['put', 'patch', 'delete'];

    public function __construct(string $method = 'get')
    {

        $this->method = $method;
    }

    public function specialMethod()
    {
        return in_array($this->method, $this->specialMethods);
    }

    public function render()
    {
        return view('styde-form::form');
    }
}
