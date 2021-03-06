/*
 * File: catMenus.js
 * Date: Sun Jun 24 2012 19:43:17 GMT-0600 (Hora verano, Montañas (México))
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

catMenus = Ext.extend(catMenusUi, {
    initComponent: function() {
        catMenus.superclass.initComponent.call(this);
		this.btnNuevo.on('click',function(){
			this.frmMenu.load({
				url:'menus/getById',
				params:{menuId:1}
			});
		},this);
		
		this.gridMenus.on('celldblclick', function( grid, rowIndex, columnIndex, e ){
			var rec = grid.store.getAt(rowIndex);
			this.frmMenu.load({
				url:'menus/getById',
				params:{menuId:rec.data.id},
				scope:this,
				success:function(){
					this.setActiveTab(this.frmMenu);
				}
			});
		},this);
		
		this.btnGuardar.on('click',function(){
			this.frmMenu.getForm().submit({
				url: 'menus/save'
			});
		},this);
    }
});
