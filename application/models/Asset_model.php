<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Asset_model extends MY_Model {

  public $table_name = 'assets';

  public function __construct()
  {
    parent::__construct();
  }

  function find_attachment($id='')
  {
    $assets = $this->db
      ->where_in('id',$id)
      ->order_by('id','ASC')
      ->get('assets');

    return $assets->result_array();
  }

}
