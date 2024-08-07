<?php

  include("login.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>EsportTrack.org</title>
    <style>
body {
    background-color: purple;
    margin: 0;
}
/* just nav part */
nav {
    padding: 10px 20px;
    background: #000;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.search-box {
    flex: 1;
    display: flex;
    justify-content: flex-start;
}
.search-box input {
    width: 50%;
    padding: 8px;
    font-size: 16px;
    border: none;
    border-bottom: 2px solid #ccc;
    background: none;
    color: #fff;
    outline: none;
}
.search-box input::placeholder {
    color: #ccc;
    font-style: italic;
}
.logo {
    font-size: 24px;
    color:purple;
    font-family: 'EsportFont', sans-serif;
    text-align: center;
    flex: 4; 
    font-style: italic;
}
.logo span {
    font-style: italic;
    color: #ffd700;
    font-family: 'EsportFont', sans-serif;
}
.nav-links {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 20px;
}
.nav-links li {
    display: inline;
}
.nav-links li a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    position: relative;
}
.nav-links li a:hover,
.nav-links li a:active {
    color: #ffd700;
}
.nav-links li a::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #ffd700;
    transition: width .3s;
}
.nav-links li a:hover::after {
    width: 100%;
}


/* card */
.card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px; 
    }
    
    .card {
        flex: 1 1 calc(33.33% - 20px); 
        max-width: calc(33.33% - 20px);  
        background-color: #f0f0f0;
        padding: 20px;
        box-sizing: border-box;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    
    .card-content {
        text-align: center;
    }
    
    .card img {
        max-width: 100px;
        border-radius: 8px;
    }
    
    .card h3 {
        margin-top: 0;
    }
    
    .card p {
        color: #666;
    }
    .card a{
        text-decoration:none;
        color:purple;
        
    }
    .card a:hover{
        color:red;
    }
    .card-link {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 16px;
        background-color: Black;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    
    .card-link:hover {
        background-color: #0056b3;
    }
/* carousel */
    .carousel-inner {
            height: 500px;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
/* footer */
        footer {
    background: #000;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
}

.footer-section {
    flex: 1 1 200px;
    max-width: 300px;
}

.footer-section h3 {
    margin-bottom: 15px;
    color: #ffd700;
}

.footer-section a {
    display: block;
    color: #fff;
    text-decoration: none;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.footer-section a:hover {
    color: #ffd700;
}

.footer-bottom {
    margin-top: 20px;
    font-size: 14px;
    color: #ccc;
}
/* Modal CSS */
.modal-content{
    background-color:gray;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;

}


    </style>
</head>
<body>
    <nav>
        <div class="search-box">
            <input type="text" placeholder="Search">
        </div>
        <div class="logo"><b>Esport<span>Track</span></b></div>
        <ul class="nav-links">
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a></li>
        </ul>
    </nav>
<!-- card -->
<div class="card-container">
        <div class="card">
            <div class="card-content">
                <img src="img4.jpg" alt="Placeholder Image">
                <h3>League Of Lengend:Wild Rift</h3>
                <a href="player_ranking_wr.php">Player Ranking</a><br>
                <a href="#">Team Ranking</a><br>
                <a href="#">Upcoming Event</a><br>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
            <img src="img5.png" alt="Placeholder Image">
                <h3>Honor Of Kings</h3>
                <a href="player_ranking.php">Player Ranking</a><br>
                <a href="#">Team Ranking</a><br>
                <a href="#">Upcoming Event</a><br>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="img7.jpg" alt="Placeholder Image">
                <h3>Arena Of Valor</h3>
                <a href="#">Player Ranking</a><br>
                <a href="#">Team Ranking</a><br>
                <a href="#">Upcoming Event</a><br>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
            <img src="img8.jpg" alt="Placeholder Image">
                <h3>PUBG:Mobile</h3>
                <a href="#">Player Ranking</a><br>
                <a href="#">Team Ranking</a><br>
                <a href="#">Upcoming Event</a><br>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
            <img src="img9.png" alt="Placeholder Image">
                <h3>Valorant</h3>
                <a href="#">Player Ranking</a><br>
                <a href="#">Team Ranking</a><br>
                <a href="#">Upcoming Event</a><br>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
            <img src="img6.png" alt="Placeholder Image">
                <h3>Conter Strikes</h3>
                <a href="#">Player Ranking</a><br>
                <a href="#">Team Ranking</a><br>
                <a href="#">Upcoming Event</a><br>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
    </div>
<!-- curosel -->
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>"Games give you a chance to excel, and if you're playing in good company you don't even mind if you lose because you had the enjoyment of the company during the course of the game." – Gary Gygax</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>"Video games are the only force that can make an hour feel like a minute and a minute feel like an hour." </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>"In games, as in life, you always have to keep fighting."</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- card2 -->
<div class="card-container">
        <div class="card">
            <div class="card-content">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image">
                <h3>Card 1</h3>
                <p>Content of card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image">
                <h3>Card 2</h3>
                <p>Content of card 2. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image">
                <h3>Card 3</h3>
                <p>Content of card 3. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <div class="card-content">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image">
                <h3>Card 1</h3>
                <p>Content of card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image">
                <h3>Card 2</h3>
                <p>Content of card 2. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <img src="https://via.placeholder.com/300" alt="Placeholder Image">
                <h3>Card 3</h3>
                <p>Content of card 3. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                <a href="#" class="card-link">Read More</a>
            </div>
        </div>
    </div>

    <!-- login form -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="Username" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="Password" placeholder="Enter your password">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-select" id="type" name="Type">
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
<!-- sign Up -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">N ame</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password">
          </div>
          <div class="mb-3">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
    <footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: info@esporttrack.org</p>
            <p>Phone: (09-4533-67691)</p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </div>
        <div class="footer-section">
            <h3>Resources</h3>
            <a href="#">Blog</a>
            <a href="#">Support</a>
            <a href="#">Privacy Policy</a>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 EsportTrack.org | All rights reserved
    </div>
</footer>

</body>
</html>

