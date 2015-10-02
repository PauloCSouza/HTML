/******************
 Carrega a API do Facebook
 ******************/
;(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

;(function (window, document) {

    /******************
     Fun��o que troca os coment�rios do Facebook
     ******************/
    var trocaComentariosFacebook = function () {
        var hash = location.hash.replace('#section', ''),
        // Titulo da sess�o
            html = '<p>Coment�rios da sess�o '+hash+'</p>';

        // HTML dos coment�rios do facebook, com nova url
        html += '<div class="fb-comments" data-href="'+location.href+'" data-num-posts="5" data-width="470"></div>';

        // Troca tira o conte�do, donde esta os coment�rios do facebook
        document.getElementById('comments').innerHTML = html

        // Chama o m�todo parse do facebook
        FB.XFBML.parse();
    }

    /******************
     Fun��o que verifica se tem algumas hash correta na url
     ******************/
    var verificaHash = function () {
        if (location.hash.indexOf('#section') != -1) {
            trocaComentariosFacebook();
        }
    }

    /******************
     Ao troca a hash, trocamos os coment�rios do facebook
     ******************/
    window.addEventListener('hashchange', function () {
        verificaHash();
    });

    verificaHash();
})(window, document);

