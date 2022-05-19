let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");
  
  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });
  
  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });
//////////////////////////////////////////////////////////
$(document).ready(function(){
  $(".box").slice(0, 6).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".box:hidden").slice(0, 6).slideDown();
    if($(".box:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent");
    }
  });
  
})