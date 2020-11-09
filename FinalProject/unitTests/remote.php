<?
class Remote
{
  public function connectToServer($serverName=null)
  {
    if($serverName==null){
      throw new Exception('Server name has a mistake!');
    }
    $touch = fsockopen($serverName,80);//открываем соединение к серванту
    return ($touch) ? true : false;
  }
 
  public function returnSampleObject()
  {
    return $this;
  }
}