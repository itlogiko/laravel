<?php

namespace itLogiko\Laravel\Components;

use function view;

class FormComponent extends Component
{
  /**
   * The form action.
   *
   * @var string
   */
  public $action;

  /**
   * The form actions.
   *
   * @var array
   */
  public $actions;

  /**
   * The form method.
   *
   * @var string
   */
  public $method;

  /**
   * The form title.
   *
   * @var string
   */
  public $title;

  /**
   * Create the component instance.
   *
   * @param string $action
   * @param string $title
   * @param string $method
   * @param array $actions
   * @return void
   */
  public function __construct($action, $title, $method = 'POST', $actions = [])
  {
    $this->action = $action;
    $this->actions = $actions;
    $this->method = $method;
    $this->title = $title;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|\Closure|string
   */
  public function render()
  {
    return view('itlogiko::components.form');
  }
}
