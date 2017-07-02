<?php
  function h($s)
  {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); //データを文字列として扱う
  }
