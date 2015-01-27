var fsZIP = function(config) {
    config = config || {};
    fsZIP.superclass.constructor.call(this,config);
};
Ext.extend(fsZIP,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {}
});
Ext.reg('fszip',fsZIP);

fsZIP = new fsZIP();