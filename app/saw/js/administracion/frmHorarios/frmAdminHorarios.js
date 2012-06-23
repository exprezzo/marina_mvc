/*
 * File: frmAdminHorarios.js
 * Date: Wed May 30 2012 23:02:03 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

frmAdminHorarios = Ext.extend(frmAdminHorariosUi, {
    initComponent: function() {
        frmAdminHorarios.superclass.initComponent.call(this);
		
		this.dspTitulo.setValue(
			'<div class="titulo">'+
				'<div class="texto">Programacion Semanal</div>'+
				'<div class="imagen"></div>'+				
			'</div>'
		);
		
		this.configurarGridHorarios();
		this.configurarFieldsetSeleccion();
		this.configurarFormEdicion();
		this.gridHorarios.bottomToolbar.doRefresh();			
    },
	configurarFieldsetSeleccion:function(){
		var data = new Array(
			{id:1,nombre:'D 01'},
			{id:2,nombre:'D 02'},
			{id:4,nombre:'D 03'},
			{id:3,nombre:'D 04'}
		);
		this.cmbDispositivos.store.loadData({data:data});
		this.cmbDispositivos.setValue(1);
		this.cmbDispositivos.on('select',function(){
			this.gridHorarios.bottomToolbar.doRefresh();			
		},this);
		
		data = new Array(
			{id:1,nombre:'Lunes'},
			{id:2,nombre:'Martes'},
			{id:3,nombre:'Miercoles'},
			{id:4,nombre:'Jueves'},
			{id:5,nombre:'Viernes'},
			{id:6,nombre:'Sabado'},
			{id:7,nombre:'Domingo'}
		);		
		this.cmbDias.store.loadData({data:data});
		this.cmbDias.on('select',function(){
			this.gridHorarios.bottomToolbar.doRefresh();			
		},this);
		this.cmbDias.setValue(1);
	},
	configurarGridHorarios:function(){
		this.gridHorarios.store=new stoHorarios();
		
		this.gridHorarios.store.on('beforeload',function(){
			this.gridHorarios.store.baseParams={
				idDispositivo:this.cmbDispositivos.getValue(),
				dia:this.cmbDias.getValue()
			};
		},this);
				
		var selMod=this.gridHorarios.getSelectionModel();
		
		selMod.on('rowselect',function( selMod,  rowIndex, record ){			
			this.frmEdicion.getForm().loadRecord(record);
			this.btnGuardar.setDisabled(false);
			this.btnEliminar.setDisabled(false);
		},this);		
		
		this.gridHorarios.bottomToolbar.bind( this.gridHorarios.store );
	},
	guardar:function(){
		this.frmEdicion.el.mask("Guardando información");
		this.frmEdicion.getForm().submit({
			scope:this,
			url:'/programacion/guardar',
			success:function(){
				this.frmEdicion.el.unmask();
				this.gridHorarios.bottomToolbar.doRefresh();
				this.frmEdicion.getForm().reset();
				this.btnGuardar.setDisabled(true);
				this.btnEliminar.setDisabled(true);
			},
			failure:function(){
				this.el.unmask();
			}
		});
	},
	configurarFormEdicion:function(){
		this.btnGuardar2.on('click',function(){
			this.guardar();
		},this);
		this.btnGuardar.on('click',function(){
			this.guardar();
		},this);
		this.btnNuevo.on('click',function(){
			this.frmEdicion.getForm().reset();
			this.btnGuardar.setDisabled(false);
			this.btnEliminar.setDisabled(true);
			this.txtIdDispositivo.setValue(this.cmbDispositivos.getValue());
			this.txtDia.setValue(this.cmbDias.getValue());
			
		},this);
		
		this.btnEliminar.on('click',function(){
			
			Ext.Msg.show({
			   title:'Confirme',
			   scope:this,
			   msg: '¿Eliminar?',
			   buttons: Ext.Msg.YESNO,
			   fn: function(respuesta){
					if(respuesta=='yes'){
						this.eliminar();
					}
					
			   }
			   ,			   
			   icon: Ext.MessageBox.WARNING
			})
		
			
		},this);
	},
	eliminar:function(){
		this.frmEdicion.el.mask("procesando solicitud...");
		this.frmEdicion.getForm().submit({
				scope:this,
				url:'/programacion/eliminar',
				success:function(){
					this.frmEdicion.el.unmask();
					this.gridHorarios.bottomToolbar.doRefresh();
					this.frmEdicion.getForm().reset();
					this.btnGuardar.setDisabled(true);
					this.btnEliminar.setDisabled(true);
				},
				failure:function(){
					this.frmEdicion.el.unmask();
				}
			});
	}
});
Ext.reg('frmAdminHorarios', frmAdminHorarios);