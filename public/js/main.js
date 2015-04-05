var baseurl = 'http://d2ws0xxnnorfdo.cloudfront.net/meme/',
	start = 33122,
	loadAtATime = 10,
	loadedNonScroll = 0;
function loadImages () {
	for(var i = 0; i < loadAtATime; i++){
		(function(i){
			$('.container').append($('<img>', {src : baseurl + (start + i)}));
		}(i));
	}

	start += loadAtATime;
}
 
loadImages();
setInterval(function () {
	if(loadedNonScroll < 5){
		loadImages();
		loadedNonScroll++;
	}
}, 500);
$(document).on('scroll', function (e) {
	if($(this).scrollTop() + $(window).height() >= $(this).height() / 3){
		loadImages();
		loadedNonScroll = 0;
	}
});
$('.splash').on('click', function () {
	$(this).addClass('none');
});
$('.container').on('click', 'img', function () {
	$('.splash').removeClass('none')
		.css('top', $(window).scrollTop())
		.find('img').attr('src', $(this).attr('src'));
});