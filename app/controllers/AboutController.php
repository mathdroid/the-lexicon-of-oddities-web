<?php
class AboutController extends BaseController {
  public $restful = true;
  public function get_index() {
    return View::make('about.index');
  }
}
