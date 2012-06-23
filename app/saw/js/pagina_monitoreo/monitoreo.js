monitoreo={
	cargarElementosDom:function(){
		//Los elementos del dm que usamos constantemente
		//busca los elementos del dom que nos interesan constantemente
		if (this.lblNombreDispositivo == undefined){
			this.lblNombreDispositivo=Ext.select('.lblNombreDispositivo');									
		}
		if (this.imgEstado == undefined){
			this.imgEstado=Ext.select('.imgEstado');			
		}
		if (this.imgSwitch == undefined){
			this.imgSwitch=Ext.select('.imgSwitch');									
		}		
		
		
		if (this.linkSwitch == undefined){
			this.linkSwitch=Ext.select('.linkSwitch',true);									
			
			
			this.linkSwitch.on('click', function(){
				var accion;
				if (this.tarjeta.estado=='ON'){
					this.actualizarTarjeta(this.tarjeta.nombreDispositivo, 'OFF', this.tarjeta.idDispositivo);	
					accion='apagarDispositivo';
				}else if (this.tarjeta.estado=='OFF'){
					this.actualizarTarjeta(this.tarjeta.nombreDispositivo, 'ON', this.tarjeta.idDispositivo);	
					accion='encenderDispositivo';
				}
				
				Ext.Ajax.request({
					params: { idDispositivo: this.tarjeta.idDispositivo, },
					url: 'monitoreo/'+accion,
					
				   success: function(){
						/* :TODO: Pediente */
				   },
				   failure: function(){
						/* :TODO: Restaurar los valores de la tarjeta monitoreo cuando la peticion al servidor falla (recuerden que la vista se adelanta) */
						
				   },
				   headers: {
					   'my-header': 'foo'
				   }
				   
				});
				
			},this);
		}		
	},
	actualizarEstados:function(){
		
		/*var selMod=this.gridEstadoDispositivos.getSelectionModel();
		var selected=selMod.getSelected();*/
		
		this.gridEstadoDispositivos.bottomToolbar.doRefresh();		
		this.actulizarEstadosTask.delay(saw.monitoreo.tiempo_entre_peticiones);
	},
	actualizarTarjeta:function(nombreDispositivo, estado, idDispositivo){		
		
		this.lblNombreDispositivo.elements[0].textContent=(nombreDispositivo == '')? 'seleccione un dispositivo...' : nombreDispositivo;	
		//this.lblNombreDispositivo.elements[1].textContent=(nombreDispositivo == '')? 'seleccione un dispositivo...' : nombreDispositivo;	
		
		this.tarjeta={};
		this.tarjeta.nombreDispositivo=nombreDispositivo;
		this.tarjeta.idDispositivo = idDispositivo;
		this.tarjeta.estado=estado;
		if (estado=='ON'){		//												<-----Mostrar Encendido
			this.imgEstado.elements[0].src='imagenes/theme1/Light Bulb on.png';
			this.imgEstado.elements[0].title='encendido';
			//------------------------------------------------------------------
			this.imgSwitch.elements[0].src='imagenes/theme1/switch_on.png';
			this.imgSwitch.elements[0].title='apagar';
		}else{					//												<------Mostrar Apagado
			this.imgEstado.elements[0].src='imagenes/theme1/Light Bulb off.png';
			this.imgEstado.elements[0].title='encendido';			
			//------------------------------------------------------------------
			this.imgSwitch.elements[0].src='imagenes/theme1/switch_off.png';
			this.imgSwitch.elements[0].title='encender';
		}		
	},
	init:function(){
		this.gridEstadoDispositivos = new gridMonitoreoDispositivos({
			renderTo: 'gridMonitoreoDispositivos'		
		});	
	
		this.gridMonitoreoHorarios = new gridMonitoreoHorarios({
			renderTo: 'gridMonitoreoHorarios'
		});

		this.cargarElementosDom();
		
		this.gridEstadoDispositivos.getSelectionModel().on('rowselect',function(selectionModel , rowIndex, r){	
			this.actualizarTarjeta(r.data.nombre, r.data.estado, r.id);			
			this.gridMonitoreoHorarios.bottomToolbar.doRefresh();
		},this);
	
		
		 
		//El tiempo de duracion se refresca en el cliente cada segundo,
		var clase=this;
		this.actulizarEstadosTask = new Ext.util.DelayedTask(
			function(){
				clase.actualizarEstados();
			}			
		);
		
		this.gridEstadoDispositivos.store.on('beforeload',function(){
			var selMod=this.gridEstadoDispositivos.getSelectionModel();
			var selected=selMod.getSelected();
			var idDispositivo;
			if ( selected == undefined){
				idDispositivo=0;
			}else{								
				idDispositivo=selected.data.idDispositivo;				
			}
			this.gridMonitoreoHorarios.store.baseParams={idDispositivo:idDispositivo};
		},this);
		
		
		this.gridEstadoDispositivos.store.on('load',function(){
			var selMod=this.gridEstadoDispositivos.getSelectionModel();
			var selected=selMod.getSelected();
			
			if (this.lblFecha == undefined){
				this.lblFecha=Ext.select('.lblFecha');			
			}
			
			if ( selected == undefined){
				this.actualizarTarjeta('', 'OFF',0);
				this.lblFecha.elements[0].innerHTML='';
			}else{												
				this.actualizarTarjeta(selected.data.nombre, selected.data.estado, selected.id);
				//
				var dt = Date.parseDate( selected.data.fecha, "Y-m-d H:i:s");				
				this.lblFecha.elements[0].innerHTML=dt.format('l, \\t\\he jS \\of F Y ');
				
			}
			this.gridMonitoreoHorarios.bottomToolbar.doRefresh();
			
			//
			
			
			
			
			//alert(dt.format('l, \\t\\he jS \\of F Y h:i:s A'));
		},this);
		
		//En el archivo principal, se configura la propiedad tiempo_entre_peticiones del objeto saw.monitoreo
		
		this.actualizarEstados();		
		
		
		
		//al dar click en el switch se actualiza el estado en la tarjeta y se envia el nuevo estado al servidor,
		//si la peticion de cambio de estado falla, se restauran los valores de la tarjeta.
		
		/*this.imgSwitch.elements[0].on('click',function(){
			alert("asd");
		},this);*/
	
		//al dar click en el icono de configuracion, se abre la pagina de configuracion
		
	}
}