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


function processingTic(e){
//tıklanan bölümün id si array lere eklendi.
xArray.push(e);
selecTicArray.push(e);
//random üretilen sayı
var randomNum = Math.floor(Math.random()* ticArray.length);

for(var i=0;i<=selecTicArray.length;i++){
//for içerisinde unique bir sayı üretmek istedim.	
		
}
//üretilen random sayıya göre diziler oluşturuluyor.
oArray.push(randomNum);
selecTicArray.push(randomNum);	
//her click de oluşan x ve o arraylerinin boyutunu aldım					
var xNum = xArray.length;
var oNum = oArray.length;
							//if işlemi ile sınıra geldikten sonra ekrana image basmasını engelliyorum.
							if(selecTicArray.length <= ticArray.length){
							
								$("#"+ xArray[xNum-1]).css("background","url(img/X.png)");
								$("#"+ oArray[oNum-1]).css("background","url(img/O.png)");
							}
//en son oluşan dizilerin içi okunarak kazana belirlenecek.
//yukarda takıldığım yer geçince.	
						
}

