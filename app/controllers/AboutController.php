<?php
class AboutController extends BaseController {
  public $restful = true;
  public function get_index() {
    $view = View::make('about.index', array('name'=>'Muhammad Mustadi'))
      ->with('age','28');
    $view->location = 'Bandung';
    $view['major'] = 'Electrical Engineering';
    return $view;
  }
}
