<!DOCTYPE html>
<html>
    <head>
        <title>ChaseAtlantic_MEDRANO</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">

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
            .contact{
                display:flex;
                justify-content:center;
                align-items:center;
            }
            .contact-form{
                width:40%;
                background:transparent;
                padding:30px;
                
            }
            .contact-form h2{
                display:flex;
                justify-content:center;
                margin-bottom: 50px;
                color:white;
                font-weight:normal;
                font-size:50px;
                letter-spacing: 10px;
            }
            .contact-form form{
                text-align: center;
            }
            .contact-form input, .contact-form textarea{
                width:100%;
                padding:15px;
                margin-bottom:20px;
                border-radius:12px;
                background-color:rgb(59, 22, 70, 0.1);
                border: 1px solid #ffffff;
                font-size:15px;
                color: white;
                outline:none;
            }
            .contact-form textarea{
                height:200px;
                resize:none;
                color: white;
            }
            .contact-form button{
                background:transparent;
                border:none;
                padding:10px 20px;
                border-radius:15px;
                cursor:pointer;
                color: #F1F0E8;
                border: 1px solid #ffffff;
                font-size:15px;
            }
            input::placeholder, input:focus, textarea::placeholder, 
            button:focus, textarea:focus{
                color: white;
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
            button:hover{
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
        
        <section id="contact" class="contact">
            <div class="contact-form">
                <h2>MESSAGE US!</h2>

                <form method="POST" action="retrieve.php">
                    <input type="text" name="fullname" placeholder="FULL NAME">
                    <input type="text" name="email" placeholder="EMAIL">
                    <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                    <button type="submit">SEND MESSAGE</button>
                </form>
            </div> 
        </section>
        <footer>
            <p>&copy; 2026 Chase Atlantic UK.</p>

            <div class="socials">
                <a href="https://www.instagram.com/chaseatlantic" class="fa fa-instagram"></a>
                <a href="https://www.facebook.com/ChaseAtlantic/" class="fa fa-facebook-f"></a>
                <a href="https://www.youtube.com/@chaseatlantic" class="fa fa-youtube-play"></a>
                <a href="https://x.com/chaseatlantic?lang=en" class="fa fa-twitter"></a>
            </div>        
        </footer>
    </body>
</html>