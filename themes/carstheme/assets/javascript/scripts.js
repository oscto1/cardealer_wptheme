document.addEventListener( 'DOMContentLoaded', function () {
    var arc = document.getElementById('splide1');
    if(arc != null){
      if(window.innerWidth < 768){
        if(document.URL.includes("cars")){
                new Splide( '#splide1', {
                    perPage: 2,
                    padding: {
                  		right: '1rem',
      	            },
                    pagination: false,
                }).mount();
          	};
      }else{
        if(document.URL.includes("cars")){
                new Splide( '#splide1', {
                    perPage: 5,
                    pagination: false,
                }).mount();
          	};
      }
    }

    var sin = document.getElementById('splide2');
    if(sin != null){
        new Splide( '#splide2' ).mount();
    }

  }
);

function nav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
