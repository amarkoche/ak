
 <!---Start Script -->
 <!-- <script src="js/bootstrap.bundle.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script> -->
<!---Start jquery-3.6.2.min -->
<!-- <script src="js/jquery-3.6.2.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/my-script.js"></script>

<!-- <script>
	$(document).ready(function () {
		// Store the original parent and position of #moveElement
		var originalParent = $("#aboutContainer");

		function checkResize() {
			var windowWidth = $(window).width();
			console.log("Current Width:", windowWidth); // Debugging output

			if (windowWidth <= 991) {
				if (!$("#aboutElement").next().is("#aboutTarget")) {
					console.log("Moving #aboutElement after #aboutTarget");
					$("#aboutElement").insertAfter("#aboutTarget");
				}
			} else {
				if (!$("#aboutContainer").find("#aboutElement").length) {
					console.log("Moving #aboutElement back to aboutContainer");
					$("#aboutElement").appendTo(originalParent);
				}
			}
		}

		// Run the function on page load
		checkResize();

		// Run the function on window resize
		$(window).resize(function () {
			checkResize();
		});
	});
</script>

<script>
	$(document).ready(function () {
		// Store the original parent and position of #moveElement
		var originalParent = $("#featuresContainer");

		function checkResize() {
			var windowWidth = $(window).width();
			console.log("Current Width:", windowWidth); // Debugging output

			if (windowWidth <= 1024) {
				if (!$("#featuresElement").next().is("#featuresTarget")) {
					console.log("Moving #featuresElement after #featuresTarget");
					$("#featuresElement").insertAfter("#featuresTarget");
				}
			} else {
				if (!$("#featuresContainer").find("#featuresElement").length) {
					console.log("Moving #featuresElement back to featuresContainer");
					$("#featuresElement").appendTo(originalParent);
				}
			}
		}

		// Run the function on page load
		checkResize();

		// Run the function on window resize
		$(window).resize(function () {
			checkResize();
		});
	});
</script>

<script>
	$(document).ready(function () {
		// Store the original parent and position of #moveElement
		var originalParent = $("#whychooseContainer");

		function checkResize() {
			var windowWidth = $(window).width();
			console.log("Current Width:", windowWidth); // Debugging output

			if (windowWidth <= 990) {
				if (!$("#whychooseElement").next().is("#whychooseTarget")) {
					console.log("Moving #whychooseElement after #whychooseTarget");
					$("#whychooseElement").insertAfter("#whychooseTarget");
				}
			} else {
				if (!$("#featuresContainer").find("#whychooseElement").length) {
					console.log("Moving #whychooseElement back to featuresContainer");
					$("#whychooseElement").appendTo(originalParent);
				}
			}
		}

		// Run the function on page load
		checkResize();

		// Run the function on window resize
		$(window).resize(function () {
			checkResize();
		});
	});
</script>

<script>
	$(document).ready(function () {
		// Store the original parent and position of #moveElement
		var originalParent = $("#bugfreeContainer");

		function checkResize() {
			var windowWidth = $(window).width();
			console.log("Current Width:", windowWidth); // Debugging output

			if (windowWidth <= 1024) {
				if (!$("#bugfreElement").next().is("#bugfreTarget")) {
					console.log("Moving #bugfreElement after #bugfreTarget");
					$("#bugfreElement").insertAfter("#bugfreTarget");
				}
			} else {
				if (!$("#featuresContainer").find("#bugfreElement").length) {
					console.log("Moving #bugfreElement back to featuresContainer");
					$("#bugfreElement").appendTo(originalParent);
				}
			}
		}

		// Run the function on page load
		checkResize();

		// Run the function on window resize
		$(window).resize(function () {
			checkResize();
		});
	});
</script> -->


<script>
	$(document).ready(function () {
		// Define elements and their respective breakpoints
		var elements = [
			{ element: "#aboutElement", target: "#aboutTarget", container: "#aboutContainer", breakpoint: 991 },
			{ element: "#featuresElement", target: "#featuresTarget", container: "#featuresContainer", breakpoint: 1024 },
			{ element: "#whychooseElement", target: "#whychooseTarget", container: "#whychooseContainer", breakpoint: 990 },
			{ element: "#bugfreElement", target: "#bugfreTarget", container: "#bugfreeContainer", breakpoint: 1024 }
		];

		// Store the original parents of each element
		elements.forEach(function (item) {
			item.originalParent = $(item.container);
		});

		function checkResize() {
			var windowWidth = $(window).width();
			console.log("Current Width:", windowWidth); // Debugging output

			elements.forEach(function (item) {
				if (windowWidth <= item.breakpoint) {
					if (!$(item.element).next().is(item.target)) {
						console.log("Moving", item.element, "after", item.target);
						$(item.element).insertAfter(item.target);
					}
				} else {
					if (!$(item.container).find(item.element).length) {
						console.log("Moving", item.element, "back to", item.container);
						$(item.element).appendTo(item.originalParent);
					}
				}
			});
		}

		// Run the function on page load
		checkResize();

		// Run the function on window resize
		$(window).resize(function () {
			checkResize();
		});
	});
</script>