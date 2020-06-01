<?php
/*
▄▄▌  ▄▄▄ . ▄▄▄· ▄ •▄  ▄▄·       ·▄▄▄▄  ▄▄▄ .
██•  ▀▄.▀·▐█ ▀█ █▌▄▌▪▐█ ▌▪▪     ██▪ ██ ▀▄.▀·
██▪  ▐▀▀▪▄▄█▀▀█ ▐▀▀▄·██ ▄▄ ▄█▀▄ ▐█· ▐█▌▐▀▀▪▄
▐█▌▐▌▐█▄▄▌▐█ ▪▐▌▐█.█▌▐███▌▐█▌.▐▌██. ██ ▐█▄▄▌
.▀▀▀  ▀▀▀  ▀  ▀ ·▀  ▀·▀▀▀  ▀█▄▀▪▀▀▀▀▀•  ▀▀▀
Fucked By [!]DNThirTeen
https://www.facebook.com/groups/leakcode/
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Letter Encryption v.69</title>
    <style>
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       color: black;
       text-align: center;
       font-size: 13px;
    }
    </style>
</head>
<body>
    <form method="post">
        <center>
            <textarea name="field" style="width: 450px; height: 300px;"></textarea><br>
            <input type="submit" value=".:ENCRYPT:.">
        </center>
    </form><?php
    function randomz($x=0){
        $letters=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9");
        $b_rnd = rand($x, $x+7);
        $rand_comn = "";
        for ($i = 0; $i < $b_rnd; $i++) {
            $c_rnd = rand(0, 36);
            $rand_comn.=@$letters[$c_rnd];
        }
        return $rand_comn;
    }
    function Homo($str, $obs=false) {
        $crypt = array( "A" => base64_decode("zpE="), "a" => base64_decode("0LA="), "B" => base64_decode("zpI="), "b" => "b", "C" => base64_decode("z7k="), "c" => base64_decode("z7I="), "D" => "D", "d" => base64_decode("1IE="), "E" => base64_decode("zpU="), "e" => base64_decode("0LU="), "F" => "F", "f" => "f", "G" => base64_decode("1Iw="), "g" => "g", "H" => base64_decode("zpc="), "h" => "h", "I" => base64_decode("zpk="), "i" => base64_decode("0ZY="), "J" => base64_decode("0Ig="), "j" => base64_decode("0Zg="), "K" => base64_decode("zpo="), "k" => "k", "L" => "L", "l" => "l", "M" => base64_decode("zpw="), "m" => "m", "N" => base64_decode("zp0="), "n" => "n", "O" => base64_decode("zp8="), "o" => base64_decode("0L4="), "P" => base64_decode("zqE="), "p" => base64_decode("0YA="), "Q" => base64_decode("1Jo="), "q" => base64_decode("1Js="), "R" => base64_decode("Ug=="), "r" => "r", "S" => base64_decode("0IU="), "s" => base64_decode("0ZU="), "T" => base64_decode("zqQ="), "t" => "t", "U" => "U", "u" => "u", "V" => "V", "v" => "v", "W" => base64_decode("Vw=="), "w" => base64_decode("0aE="), "X" => base64_decode("zqc="), "x" => base64_decode("0YU="), "Y" => base64_decode("0q4="), "y" => base64_decode("0YM="), "Z" => base64_decode("zpY="), "z" => base64_decode("eg=="), "0" => "0", "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "&" => "&", " " => " ", "_" => "_", "-" => "-", "@" => "@", "." => ".", "?" => "?", "/" => "/", "'" => "'", "\"" => "\"", "," => ",");
        $encode = "";
        for ($i=0; $i < strlen($str); $i++) {
          $key = substr($str, $i, 1);
          if (array_key_exists($key, $crypt)) {
            $randz = randomz(rand(5,8));
            if($obs==true) {
                $encode = $encode."<font style='color:transparent;font-size:0px'>".$randz."</font>".$crypt[$key];
            } else {
                $encode = $encode.$crypt[$key];
            }
          } else {
            $encode = $encode.$key;
          }
        }
        return $encode;
    }
    function EncryptHtml($buffer){
        $xstring = preg_replace_callback("/(<([^.]+)>)([^<]+)(<\\/\\2>)/s",
            function ($matches) {
                $text = str_replace($matches[3], Homo($matches[3], true) , $matches[3]);
                return $matches[1] . $text . $matches[4];
            }, $buffer);
        $xtemplate  = preg_replace_callback("~(placeholder|name|id|class|lang|http-equiv|content|onload|href|alt)=(\"|')(.*?)(\"|')~",
            function ($matches){
                if ($matches[1]=="href" && $matches[3]=="#") {
                    return "href=\"#\"";
                }
                $crypt = array(" "=>"032","A"=>"065","a"=>"097","B"=>"066","b"=>"098","C"=>"067","c"=>"099","D"=>"068","d"=>"100","E"=>"069","e"=>"101","F"=>"070","f"=>"102","G"=>"071","g"=>"103","H"=>"072","h"=>"104","I"=>"073","i"=>"105","J"=>"074","j"=>"106","K"=>"075","k"=>"107","L"=>"076","l"=>"108","M"=>"077","m"=>"109","N"=>"078","n"=>"110","O"=>"079","o"=>"111","P"=>"080","p"=>"112","Q"=>"081","q"=>"113","R"=>"082","r"=>"114","S"=>"083","s"=>"115","T"=>"084","t"=>"116","U"=>"085","u"=>"117","V"=>"086","v"=>"118","W"=>"087","w"=>"119","X"=>"088","x"=>"120","Y"=>"089","y"=>"121","Z"=>"090","z"=>"122","0"=>"048","1"=>"049","2"=>"050","3"=>"051","4"=>"052","5"=>"053","6"=>"054","7"=>"055","8"=>"056","9"=>"057","&"=>"038","_"=>"095","-"=>"045","@"=>"064","."=>"046");
                $crypted_txt = "";
                for ($i=0; $i < strlen($matches[3]); $i++) {
                  $y=substr($matches[3],$i,1);
                  if (array_key_exists($y,$crypt)) {
                      $x_rnd = rand(0,2);
                      if ($x_rnd==1) {
                            $crypted_txt = $crypted_txt.$y;
                        }else{
                            $crypted_txt = $crypted_txt."&#".$crypt[$y].";";
                        }
                    }else{
                    $crypted_txt = $crypted_txt.$y;
                    }
                }
                if ($matches[1]=="class") {
                    $crypted_txt = randomz(5)." ".$crypted_txt." ".randomz(5);
                }
                if ($matches[2] =="'") {
                    return $matches[1]."='".$crypted_txt."'";
                }else{
                    return $matches[1]."=\"".$crypted_txt."\"";
                }
            }, $xstring);
        $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
        $replace = array('>', '<', '\\1', '');
        $minify = preg_replace($search, $replace, $xtemplate);
        return $minify;
    }

    if (isset($_POST['field'])) {
        $letter = $_POST['field'];
            echo '  <center>
            <textarea name="field" style="width: 450px; height: 300px;">' . EncryptHtml($letter) . '</textarea>
        </center>';
        
    }

    ?>
    <div class="footer">
        <p>Copyright &copy; <?php echo date('Y'); ?>. Letter Encryption v6.9</p>
    </div>
</body>
</html>
