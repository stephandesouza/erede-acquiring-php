<?php

namespace ERede\Acquiring\Integration;

class ConfirmTxnTID {

  public $request = null;

  public function __construct($data) {
    $this->request = $data;
  }

}
