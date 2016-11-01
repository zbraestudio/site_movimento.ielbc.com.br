<?

$GLOBALS['site_path'] =           'D:\github\site_www.livresweb.com\\';
$GLOBALS['site_url'] =            'http://localhost/github/site_www.livresweb.com/';

$GLOBALS['site_title'] =          'LIVRES';



function get_config($key){

  if(isset($GLOBALS[$key]))
    return $GLOBALS[$key];
  else
    return -1;

}

?>