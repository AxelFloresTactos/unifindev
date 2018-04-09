/**
 * Created by Tactos - 08/12/2017.
 **/

({
  initialize: function(options) {
    this._super('initialize', [options]);

    //Recupera id de cliente
    var id = this.model.id;
    //console.log(id);

    //Forma url de petición
    var url = app.api.buildURL('ResumenCliente/'+id, null, null, );

    //Ejecuta petición ResumenCliente
    var self = this;
    app.api.call('GET', url, {},{
      success: function (data){
        //Logs
        // console.log('data:');
        // console.log(data);

        //var records2 = data;
        _.extend(self, data);
        self.render();

      }
    });
  }
})
