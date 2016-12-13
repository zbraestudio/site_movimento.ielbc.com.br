<?
include('./incs/autoload.php');

class ICS {
  var $data;

  private function start(){
    return "BEGIN:VCALENDAR\nVERSION:2.0\nMETHOD:PUBLISH\n";
  }
  private function end(){
    return "END:VCALENDAR\n";
  }

  private function getData(){
    $data  = $this->start();
    $data .= $this->data;
    $data .= $this->end();
    return $data;
  }


  function add($start,$end,$name,$description,$location) {
    $this->data .= "BEGIN:VEVENT\nDTSTART:".date("Ymd\THis\Z",strtotime($start))."\nDTEND:".date("Ymd\THis\Z",strtotime($end))."\nLOCATION:".$location."\nTRANSP: TRANSPARENT\nSEQUENCE:0\nUID:\nDTSTAMP:".date("Ymd\THis\Z")."\nSUMMARY:".$name."\nDESCRIPTION:".$description."\nPRIORITY:1\nCLASS:PUBLIC\nBEGIN:VALARM\nTRIGGER:-PT10080M\nACTION:DISPLAY\nDESCRIPTION:Reminder\nEND:VALARM\nEND:VEVENT\n";
  }

  function save() {
    file_put_contents($this->name.".ics",$this->getData());
  }

  function show() {
    header("Content-type:text/calendar");
    header('Content-Disposition: attachment; filename="livres.ics"');
    Header('Content-Length: '.strlen($this->getData()));
    Header('Connection: close');
    echo $this->getData();
  }

}

$evento = new ICS();

$sql  = 'SELECT * FROM Agenda';
$sql .= " WHERE Publicado = 'Y'";
$sql .= ' ORDER BY `Data` ASC';
$itens = $db->LoadObjects($sql);

foreach($itens as $item) {
  $evento->add($item->Data, $item->DataFim, $item->Titulo, $item->Texto, "GU1 1AA");
}

$evento->show();
?>