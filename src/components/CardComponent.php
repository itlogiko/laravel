<?php

namespace itLogiko\Laravel\Components;

use function view;

class CardComponent extends Component
{
  /**
   * The card actions.
   *
   * @var array
   */
  public $actions;

  /**
   * The card title.
   *
   * @var string
   */
  public $title;

  /**
   * Create the component instance.
   *
   * @param string $title
   * @param array $actions
   * @return void
   */
  public function __construct($title, $actions = [])
  {
    $this->actions = $actions;
    $this->title = $title;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|\Closure|string
   */
  public function render()
  {
    return view('itlogiko::components.card');
  }
}
