$(document).ready(function(){
  $(".mylogout").click(function(e){
  	 e.preventDefault();
// alert();
  location.href = "../dashboard/logout.php";
// alert();
  });

  $(".my2logout").click(function(e){
  	 e.preventDefault();
// alert();
  location.href = "dashboard/logout.php";
// alert();
  });
});