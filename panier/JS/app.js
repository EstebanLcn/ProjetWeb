(function ($) {
    $('.addPanier').click(function (event) {
        event.preventDefault();
        $.get($(this).attr('href'), {}, function (data) {
            if (data.error) {
                alert(data.message);
            } else {
                //propose de rediriger vers le panier
                if (confirm(data.message + 'Voulez vous aller sur le panier ?')) {
                    location.href = 'panier.php';
                } else {
                    //on renouvèle les valeurs de total et de count à chaque mise en panier d'un nouvel article
                    $('#total').empty().append(data.total);
                    $('#count').empty().append(data.count);

                }
            }
        }, 'json');
        return false;
    });

})(jQuery);