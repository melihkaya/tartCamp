var selecTicArray =[]; /* seçilenlerin tutulduğu array */
var ticArray=[]; 	   /* üretilen alan sayısı array de sıralanıyor.*/
var xArray =[];		   /* oluşturulan x'lerin tuttulduğu array*/
var oArray =[];		   /* oluşturulan o'lerin tuttulduğu array*/
var randomArray = [];  /* oluşturulan o'lerin tuttulduğu array*/

$(document).ready(function(){

		for (i=0; i<=8;i++){
			ticArray.push(i);
			//oyun alanalrı oluşturuluyor.
			var myDiv = $("<div id='"+i+"' name='zone"+i+"'></div>");
			//oluşturulan alanlar ekrana yazıldı.	
			$("#container").append( myDiv );
			 
				myDiv.click(function(e){
					var cell =$(this);
					//alanlara tıklanıldığında id numarası işlem alanına gönderiliyor.	
					processingTic(cell.attr("id"));

				}
			);
		
		}
});

