 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>OUR WEBSITE</title>
</head>
<body>

    <header>
        <a href="#" class="logo">tech planet</a>
        <nav class="navigation">
            <a href="#services">Services</a>
            <a href="#projects">Projects</a>    
            <a href="#contact">Contact</a>
        </nav>
    </header> 
    <section class="main">
        
        <div>
            <h2>Hello, i'm mohamed ekramy<BR> <span style="color:#df7f12 ;">frontend developer </span></h2>
            <h3>I'm changing your life </h3>
            <a href="#projects" class="main-btn">View my works</a>
        </div>
    </section>

    <section class="cards" id="services">
        <h2 class="title">Services</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                  
                    <a href="code writing.html" target="_blank" class="code_writing_page ">  <img src="coding.jpg" width="150" height="145" alt="this code img"/> </a>
                </div>
                <div class="info">
                    <h3>code Writing</h3>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                 
                 <a href="create database.html" target="_blank" class="data_base_page"><img src="database.jpg" width="150" height="145" alt="this data img"/></a>
                </div>
                <div class="info">
                    <h3>create databases</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <h2 class="title">Projects</h2>
        <div class="content">
            <div class="project-card">
                <div class="project-image">
                
                   <img src="spider man.jpg"/>
                </div>
                <div class="project-info">
                    <p class="project-category">programming games</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                <img src="robot.jpg" />
                </div>
                <div class="project-info">
                    <p class="project-category">Programming a robot</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                   <img src="database (2).jpg" />
                </div>
                <div class="project-info">
                    <p class="project-category">create databases</p>

                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                 <img src="code.jpg" >
                </div>
                <div class="project-info">
                    <p class="project-category">code writing</p>        
                </div>
            </div>
        </div>
    </section>

    <section class="cards contact" id="contact">
        <h2 class="title">Let's work together</h2>
        <div class="content">
            <a href="phone_numbers.html" target="_blank" class="phone_numbers">
            <div class="card">
                <div class="icon">
                  <i class="fas fa-phone"></i>  
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>EX/ +201003765343</p>
                </div>
            </div>
            </a>
            <a href="EMAILS.html" target="_blank" class="emails">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>example23@gmail.com</p><br>
                </div>
            </div>
             </a>
        </div>
    </section>

    <footer class="footer">
 <a href="#"><img src="logo fotter.jpg" width="190" height="60" alt="this is logo in footer"> </a>
    </footer>

</body>
</html>