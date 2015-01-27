fsZIP.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,items: [{
            html: '<h2>'+_('fszip')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,bodyStyle: 'padding: 10px'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,items: [{
                title: _('fszip')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+_('fszip.help')+'</p><br />'
                    ,border: false
                },{
                    xtype: 'button',
                    name: 'button_zip',
                    fieldLabel: '',
                    text: _('fszip.zip'),
                    width: 150,
                    style: 'margin:10px; display:block;',
                    handler: this.doZIP
                },{
                    xtype: 'button',
                    name: 'button_dump',
                    fieldLabel: '',
                    text: _('fszip.dump'),
                    width: 150,
                    style: 'margin:10px; display:block;',
                    handler: this.doDump
                }]
            }]
        }]
    });

    fsZIP.panel.Home.superclass.constructor.call(this,config);
};

Ext.extend(fsZIP.panel.Home, MODx.Panel, {
    doZIP: function() {
        window.open("/archive/zip.php");
    },
    doDump: function() {
        window.open("/archive/dumper.php");
    }
});
Ext.reg('fszip-panel-home',fsZIP.panel.Home);