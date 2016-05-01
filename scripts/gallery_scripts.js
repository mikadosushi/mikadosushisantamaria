/**
 * @author tj
 */
var timerInterval = 10000;
var restartObj = {
      				onStart:function(){clearInterval(galleryTimer)},
      				onClosed:function(){galleryTimer = setInterval(galleryRun, timerInterval);}
      			};
var jsonObject;    						
var galleryTimer;
function galleryRun(){	
    						
     						$('#galleryContainer').hide().html('');	
     						
     						for(i=0;i<3;i++)
											{	
														
												source = jsonObject.data[jsonObject.total].source;											
												$('#galleryContainer').append('<a class="galleryImage" href="'+source+'" target="_blank"><img class="galleryImage grid_5" style="margin-right:20px"src="'+source+'"/></a>');      	     			
      											jsonObject.total = (jsonObject.total+1)%jsonObject.data.length;
      										};
      										(function($) {
  													var cache = [];
  													// Arguments are image paths relative to the current page.
  												$.preLoadImages = function() {
    											
    											for (var i = jsonObject.total;i<(jsonObject.total+3); i++) {
      												var cacheImage = document.createElement('img');
      												cacheImage.src =jsonObject.data[i%jsonObject.data.length].source;
      												cache.push(cacheImage);
    																		}
  																			}
															})(jQuery);
      						$('#galleryContainer').fadeIn(300);
      						$('#galleryContainer>a').fancybox(restartObj); 

	
};

$('#uploadLink').fancybox(restartObj);

$(document).ready(function(){
	$('.contentContainer>.galleryImage').fancybox(restartObj); 
	$.ajax({
 			url: "http://graph.facebook.com/209684229044211/photos",
  			success: function(jsonResponse){
  											jsonObject = jsonResponse;
  											jsonObject.total = 0;
  											galleryRun();
  											galleryTimer = setInterval(galleryRun, timerInterval); 
  											}
			});});

			


