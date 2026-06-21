<!DOCTYPE html>
<html>
    <head>
        <title>ChaseAtlantic_MEDRANO</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *{
                margin:0;
                padding:0; 
                box-sizing:border-box;
                font-family:"Raleway";
                scroll-behavior:smooth;
            }
            body{
                background-image: url('bg 1.png'); 
                background-color: black;
                min-height: 100vh; 
                background-attachment: fixed;
            }
            section{
                min-height:100vh;
                padding:100px 10%;
            }
            nav{
                position:fixed;
                top:0;
                width:100%;
                height: 7%;
                background:#3B1646;
                padding:1px 8%;
                display:flex;
                justify-content:space-between;
                align-items:center;
                z-index:1000;
            }
            #logo{
                display:block;
                margin-top: 6px;
            }
            nav ul{
                list-style:none;
                display:flex;
                gap:70px;
            }
            nav ul li a{
                text-decoration:none;
                color:white;
                font-size:12px;
            }
            .search-container input{
                background-color:transparent;
                padding:4px;
                border: none;
                border-bottom: 1px solid white;
                font-size: 12px;
            }
            .search-container button{
                background-color:transparent;
                font-size: 15px;
                color: white;
                border: none;
                cursor: pointer;
            }
            .search-container input::placeholder, 
            .search-container button:focus{
                color: white;
            }
            .search-container input:focus{
                color: white;
                outline: none;
            }
            .contact{
                display:flex;
                justify-content:center;
                align-items:center;
            }
            .contact-retrieved{
                width:40%;
                background:transparent;
                padding:30px;
            }
            .contact-retrieved h2{
                display:flex;
                justify-content:center;
                margin-bottom: 50px;

                text-align: center;
                text-justify: inter-word;
                color:white;
                font-weight:normal;
                font-size:30px;
                letter-spacing: 5px;
            }
            .contact-retrieved p{
                width:100%;
                padding:15px;
                margin-bottom:20px;
                border-radius:12px;
                background-color:rgb(59, 22, 70, 0.1);
                border: 1px solid #ffffff;
                font-size:20px;
                text-align: center;
                text-justify: inter-word;
                color: white;
                outline:none;
            }
            footer {
                left: 0;
                bottom: 0;
                width: 100%;
                background: #3B1646;
                color: white;
                text-align: center;
                padding:15px 8%;
            }
            footer p{
                font-size:12px;
            }
            .socials{
                margin-top: 10px;
                font-size:20px;
                letter-spacing:10px;
            }
            .socials a{
                text-decoration: none;
                color: white;
            }
            .fa:hover{
                opacity: 0.7;
                transition: 0.3s;
            }
            .tabs{
                transition: 0.3s;
            }
            .tabs:hover {
                opacity: 0.7;
                letter-spacing: 2px
            }
            #logo:hover{
                opacity: 0.7;
                transition: 0.3s;
            }
        </style>

    </head>

    <body>
        <nav>
            <a href="index.html #home"><img id="logo" src="Chase-Atlantic-Logo.webp" alt="Chase Atlantic Logo" width="250"></a>
            <ul>
                <li><a href="index.html #about" class="tabs">ABOUT</a></li>
                <li><a href="index.html #discography" class="tabs">DISCOGRAPHY</a></li>
                <li><a href="index.html #tours" class="tabs">TOURS</a></li>
                <li><a href="contact.php" class="tabs">CONTACT</a></li>
            </ul>
            <div class="search-container">
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="search our website" name="search">
            </div>
        </nav>
        <?php
            // var_dump($_POST);
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $message = $_POST['message'];
        ?>
        
        <section id="contact" class="contact">
            <div class="contact-retrieved">
                <h2>Thank You! Your Message has been sent.</h2>
                <p>FULLNAME: <br><b><?php echo $fullname; ?> </b></p>
                <p>EMAIL: <br><b><?php echo $email; ?> </b></p>
                <p>YOUR MESSAGE: <br><b><?php echo $message; ?> </b></p>   
            </div> 
        </section>

        <footer>
            <p>&copy; 2026 Chase Atlantic UK.</p>

            <div class="socials">
                <a href="https://www.instagram.com/chaseatlantic" class="fa fa-instagram" target="_blank"></a>
                <a href="https://www.facebook.com/ChaseAtlantic/" class="fa fa-facebook-f" target="_blank"></a>
                <a href="https://www.youtube.com/@chaseatlantic" class="fa fa-youtube-play" target="_blank"></a>
                <a href="https://x.com/chaseatlantic?lang=en" class="fa fa-twitter" target="_blank"></a>
            </div>        
        </footer>
    </body>
</html>