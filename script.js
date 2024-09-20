//navigation bar
document
  .querySelector(".hamburger-nav")
  .addEventListener("click", () =>
    document.querySelector(".navigation nav ul").classList.toggle("show")
  );

//input signup validation
function checking_empty() {
  let firstname = document.forms["Form"]["firstname"].value;
  let lastname = document.forms["Form"]["lastname"].value;
  let email = document.forms["Form"]["email"].value;
  let phone = document.forms["Form"]["phone"].value;
  let username = document.forms["Form"]["username"].value;
  let password = document.forms["Form"]["password"].value;

  if (
    firstname === "" &&
    lastname === "" &&
    email === "" &&
    phone === "" &&
    username === "" &&
    password === ""
  ) {
    alert("Please fill in all fields!");
    return false;
  }
}

//input signup validation
function checking_empty_login() {
  let username = document.forms["Form"]["Uname"].value;
  let password = document.forms["Form"]["Pword"].value;

  if (
    username === "" && 
    password === ""
    ) {
    alert("Please fill in all fields");
    return false;
  }
}

//Scroll to top
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#pageslidetotop").fadeIn();
    } else {
      $("#pageslidetotop").fadeOut();
    }
  });

  $("#pageslidetotop").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });
});

//Ajax - display newsletter data from database
$(document).ready(function () {
  loadData(); 

  function loadData() {
    $.ajax({
      url: "request/newsletter.php", // php file to get data from database
      type: "POST",
      success: function (response) {
        $("#newsletterDisplaying").html(response); // Updates data
      },
    });
  }

  //refresh data every 2628000 seconds (30 days-month)
  setInterval(function () {
    loadData();
  }, 2628000000);
});

//Ajax - display searched data from database
$(document).ready(function () {
  $("#searchform").submit(function (e) {
    e.preventDefault();
    var query = $("#query").val();
    $.ajax({
      type: "GET",
      url: "request/searching.php",
      data: { query: query },
      success: function (response) {
        $("#searcheddata").html(response);
      },
    });
  });
});
