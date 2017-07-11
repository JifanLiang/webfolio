var transparent = true;

  if ($( '.navbar-color-on-scroll' ).length !== 0) {
    $(window).on( 'scroll', debounce(function () {
      if ($(document).scrollTop() > 200) {
        if (transparent) {
          transparent = false;
          $( '.navbar-color-on-scroll' ).removeClass( 'navbar-transparent' );
          $( '.navbar-color-on-scroll' ).addClass( 'navbar-not-transparent' );
        }
      } else {
        if (!transparent) {
          transparent = true;
          $( '.navbar-color-on-scroll' ).addClass( 'navbar-transparent' );
          $( '.navbar-color-on-scroll' ).removeClass( 'navbar-not-transparent' );
        }
      }
    }, 17));
  }





  .navbar {
    background-color: white;
    box-shadow: 0 10px 20px -12px rgba(0, 0, 0, 0.42), 0 3px 20px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}


.navbar, .navbar.navbar-default {
    background-color: #ffffff;
}

/*.navbar.navbar-transparent {
    background-color: transparent;
}*/

.navbar.navbar-not-transparent {
    background-color: white;
}

.navbar-fixed-top {
    border-radius: 0;
}
.navbar {
    
    background-color: #fff;
    -webkit-transition: all 150ms ease 0s;
    transition: all 150ms ease 0s;
}

.navbar{
    -webkit-transition: all 150ms ease;
    transition: all 150ms ease;
}
.navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}
.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
}

.navbar-fixed-top {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 5030;
}
.navbar {
    border-radius: 4px;
}
.navbar {

    border: 1px solid transparent;
}
