<?php

class DDCurl {

  private $_ch;
  private $_url;
  public $output;
  public $displayHeader = false;
  public $status;
  private $_post = false;
  private $_postfields;

  function __construct() {
    $this->_ch = curl_init();
  }

  function __destruct() {
    curl_close($this->_ch);
  }

  public function getURL() {

    curl_setopt($this->_ch, CURLOPT_POST, $this->_post);
    curl_setopt($this->_ch, CURLOPT_URL, $this->_url);
    curl_setopt($this->_ch, CURLOPT_REFERER, "http://www.example.org/");
    curl_setopt($this->_ch, CURLOPT_USERAGENT, "Garyzilla/1.0");
    curl_setopt($this->_ch, CURLOPT_HEADER, $this->displayHeader);
    curl_setopt($this->_ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($this->_ch, CURLOPT_TIMEOUT, 10);
    $output = curl_exec($this->_ch);
    $this->status = curl_getinfo($this->_ch,CURLINFO_HTTP_CODE);
    if ($this->status != "200") {
      $this->output = json_encode(array("0" => "Error: {$this->status}"));
    } else {
      $this->output = $output;
    }
 
  }

  public function setURL($url) {
    $this->_post = false;
    $this->_url = $url;
  }

  public function setPostFields($string) {
    curl_setopt($this->_ch, CURLOPT_POSTFIELDS, $string);
    $this->_post = true;
    $this->_postfields = $string;
  }

}

?>
