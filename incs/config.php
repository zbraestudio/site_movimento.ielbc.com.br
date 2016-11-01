<?

set_config('site_path',           'D:\github\site_www.livresweb.com\\');
set_config('site_url',           'http://localhost/github/site_www.livresweb.com/');

set_config('site_title',           'LIVRES');



function get_config($key){

  if(isset($GLOBALS[$key]))
    return $GLOBALS[$key];
  else
    return -1;

}

function set_config($key, $value){
  $GLOBALS[$key] = $value;
}


function set_page_title($title){

  $x = get_config('site_title');
  set_config('site_title', $title . ' | ' . $x);
}

?>