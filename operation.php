<?php
$c=0;
   $username =isset($_POST['username']) ? $_POST['username'] : "";
   $password =isset($_POST['password']) ? $_POST['password'] : "";
   $success = FALSE;  
   if(isset($_POST['submit']) ){ 
       if(($lf=fopen("data.csv","r")) !==FALSE ){ 
       while(!feof($lf)){
           $donne = fgetcsv($lf,1200,';');
           echo "$donne[0] $donne[1] <br>";
           $c++;
           echo "$c";
           if($username == $donne[0] && $password == $donne[1])              
              {
                  $success = True;
              }
        }
    }
    fclose($lf);  
   if($success)
   {
       header("Location:note.html");
   }
   else
   {echo "<script> alert('login failed !') </script>";}
}
?>