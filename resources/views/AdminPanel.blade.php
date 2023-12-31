 <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="admin.css"/>
    <link rel="stylesheet" href="NavFoot.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Acme|Alegreya|Alegreya+Sans|Anton|Archivo|Archivo+Black|Archivo+Narrow|Arimo|Arvo|Asap|Asap+Condensed|Bitter|Bowlby+One+SC|Bree+Serif|Cabin|Cairo|Catamaran|Crete+Round|Crimson+Text|Cuprum|Dancing+Script|Dosis|Droid+Sans|Droid+Serif|EB+Garamond|Exo|Exo+2|Faustina|Fira+Sans|Fjalla+One|Francois+One|Gloria+Hallelujah|Hind|Inconsolata|Indie+Flower|Josefin+Sans|Julee|Karla|Lato|Libre+Baskerville|Libre+Franklin|Lobster|Lora|Mada|Manuale|Maven+Pro|Merriweather|Merriweather+Sans|Montserrat|Montserrat+Subrayada|Mukta+Vaani|Muli|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Open+Sans+Condensed:300|Oswald|Oxygen|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|Pacifico|Passion+One|Pathway+Gothic+One|Play|Playfair+Display|Poppins|Questrial|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Ropa+Sans|Rubik|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Signika|Slabo+27px|Source+Code+Pro|Source+Sans+Pro|Spectral|Titillium+Web|Ubuntu|Ubuntu+Condensed|Varela+Round|Vollkorn|Work+Sans|Yanone+Kaffeesatz|Zilla+Slab|Zilla+Slab+Highlight"
     rel="stylesheet"> --}}
 <title>Admin Panel</title>
</head>
 

<body>
    <div class="home">
        <header>
            <div class="logo">
                <a href="home"> <img src="img/chitraflix-logo(1).png" width="200px" alt="Chitraflix logo"></a>
            </div>
            <div class="search">
                <input type="text" placeholder="Search" >
                <i class='bx bx-search bx-tada-hover bx-sm' style="color: #090909"></i>
            </div>
            <nav class="navbar">             
                    <a href="home">HOME</a>
                    <a href="movies">MOVIES</a>
                    <a href="genre">GENRE</a>
                    <a href="profile">PROFILE</a>           
            </nav>
 
 
        </header>   
    </div>

  <div class="outside">
  <div class="container">  
  <form method="POST" action="/AdminPanel-store">
    @csrf
    <p>UPLOAD CONTENT</p>
    {{-- @method('post') --}}
    <div class="content">
      <div class="input-box">
        <label>Movie Name</label> <br> 
        <input type="text" name="movie_name" placeholder="Movie Name" required> <br><br>
      </div>
      <div class="input-box">
        <label>Release Date</label> <br>
        <input type="date" name="release_date" placeholder="Release Date" required><br><br>
      </div>
      <div class="input-box">
        <label>Image URL</label> <br>
        <input type="string" name="image_url" placeholder="Cover Image URL" required><br><br>
      </div>
      <div class="input-box">
        <label>Trailer URL</label> <br>
        <input type="string" name="video_url" placeholder="Trailer URL" required><br><br>
      </div>
      </div>
      <div class="description-box">
        <label>Movie Description</label> <br>
        <textarea class="text-area" name="description" placeholder="Movie Synopsis" required></textarea><br><br>
      </div>
      <div class="genre-name">
        <label>Genre</label> <br>

          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Action">ACTION  &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Comedy">COMEDY &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Romance">ROMANCE &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="sifi">SI-FI &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Drama">DRAMA &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Horror">HORROR &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Adventure">ADVENTURE &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Documentary">DOCUMENTARY &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Sports">SPORTS &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Thriller">THRILLER &nbsp; 
          </div>
          <div class="particular-genre">
            <input type="checkbox" name="genre[]" value="Crime">CRIME &nbsp; 
          </div>

      </div>

    
    <div class="upload">
    <input type="submit" value="UPLOAD">
    </div>
  </form>
  </div>
  </div>


        <div class="footer">
          <div class="icon">
            <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a> &nbsp; &nbsp;
            <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a> &nbsp; &nbsp;
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> &nbsp; &nbsp;
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
          </div>
        <div class="copyright">
          © Copyright <a href="home">CHITRAFLIX</a> | All rights reserved.
        </div>
        <div class="privacy-policy">
          <a href="privacy"> Privacy Policy</a> | <a href="about">About</a> | <a href="contact">Contact</a> | <a href="faq">FAQs</a>
        </div>
       </div>
    </div>


    <script>
        var item1Container1 = document.getElementById("item1Container1");
        if (item1Container1) {
          item1Container1.addEventListener("click", function (e) {
            // Please sync "Particular Movie" to the project
          });
        }
        
        
        var signUpContainer = document.getElementById("signUpContainer");
        if (signUpContainer) {
          signUpContainer.addEventListener("click", function (e) {
            // Please sync "sign up" to the project
          });
        }
        
        var loginTxtText = document.getElementById("loginTxtText");
        if (loginTxtText) {
          loginTxtText.addEventListener("click", function (e) {
            // Please sync "login" to the project
          });
        }
        
        var moviesTxtText = document.getElementById("moviesTxtText");
        if (moviesTxtText) {
          moviesTxtText.addEventListener("click", function (e) {
            // Please sync "Movies" to the project
          });
        }
        </script>
</body>
</html>

