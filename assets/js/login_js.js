
// show pass
// $('.hide-password').on('click', function(){
//   var $this= $(this),
//     $password_field = $this.prev('input');
  
//   ( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
//   ( 'Show' == $this.text() ) ? $this.text('Hide') : $this.text('Show');
//   //focus and move cursor to the end of input field
//   $password_field.putCursorAtEnd();
// });



// remember password


const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$(".tab-item");
const panes = $$(".tab-pane");

const tabActive = $(".tab-item.active");
const line = $(".tabs .line");

line.style.left = tabActive.offsetLeft + "px";
line.style.width = tabActive.offsetWidth + "px";

tabs.forEach((tab, index) => {
  const pane = panes[index];

  tab.onclick = function () {
    $(".tab-item.active").classList.remove("active");
    $(".tab-pane.active").classList.remove("active");

    line.style.width = tab.offsetWidth + "px";
    line.style.left = tab.offsetLeft + "px";

    this.classList.add("active");
    pane.classList.add("active");

  };
});

// open form login
// document.getElementById("login").addEventListener("click", () => {
//   // location.href = "./login_page.php";
//   console.log("aaa");
// })

// // open form register
// function openRegister() {
  
// }
