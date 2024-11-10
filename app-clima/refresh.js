document.addEventListener("DOMContentLoaded", () => {
	refreshDatos();
	refreshId = setInterval(refreshDatos, 10000)
})
function refreshDatos(cont){
	let valorTemp = document.querySelector("#temp-int")
	valorTemp.innerHTML = (parseInt(valorTemp.innerHTML) + 1)

	let valorHum = document.querySelector("#humedad-int")
	valorHum.innerHTML = (parseInt(valorHum.innerHTML) + 1)

	let valorWind = document.querySelector("#viento-int")
	valorWind.innerHTML = (parseInt(valorWind.innerHTML) + 1)

	let valorIncendio = document.querySelector("#incendio-int")
	valorIncendio.innerHTML = (parseInt(valorIncendio.innerHTML) + 1)
}