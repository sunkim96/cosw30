<!doctype html>
<html>
<head>
    <title>Labwork 1: Hello World</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:300i,400');

body {
 height: 500px;
  background-color: #cccccc;
  background-image: radial-gradient(lightgrey, teal);
  font-family: 'Raleway', sans-serif;
   position: justify;
   width: auto; 
   margin: 5%;
}


h1 {
   text-align: center;
}

ul {
   text-align: center;
    width: 14%;
    margin: auto;
}

#github {
   text-align: center;
   font-weight: bold;
   font-style: italic; 
}
    </style>
</head>
    <body>
        <h1>Sun Kim</h1>
        <p>My name is Sun Kim and COSW 30 is my last class until my A.S. degree for Web Development.
        I'm not sure where I want to be so, I hope to soon figure out if I enjoy the front-end or the back-end
        more. Other than web development, I love spending time with my fiance and our 2 cats. They bring me such happiness
        into my life. My favorite thing to drink is coffee, so I wouldn't be surprised if my bloodstream is now coffee.
        Here are a few hobbies: 
        <ul>
        <li>Playing piano</li>
        <li>Drawing</li>
        <li>Listening to music</li>
        </ul>
        Click <a href="https://github.com/sunkim96" target="blank"> here </a> to go to my GitHub! 
        </p>
        <?php 
            echo '<p>I have to say, my favorite websites right now are <a href="https://www.youtube.com/"> YouTube </a> and <a href="https://instagram.com/"> Instagram </a>.
            I love watching food videos when I want to pass time and listening to lo-fi playlists when I am studying. I enjoy going on instagram for all the asthetic pictures. I always 
            end up looking at interior designs and art.</p>';
            echo '<p>This assignment was a little difficult due to having no experience in PHP. Trying to learn all the commands/statements and trying to figure out the correct commands/statements got a little 
            confusing. Definitely with more practice, it will be more smooth. I cannot wait to keep reading the PHP and MySQL book to see what is in store for me! 
            I will keep practicing on HTML, CSS, and PHP to get better and better each day. </p>'
        
        ?>
    </body>
</html>


