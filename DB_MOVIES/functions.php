<?php 

function getDisplayAwal($imdb) {
  $dataJSON = file_get_contents("http://www.omdbapi.com/?apikey=1ea36222&i=$imdb");
  $dataArr = json_decode($dataJSON, true);
  $img = $dataArr["Poster"];
  $title = $dataArr["Title"];
  $year = $dataArr["Year"];
  $imdbID = $dataArr["imdbID"];

  echo "<div class=\"card\">
          <img src=\"$img\" alt=\"\">
          <span>$title ($year)</span>
          <form class=\"showKu\" action=\"details?m=$title\" method=\"POST\">
            <button class=\"btn-details\" name=\"imdb\" value=\"$imdbID\">Show Details</button>
          </form>
        </div>";
}

function searching($keyword) {
  $dataJSON = file_get_contents("http://www.omdbapi.com/?apikey=1ea36222&s=$keyword");
  $dataResult = json_decode($dataJSON, true); 
  if( $dataResult["Response"] === "False" ) {
    echo $dataResult["Error"];
    exit;
  }

  $dataArr = $dataResult["Search"];
  
  foreach( $dataArr as $data ) {
    $img = $data["Poster"];
    $title = $data["Title"];
    $year = $data["Year"];
    $imdbID = $data["imdbID"];
    echo "<div class=\"card\">
            <img src=\"$img\" alt=\"\">
            <span>$title ($year)</span>
            <form class=\"showKu\" action=\"details?m=$title\" method=\"POST\">
              <button class=\"btn-details\" name=\"imdb\" value=\"$imdbID\">Show Details</button>
            </form>
          </div>";
  }
}

function getSideContent($imdb) {
  $dataJSON = file_get_contents("http://www.omdbapi.com/?apikey=1ea36222&i=$imdb");
  $dataArr = json_decode($dataJSON, true);
  $img = $dataArr["Poster"];
  $title = $dataArr["Title"];
  $year = $dataArr["Year"];
  $imdbID = $dataArr["imdbID"];
  $plot = $dataArr["Plot"];
  $actors = $dataArr["Actors"];
  $genre = $dataArr["Genre"];
  $released = $dataArr["Released"];

  echo "<div class=\"mini-content\">
          <div class=\"mini-head\">
            <img src=\"$img\" alt=\"\">
          </div>
          <div class=\"mini-body\">
            <h5>$title ($year)</h5>
            <p class=\"desc\">Deskripsi : $plot</p>
            <p>Actors : $actors</p>
            <p>Genre : $genre</p>
            <p>Rilis : $released</p>
          </div>
        </div>";
}

function getMoviesDetails($imdb) {
  $dataJSON = file_get_contents("http://www.omdbapi.com/?apikey=1ea36222&i=$imdb&plot=full");
  $dataResult = json_decode($dataJSON, true);
  $title = $dataResult["Title"];
  $rated = $dataResult["Rated"];
  $released = $dataResult["Released"];
  $runtime = $dataResult["Runtime"];
  $img = $dataResult["Poster"];
  $year = $dataResult["Year"];
  $votes = $dataResult["imdbVotes"];
  $rating = $dataResult["imdbRating"];
  $lang = $dataResult["Language"];
  $genre = $dataResult["Genre"];
  $director = $dataResult["Director"];
  $writer = $dataResult["Writer"];
  $actors = $dataResult["Actors"];
  $country = $dataResult["Country"];
  $boxOffice = $dataResult["BoxOffice"];
  $production = $dataResult["Production"];
  $type = $dataResult["Type"];
  $awards = $dataResult["Awards"];
  $plot = $dataResult["Plot"];
  echo "
      <h2 class=\"titleD\">$title ($year)</h2>
        <hr>
      <div class=\"content-details\">
        <div class=\"pict-details\">
          <img src=\"$img\">
        </div>

        <div class=\"note-details\">
          <div class=\"header-note\">
            <div class=\"other\"> 
              <div class=\"sub-other\">$rated</div>
              <div class=\"sub-other\">$released</div>
              <div class=\"sub-other\">
                <img src=\"img/time.png\" >$runtime
              </div>
            </div>
            <div class=\"ratings\"> 
              <div class=\"score\">
                <img src=\"img/bintang.png\" class=\"star\">
                <span>$rating</span>
              </div>
              <div class=\"note-score\">
                <pre>
  IMBD Rating : $rating
  Votes       : $votes votes</pre>
              </div>
            </div>
          </div>
            <hr>
          <div class=\"text-details\">
            
            <p class=\"capt\"><strong>Type : </strong>$type</p>
            <p><strong>Language : </strong>$lang</p>
            <p><strong>Genre : </strong>$genre</p>
            <p><strong>Director : </strong>$director</p>
            <p><strong>Writer : </strong>$writer</p>
            <p><strong>Actors : </strong>$actors</p>
            <p><strong>Country : </strong>$country</p>
            <p><strong>Box Office : </strong>$boxOffice</p>
            <p><strong>Production : </strong>$production</p>
            <p><strong>Awards : </strong>$awards</p>
            <p><strong>Sinopsis : </strong>$plot</p>


          </div>
        </div>
      </div>
    ";
  
}







?>