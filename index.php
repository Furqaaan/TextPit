<?php

class Answer {

    public function answer() {

        $uservalue = strip_tags($_POST["uservalue"]);
        $useroption = strip_tags($_POST["useroption"]);

        if($useroption == "UPPERCASE") {
            return strtoupper($uservalue);
        }
        if($useroption == "LOWERCASE") {
            return strtolower($uservalue);
        }
        if($useroption == "LENGTH") {
            return strlen($uservalue);
        }
        if($useroption == "SHUFFLE") {
            return str_shuffle($uservalue);
        }
        if($useroption == "REVERSE") {
            return strrev($uservalue);
        }
        if($useroption == "REPEAT") {
            return str_repeat($uservalue,5);
        }
        if($useroption == "REMOVE SPACES") {
            return str_replace(" ","",$uservalue);
        }
        if($useroption == "REMOVE COMMA") {
            return str_replace(","," ",$uservalue);
        }
        if($useroption == "MD5 HASH") {
            return md5($uservalue);
        }
        if($useroption == "BINARY TO HEX") {
            return bin2hex($uservalue);
        }
        if($useroption == "SINGLE QUOTES TO DOUBLE") {
            return str_replace("'","\"",$uservalue);
        }
        if($useroption == "DOUBLE QUOTES TO SINGLE") {
            return str_replace("\"","'",$uservalue);
        }
        if($useroption == "SHA1 HASH") {
            return sha1($uservalue);
        }
        if($useroption == "FIRST LETTER UPPERCASE") {
            return ucwords($uservalue);
        }
        if($useroption == "ROT13") {
            return str_rot13($uservalue);
        }
        if($useroption == "REMOVE PERIODS") {
            return str_replace("."," ",$uservalue);
        }
        if($useroption == "BASE64 ENCODE") {
            return base64_encode($uservalue);
        }
        if($useroption == "BASE64 DECODE") {
            return base64_decode($uservalue);
        }
        if($useroption == "URL DECODE") {
            return urldecode($uservalue);
        }
        if($useroption == "URL ENCODE") {
            return urlencode($uservalue);
        }
        if($useroption == "MD4 HASH") {
            return hash("md4",$uservalue);
        }
        if($useroption == "SHA256 HASH") {
            return hash("sha256",$uservalue);
        }
        if($useroption == "SHA384 HASH") {
            return hash("sha384",$uservalue);
        }
        if($useroption == "SHA512 HASH") {
            return hash("sha512",$uservalue);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TEXTPIT | A SIMPLE POWERFULL TEXT EDITOR</title>
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div id="wrap">
            <form method="POST" action="index.php">
                <textarea id="uservalue" type="text" name="uservalue" placeholder="Enter your text here ..."><?php 
                        if($_SERVER["REQUEST_METHOD"] == "POST") { 
                            $a = new Answer();
                            $answer = $a->answer();
                            echo $answer;
                        }
                    ?></textarea><br><br>
                <div id="answer">
                    <code>OUTPUT :</code><br>
                    <?php 
                        if($_SERVER["REQUEST_METHOD"] == "POST") { 
                            $a = new Answer();
                            $answer = $a->answer();
                            echo "<p>".$answer."</p>";
                        }
                    ?>
                </div>
                <br>
                <input type="submit" value="UPPERCASE" name="useroption">
                <input type="submit" value="LOWERCASE" name="useroption">
                <input type="submit" value="LENGTH" name="useroption">
                <input type="submit" value="SHUFFLE" name="useroption">
                <input type="submit" value="REVERSE" name="useroption">
                <input type="submit" value="REPEAT" name="useroption">
                <input type="submit" value="MD4 HASH" name="useroption">
                <input type="submit" value="URL ENCODE" name="useroption">
                <input type="submit" value="REMOVE SPACES" name="useroption">
                <input type="submit" value="BASE64 ENCODE" name="useroption">
                <input type="submit" value="REMOVE COMMA" name="useroption">
                <input type="submit" value="REMOVE PERIODS" name="useroption">
                <input type="submit" value="URL DECODE" name="useroption">
                <input type="submit" value="BASE64 DECODE" name="useroption">
                <input type="submit" value="BINARY TO HEX" name="useroption">
                <input type="submit" value="MD5 HASH" name="useroption">
                <input type="submit" value="SHA1 HASH" name="useroption">
                <input type="submit" value="ROT13" name="useroption">
                <input type="submit" value="SHA384 HASH" name="useroption">
                <input type="submit" value="SHA256 HASH" name="useroption">
                <input type="submit" value="SHA512 HASH" name="useroption">
                <input type="submit" value="SINGLE QUOTES TO DOUBLE" name="useroption">
                <input type="submit" value="DOUBLE QUOTES TO SINGLE" name="useroption">
                <input type="submit" value="FIRST LETTER UPPERCASE" name="useroption">
            </form>
        </div>
    </body>
</html>