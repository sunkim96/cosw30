<?php

    $numParagraphs = $_POST['paragraphs'];
    $text = $_POST['text'];
    
    $textExplode = explode(' ', $text); // converts string to array 

    
    shuffle($textExplode);
    
     
    //foreach($textExplode as $key => $word); {
       // echo "<p>$key Value: $value</p>";
   // }
    
    // Use a implode function, to turn it back into a string
    $textImplode = implode(' ', $textExplode);
    // Or output using a foreach loop
    
    echo "<p>$textImplode</p>";
    
    
   for($i = 0; $i < $numParagraphs; $i++){
        // Output a paragraph
        echo "<p>$textImplode</p>"; 
       
   }
    
    // foreach()
    // while()
    
    // $text = "What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
   // Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a 
   // galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but 
   // also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
    //with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    //software like Aldus PageMaker including versions of Lorem Ipsum.";
    
    
    
?>