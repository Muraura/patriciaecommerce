<?php
 Class site_model extends CI_Model
 {
    public function display_page_title()
    {
        //explode is converting to an array
      $page = explode("/",uri_string());
      $total = count($page);
      $last = $total - 1;
      //last item in url
      $name = $this->site_model->decode_web_name($page[$last]);
      
      if(is_numeric($name))
      {
        $last = $last - 1;
        $name = $this->site_model->decode_web_name($page[$last]);
      }
      $page_url = ucwords(strtolower($name));
      
      return $page_url;
    }
    public function decode_web_name($web_name)
  {
    $field_name = str_replace("-", " ", $web_name);
    
    return $field_name;
  }
 }

?>