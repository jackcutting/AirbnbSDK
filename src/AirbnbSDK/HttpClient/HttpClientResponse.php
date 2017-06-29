<?php

namespace AirbnbSDK\HttpClient;

class HttpClientResponse {

  /**
   * @var mixed $raw
   */
  protected $raw;

  /**
   * @var mixed $parsed
   */
  protected $parsed;

  /**
   * @param mixed $raw
   * @param mixed $parsed
   */
  public function __construct($raw = null, $parsed = null)
  {
    $this->raw = $raw;
    $this->parsed = $parsed;
  }

  /**
   * @return mixed
   */
  public function getRaw()
  {
    return $this->raw;
  }

  /**
   * @return mixed
   */
  public function getParsed()
  {
    return $this->parsed;
  }

  /**
   * @return array
   */
  public function get()
  {
    return array( 'raw' => $this->raw, 'parsed' => $this->parsed );
  }

}
