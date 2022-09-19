<?php 

class Bilgi {

    function basarili($deger,$yol) {
        return '<div class="alert alert-success mt-5">'.$deger.'</div>'
        .header("Refresh:3 url=".URL.$yol);
    }


    function hata($deger=false,$yol) {
        return '<div class="alert alert-danger mt-5">'.$deger.'</div>'
        .header("Refresh:3 url=".URL.$yol);
    }


    function uyari($tur="danger",$metin){

        return '<div class="alert alert-'.$tur.' mt-2 p-3>'.$metin.'</div>';
    }

    function direktYonlen($deger,$yol) {
        return header("Location".URL.$yol);
    }



}




?> 