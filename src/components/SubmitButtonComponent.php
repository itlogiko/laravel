<?php

namespace itLogiko\Laravel\Components;

use function view;

class SubmitButtonComponent extends Component
{
  /**
   * The submit button action.
   *
   * @var array
   */
  public $action;

  /**
   * The submit button method.
   *
   * @var array
   */
  public $method;

  /**
   * Create the component instance.
   *
   * @param string|array $action
   * @param string $method
   * @return void
   */
  public function __construct($action, $method = 'DELETE')
  {
    $this->action = $action;
    $this->method = $method;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|\Closure|string
   */
  public function render()
  {
    return view('itlogiko::components.submit-button');
  }
}
