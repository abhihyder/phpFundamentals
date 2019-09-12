<?php
            $a="Welcome to learning PHP!";

            echo strlen ($a); //length of the string
            echo "</br>";

            echo str_word_count ($a); // word count of the string
            echo "</br>";

            echo strrev ($a); //string reverse
            echo "</br>";

            echo strpos ($a, "PHP"); //string position
            echo "</br>";
            
            echo str_replace ("PHP","Laravel",$a); //string replace
            ?>