<?

if( $_SERVER['HTTP_HOST'] == 'localhost'){

  set_config('site_path',           'D:\github\site_www.livresweb.com\\');
  set_config('site_url',            'http://localhost/github/site_www.livresweb.com/');

} else {

  set_config('site_path',           '/dados/http/livresweb.com/www/');
  set_config('site_url',            'http://www.livresweb.com/');

}


set_config('sistema_path',          '/dados/http/livresweb.com/sistema/');
set_config('sistema_url',           'http://sistema.livresweb.com/');
set_config('sistema_upload_path',   '/dados/http/livresweb.com/sistema/uploads/');
set_config('sistema_upload_url',    'http://sistema.livresweb.com/uploads/');

set_config('meta_title',          'LIVRES');
set_config('meta_description',    'Uma Igreja pra quem não gosta de igreja e para pessoas de quem a igreja não gosta.');
set_config('meta_tags',           'movimento, cristão, Jesus, evangelho, Graça, escândalo da Graça');
set_config('meta_image',          'http://www.livresweb.com/images/shared.jpg');
set_config('robots_index',        true);




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

  $x = get_config('meta_title');
  set_config('meta_title', $title . ' — ' . $x);
}



function set_page_description($description){
  set_config('meta_description', $description);
}
function set_page_tags($tags){
  set_config('meta_tags', $tags);
}


function set_page_image($url){
  set_config('meta_image', $url);
}

function set_page_noindex(){
  set_config('robots_index', false);
}


$urls = $_SERVER["REQUEST_URI"];
$urls = explode('/', $urls);
set_config('page', @array_pop($urls));



?>