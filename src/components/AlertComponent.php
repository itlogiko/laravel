<?php

namespace itLogiko\Laravel\Components;

use function view;

class AlertComponent extends Component
{
  /**
   * The alert type.
   *
   * @var string
   */
  public $type;

  /**
   * The alert message.
   *
   * @var string
   */
  public $message;

  /**
   * Create the component instance.
   *
   * @param string $type
   * @param string $message
   * @return void
   */
  public function __construct($type, $message = '')
  {
    $this->message = $message;
    $this->type = $type;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|\Closure|string
   */
  public function render()
  {
    return view('itlogiko::components.alert');
  }
}
