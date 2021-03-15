export {getMyJson, getMyJson2, tampilkanData, tampilkanData2, navPage, navPage2};

  function tampilkanData(imdb) {

    $.ajax({
      url: 'http://omdbapi.com',
      type: 'get',
      dataType: 'json',
      data: {
        apikey: '1ea36222',
        i: imdb
      },
      success: function(result) {
        if( result.Response == "True" ) {
          $('.content-search').append(`
                  <div class="card">
                    <img src="${result.Poster}" alt="">
                    <span>${result.Title} (${result.Year})</span>
                    <form class=\"showKu\" action=\"details.php?m=${result.Title}\" method=\"POST\">
                      <button class=\"btn-details\" name=\"imdb\" value=\"${result.imdbID}\">Show Details</button>
                    </form>
                  </div>
          `);
        } else {
          console.log(`${imdb} Tidak Ada`);
        }

      }
    })
  }

  function getMyJson(nameJSON) {
    $.getJSON('js/display.json', function(result) {
      console.log(nameJSON);
      let dataKu = result[nameJSON];
      navPage(dataKu);
    });
  }

  function navPage(dataKu) {
    var itemNum = 0;
    const maxItem = 12;

    $('.pagination').html('');                
    var itemNum = 0;                         
    var totalItem = dataKu.length;     
    $.each(dataKu, function(i, data) {    
          
      itemNum++;                                         
      if( itemNum <= maxItem ) {                    
        tampilkanData(data);
      }
    });

    if( totalItem > maxItem ) {
      var pagenum = Math.ceil(totalItem/maxItem);
      for(var i = 1; i <= pagenum; ) {
        $('.pagination').append(`
                                <li data-page="${i}" class="page-item">
                                  <span>
                                    <span class="page-link">${i++}</span>
                                  </span>
                                </li>`).show();
      }
    }
    $('.pagination li:first-child').addClass('active');
    $('.pagination li').on('click', function() {
      var movies = $('.content-search').empty();
      var pagenum = $(this).attr('data-page');
      var itemIndex = 0;
      $('.pagination li').removeClass('active');
      $(this).addClass('active');
      $.each(dataKu, function(i, data) {
        itemIndex++;
        if(itemIndex > (maxItem * pagenum) || itemIndex <= ((maxItem * pagenum) - maxItem)) {
        } else {
        tampilkanData(data);
        }
      })
    });

  }





  function tampilkanData2(imdb) {

    $.ajax({
      url: 'http://omdbapi.com',
      type: 'get',
      dataType: 'json',
      data: {
        apikey: '1ea36222',
        i: imdb
      },
      success: function(result) {
        if( result.Response == "True" ) {
          $('.content-search').append(`
                  <div class="card">
                    <img src="${result.Poster}" alt="">
                    <span>${result.Title} (${result.Year})</span>
                    <form class=\"showKu\" action=\"../details.php?m=${result.Title}\" method=\"POST\">
                      <button class=\"btn-details\" name=\"imdb\" value=\"${result.imdbID}\">Show Details</button>
                    </form>
                  </div>
          `);
        } else {
          console.log(`${imdb} Tidak Ada`);
        }

      }
    })
  }

  function getMyJson2(nameJSON) {
    $.getJSON('../js/display.json', function(result) {
      console.log(nameJSON);
      let dataKu = result[nameJSON];
      navPage2(dataKu);
    });
  }

  function navPage2(dataKu) {
    var itemNum = 0;
    const maxItem = 12;

    $('.pagination').html('');                
    var itemNum = 0;                         
    var totalItem = dataKu.length;     
    $.each(dataKu, function(i, data) {    
          
      itemNum++;                                         
      if( itemNum <= maxItem ) {                    
        tampilkanData2(data);
      }
    });

    if( totalItem > maxItem ) {
      var pagenum = Math.ceil(totalItem/maxItem);
      for(var i = 1; i <= pagenum; ) {
        $('.pagination').append(`
                                <li data-page="${i}" class="page-item">
                                  <span>
                                    <span class="page-link">${i++}</span>
                                  </span>
                                </li>`).show();
      }
    }
    $('.pagination li:first-child').addClass('active');
    $('.pagination li').on('click', function() {
      var movies = $('.content-search').empty();
      var pagenum = $(this).attr('data-page');
      var itemIndex = 0;
      $('.pagination li').removeClass('active');
      $(this).addClass('active');
      $.each(dataKu, function(i, data) {
        itemIndex++;
        if(itemIndex > (maxItem * pagenum) || itemIndex <= ((maxItem * pagenum) - maxItem)) {
        } else {
        tampilkanData2(data);
        }
      })
    });

  }