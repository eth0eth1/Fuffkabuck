<?php
require "header.php";
?>

<script src="masonry.pkgd.min.js">
</script>

<article>

<div class="content">

	
	<div id="container" class="js-masonry"
  		data-masonry-options='{ "columnWidth": 150, "itemSelector": ".item" }'>
  		<div class="item"><iframe class="item" width="600" height="600" src="https://sketchfab.com/models/adf631c73bdf4e4db53fe0cc9c20fbb1/embed" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe></div>
		<div class="item"><img src="img/NollPoseWork.jpg" alt="Image showing design work from Noll project"></div>
		<div class="item"><img src="img/TreasureNoll.jpg" alt="Image showing design work from Noll project"></div>
		<div class="item"><img src="img/DesignNoll.jpg" alt="Image showing design work from Noll project"></div>
		<div class="item"><img src="img/TechnicalNoll.jpg" alt="Image showing design work from Noll project"></div>

	</div>

<script>
var container = document.quertSelector('#container');
var msnry = new Masonry(container);
imagesLoaded( container, function() {
  msnry.layout();
</script>

</div>
</article>
<?php
require "footer.php";
?>