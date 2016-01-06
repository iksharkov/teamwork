<?php
	$page_title = 'Home';
	include('templates/header.php');
?>
    <div class="slider">
     <ul class="first-row">
        <li>
            <img src="images/first_pic.jpg" alt="postcard">
            <span class="text-content"><span><img src="images/cross_hover.jpg"></span></span>
        </li>
        <li>
            <img src="images/second_pic.jpg" alt="drawings" width="307" height="74">
            <span class="text-content"><span><img src="images/cross_hover.jpg"></span></span>
        </li>
        <li>
            <img src="images/third_pic.jpg" alt="words">
            <span class="text-content"><span><img src="images/cross_hover.jpg"></span></span>
        </li>
     </ul>
     <ul class="second-row">
        <li>
            <img src="images/four_pic.jpg" alt="drawings" width="623" height="299">
            <span  id="fourPic"class="text-content-2"><span class="cross-1"><img src="images/cross_hover.jpg"></span></span>
        </li>
        <li id="peopleHugs">
            <img src="images/five_pic.jpg" alt="hugs" width="307" height="183">
            <span  id="hugs"class="text-content-2"><span class="cross-2"><img src="images/cross_hover.jpg"></span></span>
        </li>
        <li id="responsive">
            <img src="images/six_pic.jpg" alt="responsive" width="307" height="110">
            <span  id="sixPic" class="text-content-2"><span class="cross-3"><img src="images/cross_hover.jpg"></span></span>
        </li>
     </ul>
     <ul class="third-row">
        <li>
            <img src="images/seven_pic.jpg" alt="lates news">
            <span class="text-content-3"><span><img src="images/cross_hover.jpg"></span></span>
        </li>
        <li>
            <img src="images/eight_pic.jpg" alt="words" width="307" height="116">
            <span class="text-content-3"><span><img src="images/cross_hover.jpg"></span></span>
        </li>
        <li>
            <img src="images/nine_pic.jpg" alt="drawings">
            <span class="text-content-3"><span><img src="images/cross_hover.jpg"></span></span>
        </li>
     </ul>
    </div>
    <div class="home-header">
        <h2>A Theme Unlike Any Other. Simply Fantastic!</h2>
    </div>
    <p class="kainds"><span>All</span>  / NEWS  /  DESINGN  /  PRINT  / ART  /  DEVELOPMENT</p>
    <div class="buttons-head">
        <button>1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
    </div>
<?php include('templates/footer.php') ?>