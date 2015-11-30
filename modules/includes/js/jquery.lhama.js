/*(function( $ ){
    $.fn.lhama = function(options) {
        //variacel que ira guardar o json de informações
        var json;

        // Definição dos valores padrões
        var defaults = {
            'pull' : null,
            'itens' : 10
        };

        // Geração das settings do seu plugin
        if(options){ $.extend( {}, defaults, options ) };


        //para fazer chamada a novos conteudos
        this.plus = function(int){
            $.ajax({
                url: defaults.urlGet,
                type: 'post',
                data: 'itens='+(int || defaults.itens),
                datatype: 'json',
                success: function(e){
                    var json = JSON.parse(e);
                    console.log(json);
                },
                error: function(e){
                    console.log("Houve um erro no arquivo chamado");
                    console.log("olha ae \n\n");
                    console.log(e);
                }
            });
        };





        // Loop que utiliza todos os itens envolvidos na utilização do plugin
        // Este looping garante o encadeamento para que todos os itens sejam utilizados
        return this.each(function() {
        });
    };
})( jQuery );*/


function lhama(element, url, itens){
    this.url = ( null || url );
    this.itens = ( itens || 2);

    this.plus = function(cat){
        var html = '';

        $.ajax({
            url: this.url,
            type: 'post',
            data: 'itens='+this.itens+"&cat="+cat,
            datatype: 'json',
            success: function(e){
                var json = JSON.parse(e);
                console.log(e);

                $.each(json, function(a,b){
                    //todo depois quando refatorar tirar essa bosta feia... fazer a estratecia padrão de clonagem

                    html += '<ul class="row">'+
                    '<li class="col-md-6 col-sm-6">'+
                    '<div class="cp-thumb" style="height: 250px; overflow-y: hidden; background: url(modules/includes/img/projects/'+ b.img +') no-repeat center / cover"></div>'+
                    '</li>'+
                    '<li class="col-md-6 col-sm-6">'+
                    '<div class="cp-post-content">'+
                    '<h3><a href="artigo/'+ b.id_artigo +'">'+ b.title +'</a></h3>'+
                    '<ul class="cp-post-tools">'+
                    '<li><i class="icon-1"></i> '+ b.date.formatTimestamp() +'</li>'+
                    '<li><i class="icon-2"></i> '+ b.name +'</li>'+
                    '</ul>'+
                    '<p>'+ b.description.substr(0, 200) +'...</p>'+
                    '</div>'+
                    '</li>'+
                    '</ul>';
                });

                $(element).html(html);
            },
            error: function(e){
                console.log("Houve um erro no arquivo chamado");
                console.log("olha ae \n\n");
                console.log(e);
            }
        });
    };

    //todo queria que ele pegasse um modelo de codigo e apartir dle ele gerasse varias semelhantes jogando as infromações do banco de dados..mas ta dand dor de cabeça depois refatoro
    //
    /*this.clone = function(){
        var parent = $(this.element).parent();
        var clone = $(this.element).clone(true,true);

        console.log(clone.children());

        parent.after(clone);

        for(var i = 0; i<10;i++)
            $(parent).append($(this.element));
    }*/
}