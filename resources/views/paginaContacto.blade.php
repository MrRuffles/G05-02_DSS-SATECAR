@extends('barradenavegacion')
@section('content')
<h1>SATECAR</h1>
<p>
    <h3>Contacta con nosotros</h3>
</p>
<p>

    Francisco Javier Rico Pérez <br>
    Carlos Torralba Ruiz <br>
    Ricardo Gonzalez Torres <br>
    Sergio Molina Belda <br>
    Pablo García De Ávila <br>
    <br>
    <br>
    Avenida del Mediterraneo, 0300 Alicante.

</p>

<!--facebook-->
<div class="social-buttons">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url ?? '') }}"
       target="_blank">
       <i class="fa fa-facebook-official"></i>
       
    </a>

<!--twitter-->

    <a href="https://www.twitter.com/intent/tweet?url={{ urlencode($url ?? '') }}"
       target="_blank">
       <i class="fa fa-twitter-square"></i>
    </a>
</div>

<!--ventana-->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>
@endsection
