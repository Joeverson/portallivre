var notification = function(){};

notification.prototype.startNow = function(){
    $('body').prepend('<div class="alert alert-success alert-dismissable notification"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong></strong>.</div>');
    $(".notification").css({
        zIndex: '10000000000000000',
        position: 'fixed',
        borderRadius: '0',
        border: 'none',
        width: '100%'
    });

};

notification.prototype.ok = function(sms){
    this.startNow();
    $('.notification').css({backgroundColor: '#b9df90', color: 'white'}).fadeIn('slow');
    $('.notification strong').html(sms);

    setTimeout(function(){
        $('.notification').fadeOut();
    }, 5000);
};

notification.prototype.error = function(sms){
    this.startNow();
    $('.notification').css({backgroundColor: '#F44336', color: 'white'}).fadeIn('slow');
    $('.notification strong').html(sms);

    setTimeout(function(){
        $('.notification').fadeOut();
    }, 10000);
};

notification.prototype.loading =function(sms){
    this.startNow();
    $('.notification').css({backgroundColor: '#FFEB3B', color: '#1c1c1c'}).fadeIn('slow');
    $('.notification strong').html(sms);

    /**setTimeout(function(){
        $('.notification').fadeOut();
    }, 5000);*/
};

