<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Order_model extends MY_Model {

  public $table_name = 'orders';

  public function __construct()
  {
    parent::__construct();
  }

}
