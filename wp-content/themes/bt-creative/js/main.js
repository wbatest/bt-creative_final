var windowState;
var descVisible = false;
var sliderWidth;
var slideCount;

$(document).ready(function() {
	console.log("This is the file main.js speaking.");

	getWindowState();

	$("body").on('click','#navToggle',function() {
		navToggle();
	});

	$("body").on('click', '.jobs > article', function() {
		jobToggle($(this).data('job'));
	});

	jobSort(windowState);

});

$(window).resize(function() {
	//console.log("RESIZE!");
	if ($(window).width() >= 640 ) {
		//console.log("GREATER!");
		$("#topNav").css("display","block");
	} else {
		$("#topNav").css("display","none");
	}

	var currentWindowState = windowState;
	getWindowState();
	if (currentWindowState != windowState) {
		//console.log("CHANGE!");
		jobSort(windowState);
		sliderSetUp(false);
	}

});

function getWindowState() {
	if ($(window).width() <= 639) {
		windowState = "mobile";
	} else if ($(window).width() <= 959) {
		windowState = "tablet";
	} else {
		windowState = "desktop";
	}
	//console.log(windowState);
}

// function navToggle() {
// 	//console.log("This is the function navToggle() speaking.");
// 	$("#topNav").stop().slideToggle();
// }

function jobToggle(jobToToggle) {
	console.log("This is the function jobToggle() speaking.");
	//console.log(jobToToggle);

	if ($('.jobDesc[data-job="' + jobToToggle + '"]').hasClass("descVisible")) {
		$('.jobDesc[data-job="' + jobToToggle + '"]').stop().slideToggle().removeClass("descVisible");
		descVisible = false;
	} else {

		if (!descVisible) {
			$('.jobDesc[data-job="' + jobToToggle + '"]').stop().slideToggle().addClass("descVisible");
			descVisible = !descVisible;
		} else {
			$(".descVisible").stop().slideToggle().removeClass("descVisible");
			$('.jobDesc[data-job="' + jobToToggle + '"]').stop().slideToggle().addClass("descVisible");
		}
	}
}

