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

document.querySelector('.load-more .btn1').onclick = () =>{
    document.querySelectorAll('.courses .box-container .hide').forEach(show =>{
      show.style.display = 'block';
    });
    document.querySelector('.load-more .btn1').style.display = 'none';
  };