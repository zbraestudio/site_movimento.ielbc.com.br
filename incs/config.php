<?

if( $_SERVER['HTTP_HOST'] == 'localhost'){

  set_config('site_path',           'D:\github\site_www.livresweb.com\\');
  set_config('site_url',            'http://localhost/github/site_www.livresweb.com/');

} else {

  set_config('site_path',           'D:/github/site_www.livresweb.com/');
  set_config('site_url',            'http://www.livresweb.com/');

}

set_config('meta_title',          'LIVRES');
set_config('meta_description',    'Uma Igreja pra quem não gosta de igreja e para pessoas de quem a igreja não gosta.');
set_config('meta_tags',           'movimento, cristão, Jesus, evangelho, Graça, escândalo da Graça');
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

function set_page_noindex(){
  set_config('robots_index', false);
}




?>