<?php

namespace itLogiko\Laravel\Components;

use itLogiko\Laravel\Models\Model;
use function view;

class TableComponent extends Component
{
  /**
   * The table actions.
   *
   * @var array
   */
  public $actions;

  /**
   * The table headers.
   *
   * @var array
   */
  public $headers;

  /**
   * The table model.
   *
   * @var array
   */
  public $model;

  /**
   * The table title.
   *
   * @var string
   */
  public $title;

  /**
   * Create the component instance.
   *
   * @param string $title
   * @param array $headers
   * @param array $actions
   * @param Model $model
   * @return void
   */
  public function __construct($title, $model, $headers = [], $actions = [])
  {
    $this->actions = $actions;
    $this->headers = $headers;
    $this->model = $model;
    $this->title = $title;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\View\View|\Closure|string
   */
  public function render()
  {
    return view('itlogiko::components.table');
  }
}
