<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
 <div class="whatsbtn">
    <div class="mobhide notifidot">
       <span class="sonar-wave"></span>
        <a href="https://api.whatsapp.com/send/?phone=%2B7860700127&text=Hello&type=phone_number&app_absent=0" target="_blank">
			<img src="assets/images/whatsapp.png" title="Whatsapp" alt="Whatsapp">
        </a>
    </div>
    <div class="mobshow notifidot">
       <span class="sonar-wave"></span>
       <a href="https://api.whatsapp.com/send/?phone=%2B7860700127&text=Hello&type=phone_number&app_absent=1" target="_blank">
			<img src="assets/images/whatsapp.png" title="Whatsapp" alt="Whatsapp">
       </a>
    </div>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/script.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<script>
      function open_modal(name) {
        $('#modalform').modal('show');
      }
    </script>
	
	<script>
	 function show_static(obj){
			$('#txt_course').val($(obj).data('static'));
	} 
    </script>

	<script>
		$(document).ready(function(){

			var imgurl =  $('#prmo-image').attr('src');

			$('<img src="'+ imgurl +'">').load(function(response, xhr) {
				$(".modal_countdown").modal('show');
			}).error(function(){
				$(".modal_countdown").modal('hide');
			});
			
		});
	</script>
	<script>
		const overlay = document.querySelector(".overlay");
const body = document.querySelector("body");
const menuBtn = document.querySelector(".menu-btn");
const menuItems = document.querySelector(".menu-items");
const expandBtn = document.querySelectorAll(".expand-btn");

function toggle() {
  // disable overflow body
  body.classList.toggle("overflow");
  // dark background
  overlay.classList.toggle("overlay--active");
  // add open class
  menuBtn.classList.toggle("open");
  menuItems.classList.toggle("open");
}

menuBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  toggle();
});

window.onkeydown = function (event) {
  const key = event.key; // const {key} = event; in ES6+
  const active = menuItems.classList.contains("open");
  if (key === "Escape" && active) {
    toggle();
  }
};

document.addEventListener("click", (e) => {
  let target = e.target,
    its_menu = target === menuItems || menuItems.contains(target),
    its_hamburger = target === menuBtn,
    menu_is_active = menuItems.classList.contains("open");
  if (!its_menu && !its_hamburger && menu_is_active) {
    toggle();
  }
});

// mobile menu expand
expandBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    btn.classList.toggle("open");
  });
});

	</script>
	
	