<?php

class MenuItem {

  var $active;
  var $url;
  var $title;

  function __construct($active, $url, $title) {
    $this->active = $active;
    $this->url = $url;
    $this->title = $title;
  }

}

?>