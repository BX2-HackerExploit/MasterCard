 <?php
 /*Color*/
 $green = "\033[92m";
 $red = "\033[91m";
 $cyan = "\033[36m";
 $yellow = "\033[93m";
 $bold = "\033[5m";
 $white = "\033[0m";
 /*Form*/
 $date   = date('d-M-Y H:i');
 //system("clear");
 echo $red . "
 
 _________________
< BX2 ¢¢ Hacker >
 -----------------
    \
     \
                                   .::!!!!!!!:.
  .!!!!!:.                        .:!!!!!!!!!!!!
  ~~~~!!!!!!.                 .:!!!!!!!!!UWWW$$$
      :$$NWX!!:           .:!!!!!!XUWW$$$$$$$$$P
      $$$$$##WX!:      .<!!!!UW$$$$"  $$$$$$$$#
      $$$$$  $$$UX   :!!UW$$$$$$$$$   4$$$$$*
      ^$$$B  $$$$\     $$$$$$$$$$$$   d$$R"
        "*$bd$$$$      '*$$$$$$$$$$$o+#"
             """"          """""""
  ______   _____               _    _            _
 |  _ \ \ / /__ \     _   _   | |  | |          | |
 | |_) \ V /   ) |   | | | |  | |__| | __ _  ___| | _____ _ __
 |  _ < > <   / /   / __) __) |  __  |/ _` |/ __| |/ / _ \ '__|
 | |_) / . \ / /_  | (_| (__  | |  | | (_| | (__|   <  __/ |
 |____/_/ \_\____|  \   )   ) |_|  |_|\__,_|\___|_|\_\___|_|
 
  ";
  echo $blue . "==================================";
  echo $bold . $green . "\nCoder   : php.Script Code
  Team    : BX2 Security Script
  Code    : PHP
  Version : 8.9.9.0
  Note: 
  JANGAN PERCAYA KEPADA SIAPAPUN.!! \n";
  echo $bold . $green . "DMYH    : $date\n";
  echo $blue . "==================================\n";
  echo $bold . $red . "Count      : ";
  $count = trim(fgets(STDIN,1024));
  echo $bold . $white . "Delay      : ";
  $sleep = trim(fgets(STDIN,1024));
  for($x = 0; $x < $count; $x++){
  $str = file_get_contents("http://namegenerators.org/fake-name-generator-us/");
  $var = '/<div class="col2">(.*?)<\/div>/s';
  preg_match_all($var, $str, $matches);
  echo $red . "\n $$$$$$$$$$$$$$$ MORE INFORMATION $$$$$$$$$$$$$$$\n";
  echo $bold . $cyan . "[name : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
                  " [address : ".$matches[1][8]."]".
                  " [phone : ".$matches[1][9]."]\n";
  echo $red . "\n $$$$$$$$$$$$$$$ CARD INFORMATION $$$$$$$$$$$$$$$\n";
  echo $bold . $Yellow . "[email : ".$matches[1][10]."]".
                  " [card number : ".str_replace(" ", "", $matches[1][14])."]".
                  " [cvv : ".$matches[1][16]."]".
                  " [exp-date : ".$matches[1][15]."]\n";
                  " [Card number Ben : ".str_replace(" ", "", $matches[1][12])."]".
          sleep($sleep);    
          
  }     
  ?>   