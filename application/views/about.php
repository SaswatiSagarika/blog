<?php
/**
    *File name: about.
    *File type: php.
    *Date of  creation:20th march 2017.
    *Author:mindfire solutions(saswati).
    *Purpose: this php file extends to all other files.
    *Path:D:\PHP Projects\blog and comments\blog1\resources\veiws\layouts.
    **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    
</head>
<body id="app-layout"><div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="jumbotron">
                
                        <h1>About Me</h1>
                        <p>This is What I do </p>
                    </div>
                </div>
            
                <div class="panel-body">
                   <div class="row">
                        <div class ="col-md-2">
                            <img src="css\image\download.jpg" class="img-responsive img-circle margin" align="middle" alt="Bird" width="150" height="450">
                        </div>
                        <div class="col-md-10">
                            <p>
                    
<b>Harry Houdini</b> (born Erik Weisz, later Ehrich Weiss or Harry Weiss; March 24, 1874 – October 31, 1926) was a Hungarian-American illusionist and stunt performer,
noted for his sensational escape acts.He first attracted notice in vaudeville in the US and then as "Harry Handcuff Houdini" on a tour of Europe, where he challenged 
police forces to keep him locked up. Soon he extended his repertoire to include chains, ropes slung from skyscrapers, straitjackets under water, and having to escape 
from and hold his breath inside a sealed milk can with water in it.
In 1904, thousands watched as he tried to escape from special handcuffs commissioned by London's Daily Mirror, keeping them in suspense for an hour. Another stunt saw
him buried alive and only just able to claw himself to the surface, emerging in a state of near-breakdown. While many suspected that these escapes were faked, Houdini
presented himself as the scourge of fake spiritualists. As President of the Society of American Magicians, he was keen to uphold professional standards and expose fraudulent
artists. He was also quick to sue anyone who imitated his escape stunts.
Houdini made several movies, but quit acting when it failed to bring in money. He was also a keen aviator, and aimed to become the first man to fly a plane in Australia.   
                
                        </p>
                        <a class="btn btn-primary" href="{{ url('/list') }}" align="middle">
                        <i class="fa fa-btn fa-sign-out"></i>Back
                        </a>        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      
</body>
</html>
