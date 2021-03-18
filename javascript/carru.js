
let intervalo;
let i=2;
let imagen = document.querySelector("#foto");
window.onload=reproducir();

function cambiar_foto(){
	
	switch(i){
		case 1:
			imagen.setAttribute("src","https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?w=800");
			i++;
			break;
		case 2:
			imagen.setAttribute("src","https://cdn.shopify.com/s/files/1/0229/0839/files/Busqueda_de_imagenes_3_large.jpg?v=1578328497");
			i++;
			break;
		case 3:
			imagen.setAttribute("src","https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg");
			i++;
			break;
		case 4:
			imagen.setAttribute("src","https://media.istockphoto.com/photos/astronaut-deep-space-image-science-fiction-fantasy-in-high-resolution-picture-id1153308175?k=6&m=1153308175&s=612x612&w=0&h=_DHjK_PgfSmezWxaJJZ8IRdOG59f_j-mKiC0vJxfdSs=")
			i++;
			break;
	}

	if(i==5){
		i=1;
	}
}

function reproducir(){
	intervalo = setInterval(cambiar_foto,2000);
}

function detener(){
	clearInterval(intervalo);
}