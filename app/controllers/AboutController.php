<?php
class AboutController extends BaseController {
  public $restful = true;
  public function get_index() {
    $view = View::make('about.index', array('name'=>'Muhammad Mustadi'))
      ->with('age','21');
    $view->location = 'Bandung';
    $view['major'] = 'Electrical Engineering';
    $view->title = 'About the Author.';
    return $view;
  }
}
