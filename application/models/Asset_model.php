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

  function delete_attachment($asset_id='')
  {
    $exist = $this->db
      ->select('file_name')
      ->where('id',$asset_id)
      ->get($this->table_name);

    if ($exist->num_rows()) :
      $file = $exist->row_array();
      $file_path = FCPATH.'uploads/attachments/'.$file['file_name'];
      if (unlink($file_path)) :
        $as_del = $this->db
          ->where('id',$asset_id)
          ->delete($this->table_name);
        $ab_del = $this->db
          ->where('asset_id',$asset_id)
          ->delete('assets_by');
        return TRUE;
      endif;
    endif;

    return FALSE;
  }

}
