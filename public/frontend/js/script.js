/***Cookie policy Home Popup Script start *****/




  setTimeout(function() {
    $('#myModal'). modal('show');
    }, 1000);

     setTimeout(function() {
        $('#myModal'). modal('hide');
        }, 10000);




window.addEventListener("load", function () {
  setTimeout(
    function open(event) {
      document.querySelector(".popup").style.
        display = "block";
    },
    3000
  )
});




document.querySelector("#close").addEventListener
  ("click", function () {
    document.querySelector(".popup").style.display =
      "none";
  });


  document.querySelector("#deny").addEventListener
  ("click", function () {
    document.querySelector(".popup").style.display =
      "none";
  });

  document.querySelector("#accept").addEventListener
  ("click", function () {
    document.querySelector(".popup").innerHTML =`
    <a id="close" onclick="toggle()"> &times;</a>
    <p class="card-text" style="text-align:center; font-size:20px; font-weight:700; color:#006B4F; padding:40px 10px";> Thanks for Your Acceptence !</p>

    `
    setTimeout(function() {
        $('.popup').fadeOut('fast');
    }, 2000);


  });




// Create cookie
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Delete cookie
function deleteCookie(cname) {
    const d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=;" + expires + ";path=/";
}

// Read cookie
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Set cookie consent
function acceptCookieConsent(){
    deleteCookie('user_cookie_consent');
    setCookie('user_cookie_consent', 1, 15);
    document.getElementById("cookieNotice").style.display = "none";
}


let cookie_consent = getCookie("user_cookie_consent");
if(cookie_consent != ""){
    document.getElementById("cookieNotice").style.display = "none";
}else{
    document.getElementById("cookieNotice").style.display = "block";
}




/***Cookie policy Home Popup Script end *****/

 //Loading PopUP
$(document).ready(function () {



    //select the POPUP FRAME and show it
    $("#loading").hide(10000).fadeIn(10000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#loading").fadeOut(1000);
    });

});







function twitterShow() {
  document.getElementById("twitter").innerHTML = ' — <i class="fa-brands fa-twitter" style="color:#00acee" ></i> — Twitter ';
  document.getElementById("twt").style.transform = "rotate(-90deg)";
  document.getElementById("twt").style.margin = "50px 0px 50px -50px";
  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"></i>';

}

function twitterOut() {
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter"></i>';
  document.getElementById("twt").style.transform = "rotate(0deg)";
  document.getElementById("twt").style.margin = "0px 0px 0px 0px";
  //   document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
}

function FacebookShow() {

  document.getElementById("facebook").innerHTML = ' — <i class="fa-brands fa-facebook-f" style="color:#4267B2"></i>— Facebook ';
  document.getElementById("fb").style.transform = "rotate(-90deg)";
  document.getElementById("fb").style.margin = "50px 0px 50px -55px";
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter"></i>';
  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"></i>';
}

function FacebookOut() {

  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
  document.getElementById("fb").style.transform = "rotate(0deg)";
  document.getElementById("fb").style.margin = "0px 0px 0px 0px";
}

function LinkedInShow() {

  document.getElementById("linkedin").innerHTML = ' — <i class="fa-brands fa-linkedin-in" style="color:#0072b1"></i> — LinkedIn ';
  document.getElementById("lnk").style.transform = "rotate(-90deg)";
  document.getElementById("lnk").style.margin = "50px 0px 50px -55px";
  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f" </i>';
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter" </i>';
  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"</i>';
}
function LinkedInOut() {

  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("lnk").style.transform = "rotate(0deg)";
  document.getElementById("lnk").style.margin = "0px 0px 0px 0px";
}

function YoutubeShow() {

  document.getElementById("youtube").innerHTML = '— <i class="fa-brands fa-youtube" style="color:red"></i> — Youtube';
  document.getElementById("ytb").style.transform = "rotate(-90deg)";
  document.getElementById("ytb").style.margin = "50px 0px 50px -55px";
  document.getElementById("facebook").innerHTML = '<i class="fa-brands fa-facebook-f"></i>';
  document.getElementById("linkedin").innerHTML = '<i class="fa-brands fa-linkedin-in"></i>';
  document.getElementById("twitter").innerHTML = '<i class="fa-brands fa-twitter"></i>';
}

function YoutubeOut() {

  document.getElementById("youtube").innerHTML = '<i class="fa-brands fa-youtube"></i>';
  document.getElementById("ytb").style.transform = "rotate(0deg)";
  document.getElementById("ytb").style.margin = "0px 0px 0px 0px";
}

//ENd  Social
function subscription() {

    document.getElementById("sbtn").style.display = "block";
    document.getElementById("subscrip").style.display = "none";

}

window.addEventListener("load", function () {
    setTimeout(
      function open(event) {
        document.getElementById("sbtn").style.display = "block";
        document.getElementById("subscrip").style.display = "none";
      },
      13000
    )

    setTimeout(
        function open(event) {
            document.getElementById("subscrip").style.display = "block";
            document.getElementById("sbtn").style.display = "none";
        },
        18000
      )
  });


function subscriptionclose() {

// document. getElementById("sbtn"). className = "subform animate__animated animate__fadeOut animate__slow";
document.getElementById("subscrip").style.display = "block";
document.getElementById("sbtn").style.display = "none";

}




// Search box show and hide

function searchboxshow() {
  document.getElementById("searchdiv").style.display = "block";
  document.getElementById("subscrip").style.display = "none";
  document.getElementById("sbtn").style.display = "none";
}
function searchboxhidden() {
  document.getElementById("searchdiv").style.display = "none";
  document.getElementById("subscrip").style.display = "block";
  document.getElementById("sbtn").style.display = "none";
}

//About Us



function sendMonyout() {
  document.getElementById("phases").innerHTML = '';
}
function billpayout() {
  document.getElementById("phases").innerHTML = '';
}

function corporateout() {
  document.getElementById("phases").innerHTML = '';
}
function marchentout() {
  document.getElementById("phases").innerHTML = '';
}



/** Count Down start */



/** Count Down end */
