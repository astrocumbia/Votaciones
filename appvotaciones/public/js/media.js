
function eventoimagen(obj){
	// console.log(obj);
	$(obj).hide("drop", { direction: "down" }, "slow");
	$(obj).promise().done(function(){
		// $(obj).remove();
		// console.log(obj);
		$('#actividadeselegidas').prepend(obj);
		$(obj).fadeIn("slow");
	});
	document.getElementById('buscarsugerencias').removeAttribute("disabled");
}

function eventoimagenretorno(obj){
	
}

function buscarsugerencias(){
	var x = $('#actividadeselegidas').children('div');
	var img = x.find("img");
	var actividades = [];
	img.each(function(){ // run this for each image
         // push each image's id to the actividadesay
        var temp = $(this).attr("name");
        actividades.push( temp );
        // console.log(temp);
    });
	console.log(actividades);
	var dir = $('#address').val();
	var edo = dir.split(",");
	console.log(edo[0]);

	$.ajax({
		url: 'estadosyactividades',
		type: 'POST',
		data: {actividades: actividades,
				estado: edo[0]
		 	},
	})
	.done(function(respuesta) {
		console.log("success");
		console.log(respuesta);
		resultados_ = respuesta;
		mostrarresultados(respuesta);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}

function mostrarresultados (res) {
	$('#resultados').empty();
	for(i=0;i < res.length; i++ ){
		console.log(res[i]['nombre']);
		var temp = "<div class='col-md-5 col-md-offset-1' id='"+res[i]['nombre']+"' latitud='"+res[i]['latitud']+"' longitud='"+res[i]['longitud']+"' onclick='calcularuta(this);'>"+
						"<h4>"+res[i]['nombre']+"</h4>"+
						"<p><strong>Descripcion:</strong>"+res[i]['descripcion']+
						"</p>"+
					"</div>";
		$('#resultados').prepend(temp);
	}
}

function eleccionderegion (regiones) { /*	Intercambiamos el contenido del panel central 	*/
	if (regiones == null) {
		$('#menu1').hide("drop", { direction: "down" }, "slow");
		$('#menu1').promise().done(function () {
			var regionesmenu="<div id='regiondiv' class='col-md-12'>"+
			"<div class='row'> <h3> Elige tu region </h3> </div>"+
				"<div class='row'>" +
					"<div class='col-md-2 col-md-offset-1'><img src='img/reg-centro.jpg' alt='...' 	class='img-responsive' name='centro' onclick='regionseleccionada(this);'> </div> " +
					"<div class='col-md-2'><img src='img/reg-golfo.jpg' alt='...' 	class='img-responsive' name='golfo' onclick='regionseleccionada(this);'> </div> " +
					"<div class='col-md-2'><img src='img/reg-norte.jpg' alt='...' 	class='img-responsive' name='norte' onclick='regionseleccionada(this);'> </div> " +
					"<div class='col-md-2'><img src='img/reg-sur.jpg' alt='...' 	class='img-responsive' name='sur' onclick='regionseleccionada(this);'> </div> " +
					"<div class='col-md-2'><img src='img/reg-pacifico.jpg' alt='..' class='img-responsive' name='pacifico' onclick='regionseleccionada(this);'> </div> " +
				"</div> "+
			"<div class='row' style='margin-top:3%; margin-bottom:2%;'> <a class='btn btn-success' role='button' onclick='elecciondeestado();'>Siguiente</a> </div>"+
			"</div>";	
			$('#contenido').prepend(regionesmenu).hide().fadeIn('slow');
		});
	}
	
}

function elecciondeestado(estados){ /*	Intercambiamos el contenido del panel central 	*/
	// console.log(estados);
	

	$('#regiondiv').hide("drop", { direction: "down" }, "slow");
	$('#estacionesmenu').hide("drop", { direction: "down" }, "slow");
	$('#menuactividades').hide("drop", { direction: "down" }, "slow");
	var estado = "<div id='estadodiv' class='row'></div>";
	$('#contenido').prepend(estado).hide().fadeIn('slow');
	$('#contenido').prepend(" <h3 id='estadocabecera'>	Elige un estado </h3> ");
	var edo="";
	var renglon = 0;
	for( var x = 0; x < estados.estados.length; x++){
		edo += "<div class='col-md-3'>"+
					"<img src='img/estados/"+estados.estados[x].replace(/\s/g,'')+".png' alt='...' class='img-responsive' name='"+estados.estados[x]+"' onclick='estadoseleccionado(this);'>"+
				"</div>";	
	}
	// console.log(edo);
	$('#estadodiv').append(edo).hide().fadeIn('slow');
}

function elecciondetransporte(transportes){ /*	Intercambiamos el contenido del panel central 	*/
	if (transportes == null) {
		$('#regiondiv').hide("drop", { direction: "down" }, "fast");
		$('#estadodiv').hide("drop", { direction: "down" }, "fast");
		var transporte ="<div id='transportediv'>"+
			"<div class='row'> <h3 style='color:gold;'> ¿Como te gustaria llegar? </h3> </div>"+
				"<div class='row' style='margin-top:15%;'>" +
					"<img src='img/bus.png' alt='...' class='col-md-2 col-md-offset-2'>" +
					"<img src='img/bici.png' alt='...' class='col-md-3'> " +
					"<img src='img/auto.png' alt='...' class='col-md-4'> " +
				"</div>"+
			"<div class='row'> <a class='btn btn-success' role='button' onclick='menudeopciones();' style='margin-top:2%; margin-bottom:2%;'>Dejame ver...</a> </div>"+
			"</div>";
		$('#contenido').prepend(transporte).hide().fadeIn('slow');
	}
}

function elecciondeestacion(estaciones) {
	if (estaciones == null) {
		var estacionmenu = " <div class='row' id='estacionesmenu'>"+
		"<div class='col-md-3'>"+
			"<h3>Primavera</h3>"+
			"<img src='img/estaciones/primavera.jpg' alt='' name='primavera' class='img-responsive' onclick='estacionseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-3'>"+
			"<h3>Verano</h3>"+
			"<img src='img/estaciones/verano.jpg' alt='' name='verano' class='img-responsive' onclick='estacionseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-3'>"+
			"<h3>Otoño</h3>"+
			"<img src='img/estaciones/otono.jpg' alt='' name='otonio' class='img-responsive' onclick='estacionseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-3'>"+
			"<h3>Invierno</h3>"+
			"<img src='img/estaciones/invierno.jpg' alt='' name='invierno' class='img-responsive' onclick='estacionseleccionada(this);' />"+
		"</div>"+
	"</div> ";
	$('#menu1').hide("drop",{direction:"down"},"fast");
	$('#menu1').promise().done(function () {
		$('#contenido').prepend(estacionmenu).hide().fadeIn('slow');
	});
	}
	
}

function elecciondeactividad(){
	var actividadesmenu="<div class='row' id='menuactividades'>"+
		"<div class='col-md-4'>"+
			"<h3>Mirador</h3>"+
			"<img src='img/actividades/mirador.png' alt='' class='img-responsive' name='mirador' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Zona Arqueológica</h3>"+
			"<img src='img/actividades/zonaarqueologica.png' alt='' class='img-responsive' name='zonaarqueologica' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Museo</h3>"+
			"<img src='img/actividades/museo.png' alt='' class='img-responsive' name='museo' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Escalar</h3>"+
			"<img src='img/actividades/escalar.png' alt='' class='img-responsive' name='escalar' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Tirolesa</h3>"+
			"<img src='img/actividades/tirolesa.png' alt='' class='img-responsive' name='tirolesa' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Pesca</h3>"+
			"<img src='img/actividades/pesca.png' alt='' class='img-responsive' name='pesca' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Buceo</h3>"+
			"<img src='img/actividades/buceo.png' alt='' class='img-responsive' name='buceo' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Aguas Termales</h3>"+
			"<img src='img/actividades/aguastermales.png' alt='' class='img-responsive' name='aguastermales' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Reserva Natural</h3>"+
			"<img src='img/actividades/reservanatural.png' alt='' class='img-responsive' name='reservanatural' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Volar en Globo</h3>"+
			"<img src='img/actividades/volarenglobo.png' alt='' class='img-responsive' name='volarenglobo' onclick='actividadseleccionada(this);' />"+
		"</div>"+
		"<div class='col-md-4'>"+
			"<h3>Bicicleta</h3>"+
			"<img src='img/actividades/bicicleta.png' alt='' class='img-responsive' name='bicicleta' onclick='actividadseleccionada(this);' />"+
		"</div>"+
	"</div>";
	$('#menu1').hide("drop",{direction:"down"},"fast");

	$('#contenido').prepend(actividadesmenu);
}

function elecciondepueblo (obj) {
	var cont = 0;
	$('#estadodiv').hide("drop",{direction:"down"},"fast");
	$('#estadocabecera').hide("drop",{direction:"down"},"fast");
	var texto = "<h2>Pueblo</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro incidunt iusto ratione ex, animi molestias. Ratione dolorum temporibus quaerat, eius est, sint nemo, nesciunt voluptates repudiandae fugit praesentium animi numquam.</p>"
	$('#transportediv').hide("drop",{direction:"down"},"fast");
	var menu = "<div class='row' id='menudeopciones'> <div class='row' id='cabeceraopciones'></div>  <div class='row' id='opciones'></div> </div>"
	$('#contenido').prepend(menu);
	$('#cabeceraopciones').prepend("  <h3> Ok, Esto es lo que te puedo sugerir.	</h3>  ").hide().fadeIn('slow');
	$('#cabeceraopciones').promise().done( function(){
		for (var i = 0; i < obj.pueblos.length; i++) {
			console.log(obj.pueblos[i].replace(" ","")+'\n');
			$('#opciones').prepend("<div class='col-md-4'><img src='img/pueblosmagicos/"+obj.pueblos[i].replace(/\s/g,'')+".jpg' alt='...' class='img-responsive'> <h2>"+obj.pueblos[i].toUpperCase()+"</h2> <p class='bg-primary'> Telefono: "+obj.telefonos[i]+"</p> <p class='bg-primary'>Ubicacion: "+obj.ubicaciones[i]+"</p> <p class='bg-primary'>Itinerarios: "+obj.itinerarios[i]+"</p> </div>").hide().fadeIn('slow');
		}
		// $('#opciones').prepend("<div class='col-md-2'><img src='img/pueblosmagicos/bacalar.jpg' alt='...' class='img-responsive'> <h2>Pueblo</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro incidunt iusto ratione ex, animi molestias. Ratione dolorum temporibus quaerat, eius est, sint nemo, nesciunt voluptates repudiandae fugit praesentium animi numquam.</p>	</div>").hide().fadeIn('slow');
		// $('#opciones').prepend("<div class='col-md-2'><img src='img/pueblosmagicos/calpulalpam.jpg' alt='...' class='img-responsive'> <h2>Pueblo</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro incidunt iusto ratione ex, animi molestias. Ratione dolorum temporibus quaerat, eius est, sint nemo, nesciunt voluptates repudiandae fugit praesentium animi numquam.</p>	</div>").hide().fadeIn('slow');
		// $('#opciones').prepend("<div class='col-md-2'><img src='img/pueblosmagicos/angangueo.jpg' alt='...' class='img-responsive'> <h2>Pueblo</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro incidunt iusto ratione ex, animi molestias. Ratione dolorum temporibus quaerat, eius est, sint nemo, nesciunt voluptates repudiandae fugit praesentium animi numquam.</p>	</div>").hide().fadeIn('slow');
		// $('#opciones').prepend("<div class='col-md-2 col-md-offset-1'><img src='img/pueblosmagicos/cholula.jpg' alt='...' class='img-responsive'> <h2>Pueblo</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro incidunt iusto ratione ex, animi molestias. Ratione dolorum temporibus quaerat, eius est, sint nemo, nesciunt voluptates repudiandae fugit praesentium animi numquam.</p>	</div>").hide().fadeIn('slow');
	});	
}

function estadoseleccionado(obj){
	var x = obj.getAttribute('name');
	console.log(x);

	$.ajax({
		url: 'getpueblosporestado',
		type: 'POST',
		dataType: 'json',
		data: {estado: x },
	})
	.done(function(data) {
		console.log(data.pueblos);
		elecciondepueblo(data);

	})
	.fail(function() {
		console.log("error estado seleccionado");
	})
	.always(function() {
	});
}
function regionseleccionada(obj){
	// elecciondeestado();
	var x = obj.getAttribute('name');
	console.log(x + "---> ");
	$.ajax({
		url: 'getestadosporregion',
		type: 'POST',
		dataType: 'json',
		data: {region: x },
	})
	.done(function(data) {
		elecciondeestado(data);

	})
	.fail(function(data) {
		console.log("error region seleccionada");
		console.log(data); 
	})
	.always(function() {
		// console.log("complete");
	});
	
}

function estacionseleccionada(obj){
	var x = obj.getAttribute('name');
	console.log(x + "---> ");
	$.ajax({
		url: 'getestadosporestacion',
		type: 'POST',
		dataType: 'json',
		data: {estacion: x },
	})
	.done(function(data) {
		// console.log(data + "bien");
		elecciondeestado(data);

	})
	.fail(function(data) {
		console.log("error estacion seleccionada");
		console.log(data); 
	})
	.always(function() {
		// console.log("complete");
	});
}

function actividadseleccionada (obj) {
	var x = obj.getAttribute('name');
	console.log(x + "---> ");
	$.ajax({
		url: 'getestadosporactividad',
		type: 'POST',
		dataType: 'json',
		data: {actividad: x },
	})
	.done(function(data) {
		// console.log(data + "bien");
		elecciondeestado(data);

	})
	.fail(function(data) {
		console.log("error estacion seleccionada");
		console.log(data); 
	})
	.always(function() {
		// console.log("complete");
	});
}
