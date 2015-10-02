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
     Função que troca os comentários do Facebook
     ******************/
    var trocaComentariosFacebook = function () {
        var hash = location.hash.replace('#section', ''),
        // Titulo da sessão
            html = '<p>Comentários da sessão '+hash+'</p>';

        // HTML dos comentários do facebook, com nova url
        html += '<div class="fb-comments" data-href="'+location.href+'" data-num-posts="5" data-width="470"></div>';

        // Troca tira o conteúdo, donde esta os comentários do facebook
        document.getElementById('comments').innerHTML = html

        // Chama o método parse do facebook
        FB.XFBML.parse();
    }

    /******************
     Função que verifica se tem algumas hash correta na url
     ******************/
    var verificaHash = function () {
        if (location.hash.indexOf('#section') != -1) {
            trocaComentariosFacebook();
        }
    }

    /******************
     Ao troca a hash, trocamos os comentários do facebook
     ******************/
    window.addEventListener('hashchange', function () {
        verificaHash();
    });

    verificaHash();
})(window, document);

