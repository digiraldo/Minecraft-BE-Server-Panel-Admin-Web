var _img = new Array();
_img[0] = new Image();
_img[0].src = "../includes/img/perfil/arana.png";
_img[1] = new Image();
_img[1].src = "../includes/img/perfil/arana_cueva.png";
_img[2] = new Image();
_img[2].src = "../includes/img/perfil/cerdo.png";
_img[3] = new Image();
_img[3].src = "../includes/img/perfil/creeper.png";
_img[4] = new Image();
_img[4].src = "../includes/img/perfil/enderman.png";
_img[5] = new Image();
_img[5].src = "../includes/img/perfil/esqueleto.png";
_img[6] = new Image();
_img[6].src = "../includes/img/perfil/granjero.png";
_img[7] = new Image();
_img[7].src = "../includes/img/perfil/lobo.png";
_img[8] = new Image();
_img[8].src = "../includes/img/perfil/oveja.png";
_img[9] = new Image();
_img[9].src = "../includes/img/perfil/steve.png";
_img[10] = new Image();
_img[10].src = "../includes/img/perfil/usuario.png";
_img[11] = new Image();
_img[11].src = "../includes/img/perfil/vaca.png";
_img[12] = new Image();
_img[12].src = "../includes/img/perfil/zombie.png";

function cambiarA(_obj) {
    if (!_obj) return;
    var _index = _obj.selectedIndex;
    if (!_index) return;
    var _item = _obj[_index].value;
    if (!_item) return;
    if (_item < 0 || _item >= _img.length) return;
    document.images["Imagen"].src = _img[_item].src;
}

$('.alert').alert()

function Confirmar(Mensaje) {
    return (confirm(Mensaje)) ? true : false
}

$('.toast').toast('true')
//$('#rolToast').toast('show')
