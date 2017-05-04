<?php
  function encrypt($change) {
    $encoded = '';
    $i = strlen($encoded);
    while ($i <= strlen($change)) {
      $query = $change[$i];
      switch ($query) {
        case 'a':
          $encoded = $encoded.'d';
        break;
        case 'b':
          $encoded = $encoded.'c';
        break;
        case 'c':
          $encoded = $encoded.'b';
        break;
        case 'd':
          $encoded = $encoded.'a';
        break;
        case 'e':
          $encoded = $encoded.'z';
        break;
        case 'f':
          $encoded = $encoded.'y';
        break;
        case 'g':
          $encoded = $encoded.'x';
        break;
        case 'h':
          $encoded = $encoded.'w';
        break;
        case 'i':
          $encoded = $encoded.'v';
        break;
        case 'j':
          $encoded = $encoded.'u';
        break;
        case 'k':
          $encoded = $encoded.'t';
        break;
        case 'l':
          $encoded = $encoded.'s';
        break;
        case 'm':
          $encoded = $encoded.'r';
        break;
        case 'n':
          $encoded = $encoded.'q';
        break;
        case 'o':
          $encoded = $encoded.'p';
        break;
        case 'p':
          $encoded = $encoded.'o';
        break;
        case 'q':
          $encoded = $encoded.'n';
        break;
        case 'r':
          $encoded = $encoded.'m';
        break;
        case 's':
          $encoded = $encoded.'l';
        break;
        case 't':
          $encoded = $encoded.'k';
        break;
        case 'u':
          $encoded = $encoded.'j';
        break;
        case 'v':
          $encoded = $encoded.'i';
        break;
        case 'w':
          $encoded = $encoded.'h';
        break;
        case 'x':
          $encoded = $encoded.'g';
        break;
        case 'y':
          $encoded = $encoded.'f';
        break;
        case 'z':
          $encoded = $encoded.'e';
        break;
        case 'A':
          $encoded = $encoded.'D';
        break;
        case 'B':
          $encoded = $encoded.'C';
        break;
        case 'C':
          $encoded = $encoded.'B';
        break;
        case 'D':
          $encoded = $encoded.'A';
        break;
        case 'E':
          $encoded = $encoded.'Z';
        break;
        case 'F':
          $encoded = $encoded.'Y';
        break;
        case 'G':
          $encoded = $encoded.'X';
        break;
        case 'H':
          $encoded = $encoded.'W';
        break;
        case 'I':
          $encoded = $encoded.'V';
        break;
        case 'J':
          $encoded = $encoded.'U';
        break;
        case 'K':
          $encoded = $encoded.'T';
        break;
        case 'L':
          $encoded = $encoded.'S';
        break;
        case 'M':
          $encoded = $encoded.'R';
        break;
        case 'N':
          $encoded = $encoded.'Q';
        break;
        case 'O':
          $encoded = $encoded.'P';
        break;
        case 'P':
          $encoded = $encoded.'O';
        break;
        case 'Q':
          $encoded = $encoded.'N';
        break;
        case 'R':
          $encoded = $encoded.'M';
        break;
        case 'S':
          $encoded = $encoded.'L';
        break;
        case 'T':
          $encoded = $encoded.'K';
        break;
        case 'U':
          $encoded = $encoded.'J';
        break;
        case 'V':
          $encoded = $encoded.'I';
        break;
        case 'W':
          $encoded = $encoded.'H';
        break;
        case 'X':
          $encoded = $encoded.'G';
        break;
        case 'Y':
          $encoded = $encoded.'F';
        break;
        case 'Z':
          $encoded = $encoded.'E';
        break;
        default:
          $encoded = $encoded.$change[$i];
        break;
      }
      $i++;
    }
    return $encoded;
  }

  function decrypt($decode) {
    $decoded = '';
    $i = strlen($decoded);
    while ($i <= strlen($decode)) {
      $query = $decode[$i];
      switch ($query) {
        case 'a':
          $decoded = $decoded.'d';
        break;
        case 'b':
          $decoded = $decoded.'c';
        break;
        case 'c':
          $decoded = $decoded.'b';
        break;
        case 'd':
          $decoded = $decoded.'a';
        break;
        case 'e':
          $decoded = $decoded.'z';
        break;
        case 'f':
          $decoded = $decoded.'y';
        break;
        case 'g':
          $decoded = $decoded.'x';
        break;
        case 'h':
          $decoded = $decoded.'w';
        break;
        case 'i':
          $decoded = $decoded.'v';
        break;
        case 'j':
          $decoded = $decoded.'u';
        break;
        case 'k':
          $decoded = $decoded.'t';
        break;
        case 'l':
          $decoded = $decoded.'s';
        break;
        case 'm':
          $decoded = $decoded.'r';
        break;
        case 'n':
          $decoded = $decoded.'q';
        break;
        case 'o':
          $decoded = $decoded.'p';
        break;
        case 'p':
          $decoded = $decoded.'o';
        break;
        case 'q':
          $decoded = $decoded.'n';
        break;
        case 'r':
          $decoded = $decoded.'m';
        break;
        case 's':
          $decoded = $decoded.'l';
        break;
        case 't':
          $decoded = $decoded.'k';
        break;
        case 'u':
          $decoded = $decoded.'j';
        break;
        case 'v':
          $decoded = $decoded.'i';
        break;
        case 'w':
          $decoded = $decoded.'h';
        break;
        case 'x':
          $decoded = $decoded.'g';
        break;
        case 'y':
          $decoded = $decoded.'f';
        break;
        case 'z':
          $decoded = $decoded.'e';
        break;
        case 'A':
          $decoded = $decoded.'D';
        break;
        case 'B':
          $decoded = $decoded.'C';
        break;
        case 'C':
          $decoded = $decoded.'B';
        break;
        case 'D':
          $decoded = $decoded.'A';
        break;
        case 'E':
          $decoded = $decoded.'Z';
        break;
        case 'F':
          $decoded = $decoded.'Y';
        break;
        case 'G':
          $decoded = $decoded.'X';
        break;
        case 'H':
          $decoded = $decoded.'W';
        break;
        case 'I':
          $decoded = $decoded.'V';
        break;
        case 'J':
          $decoded = $decoded.'U';
        break;
        case 'K':
          $decoded = $decoded.'T';
        break;
        case 'L':
          $decoded = $decoded.'S';
        break;
        case 'M':
          $decoded = $decoded.'R';
        break;
        case 'N':
          $decoded = $decoded.'Q';
        break;
        case 'O':
          $decoded = $decoded.'P';
        break;
        case 'P':
          $decoded = $decoded.'O';
        break;
        case 'Q':
          $decoded = $decoded.'N';
        break;
        case 'R':
          $decoded = $decoded.'M';
        break;
        case 'S':
          $decoded = $decoded.'L';
        break;
        case 'T':
          $decoded = $decoded.'K';
        break;
        case 'U':
          $decoded = $decoded.'J';
        break;
        case 'V':
          $decoded = $decoded.'I';
        break;
        case 'W':
          $decoded = $decoded.'H';
        break;
        case 'X':
          $decoded = $decoded.'G';
        break;
        case 'Y':
          $decoded = $decoded.'F';
        break;
        case 'Z':
          $decoded = $decoded.'E';
        break;
        default:
          $decoded = $decoded.$decode[$i];
        break;
      }
      $i++;
    }
    return $decoded;
  }
 ?>
