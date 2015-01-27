Ext.onReady(function() {
    MODx.load({ xtype: 'fszip-page-home'});
});

fsZIP.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'fszip-panel-home'
            ,renderTo: 'fszip-panel-home-div'
        }]
    });
    fsZIP.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(fsZIP.page.Home,MODx.Component);
Ext.reg('fszip-page-home',fsZIP.page.Home);