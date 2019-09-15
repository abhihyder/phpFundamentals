<?php
//sorting array
//sort by order [a,b,c... or 1,2,3, etc]
$names=array("Sujon", "Abhi", "Tofayel", "Anik", "Rony", "Hyder");
    sort($names); 
    echo $names[0]."</br>";
    
    $loop=count($names);
    //print by loop
    for($i=0; $i<$loop; $i++){
        echo $names[$i]."</br>";
    }

    echo"<hr></hr>";




//sort reverse by order
$names1=array("Sujon", "Abhi", "Tofayel", "Anik", "Rony", "Hyder");
    rsort($names1); 
    echo $names1[0]."</br>";
    
    $loop1=count($names1);
    //print by loop
    for($i1=0; $i1<$loop1; $i1++){
        echo $names1[$i1]."</br>";
    } 
    echo"<hr></hr>";
    




//sort associative array by keyValue order
$names2=array("Sujon"=>32, "Abhi"=>27, "Tofayel"=>28, "Anik"=>26, "Rony"=>25, "Hyder"=>28);
    asort($names2); 
    
    foreach($names2 as $loop2=>$age){
        echo $loop2." ".$age."</br>" ;
    }

    echo"<hr></hr>";


    

//sort associative array by keys order
$names3=array("Sujon"=>32, "Abhi"=>27, "Tofayel"=>28, "Anik"=>26, "Rony"=>25, "Hyder"=>28);
    ksort($names3); 
    
    foreach($names3 as $loop3=>$age2){
        echo $loop3." ".$age2."</br>" ;
    }
?>