$(document).ready(function () {
  // Waits until the page is ready
  // Write your JS code here

  // hide the different specific filters at the beginning
  $("#generalFilters").hide();
  $("#saleFilters").hide();
  $("#flatFilters").hide();
  $("#houseFilters").show();

  // Showing saleFilters on click
  $("#saleBtn").click(function () {
    $("#saleBtn").css("box-shadow", "inset 2px 2px 10px #6a4c04");
    $("#rentalBtn").css("box-shadow", "none");
    $("#rentalFilters").hide();
    $("#saleFilters").show();
  });

  // Showing rentalFilters on click
  $("#rentalBtn").click(function () {
    $("#rentalBtn").css("box-shadow", "inset 2px 2px 10px #255057");
    $("#saleBtn").css("box-shadow", "none");
    $("#rentalFilters").show();
    $("#saleFilters").hide();
  });

  // Showing more general filters on click
  $("#moreFiltersBtn").click(function () {
    $("#generalFilters").toggle();
  });

  //Showing flat filters on select
  $("#flatSelected").click(function () {
    $("#flatFilters").show();
    $("#houseFilters").hide();
  });

  //Showing house filters on select
  $("#houseSelected").click(function () {
    $("#houseFilters").show();
    $("#flatFilters").hide();
  });

  // Play again : refreshing page
  // $("#playAgainBtn").click(function () {
  //   console.log("playagain");
  //   location.reload(true);
  // });
});