<?php
    function format_space($encode) {
    $encoded = preg_replace('/\s+/', '_', $encode);
    return $encoded;
  }

  function format_undrscr($decode) {
    $decoded = preg_replace('/_/', ' ', $decode);
    return $decoded;
  }
 ?>
