/*
 * File: gridMonitoreoDispositivos.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

gridMonitoreoDispositivos = Ext.extend(gridMonitoreoDispositivosUi, {
    initComponent: function() {
        gridMonitoreoDispositivos.superclass.initComponent.call(this);
		this.store=new stoMonitoreoDispositivos();
		this.bottomToolbar.bind(this.store);
    }
});
Ext.reg('gridMonitoreoDispositivos', gridMonitoreoDispositivos);