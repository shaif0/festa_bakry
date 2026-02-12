
//ini bagian button beli


// ini bagian navigasi 
	$(document).ready(function(){
		$('.klik_menu').click(function(){
			var navigasi = $(this).attr('id');
			if(navigasi == "home"){
				$('.badan').load('home.php');						
			}
			else if(navigasi == "tentang"){
				$('.badan').load('tentang.php');						
			}
			else if(navigasi == "tutorial"){
				$('.badan').load('tutorial.php');						
			}
			else if(navigasi == "sosmed"){
				$('.badan').load('sosmed.php');						
			}
			else if(navigasi == "tambahan"){
				$('.badan').load('tambahan.php');						
			}
		});
        //load halaman awal
		$('.badan').load('home.php');						
 
	});
