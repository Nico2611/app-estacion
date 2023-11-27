if('serviceWorker' in navigator){
	navigator.serviceWorker.register('sw.js')
	.then(reg => console.log('Registro exitoso de SW', reg))
	.catch(err => console.log('Error al registrar', err))
}else{
	console.log("No serviceWorker")
}