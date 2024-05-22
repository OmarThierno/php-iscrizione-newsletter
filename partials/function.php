<?php
function checkEmail($string)
{
  $mes_print = '';
  if (str_contains($string, '@') && str_contains($string, '.')) {
    $mes_print = "La email inserita è una mail valida";
  } else {
    $mes_print = "La email inserita non è una email valida";
  }
  return $mes_print;
}
