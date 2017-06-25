<h1>How much of a slut are you?</h1>

<?php
    if (isset($_POST['submit'])){
        
        $slut_amount = (int)$_POST['gender'] + (int)$_POST['gender'] + (int)$_POST['sex'] + (int)$_POST['state'] + (int)$_POST['condom'] + (int)$_POST['lover'] + (int)$_POST['car'];
        
        if($slut_amount > 7){
             echo '<h2>You are a slut</h2>';
             echo  wordwrap('You probably have a std and you don\'t care. You will someday have mulitple kids with multiple people. Nothing is wrong with being a slut. You are living your life. Congrats!',50, "<br />\n");
        }else if($slut_amount > 4){
             echo '<h2>You are a normal human being</h2>';
             echo  wordwrap('You are neither a slut nor a prude. You are completely normal and there is nothing special about you. Congrats!',50, "<br />\n");
        }else{
            echo '<h2>You are prude.</h2>';
            echo  wordwrap('hahaha like how you never get the succ like nigga hit up a slut lmao',50, "<br />\n");
        }
        
    }else{
        
    ?>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
  1.  What gender are you?<br>
  <input type="radio" name="gender" value="0"> Guy<br>
  <input type="radio" name="gender" value="1"> Girl<br>
  <input type="radio" name="gender" value="2"> I don't even know anymore <br><br>
     
    2. What gender are you sexually attracted to?<br>
  <input type="radio" name="sex" value="1"> Guys<br>
  <input type="radio" name="sex" value="0"> Girls<br>
  <input type="radio" name="sex" value="2"> Ayy just toss me some genitals and I'm down <br><br>
  
    3. What state are you from?<br>
  <input type="radio" name="state" value="2"> Virgina<br>
  <input type="radio" name="state" value="1"> New Jersey<br>
  <input type="radio" name="state" value="0"> A state with resaonable people <br><br>
  
   4. Do you use condoms?<br>
  <input type="radio" name="condom" value="0"> Yes, safe sex is important!<br>
  <input type="radio" name="condom" value="1"> Only when it's random hookups<br>
  <input type="radio" name="condom" value="2"> Stds are made up by Chinese condom manufacturers <br><br>
  
     5. What do prefer your lover to call you? <br>
  <input type="radio" name="lover" value="1"> "Babe"<br>
  <input type="radio" name="lover" value="0"> "Honey"<br>
  <input type="radio" name="lover" value="2"> "Shut the fuck up you dumb cunt!" <br><br>
  
       5. A car almost hit you today, how do you feel about it? <br>
  <input type="radio" name="car" value="0"> I'm so happy I'm alive. My friends and family love me!<br>
  <input type="radio" name="car" value="1"> What an asshole. That driver should of been looking where he's going!<br>
  <input type="radio" name="car" value="2"> I wish it hit me! <br><br>
  
  <input type="submit" value="Submit" name="submit">
  
</form> 

<?php 
}
