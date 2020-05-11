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
        <svg width="56" height="56" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><g fill="none" fill-rule="evenodd"><path d="M.32.183h55.127V55.31H.32V.183z" fill="#3B5998"/><path d="M32.446 24.287h-3.108V22.25c0-.766.507-.945.865-.945h2.192V17.94l-3.02-.01c-3.352 0-4.114 2.508-4.114 4.114v2.243h-1.938v3.467h1.94v9.81h4.076v-9.81h2.75l.358-3.467" fill="#FFF"/></g></svg></a>

<!--twitter-->
    <a href="https://www.twitter.com/intent/tweet?url={{ urlencode($url ?? '') }}"
        target="_blank">
        <svg width="56" height="56" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><g fill="none" fill-rule="evenodd"><path d="M.106.183h55.127V55.31H.106V.183z" fill="#00ACED"/><path d="M37.09 21.016c-.728.352-1.504.58-2.325.685.837-.538 1.48-1.387 1.784-2.404-.784.497-1.65.852-2.575 1.06-.735-.85-1.79-1.38-2.95-1.38-2.234 0-4.045 1.946-4.045 4.354 0 .338.035.673.102.988-3.355-.174-6.34-1.914-8.336-4.544-.346.642-.545 1.388-.545 2.19 0 1.506.714 2.848 1.8 3.617-.663-.026-1.287-.21-1.832-.54v.06c0 2.105 1.395 3.862 3.245 4.27-.34.097-.698.143-1.07.143-.258 0-.505-.018-.755-.078.513 1.737 2.008 2.998 3.777 3.023-1.385 1.174-3.128 1.864-5.023 1.864-.328 0-.65-.02-.966-.06 1.79 1.24 3.912 1.964 6.2 1.964 7.44 0 11.51-6.638 11.51-12.39 0-.186-.004-.372-.013-.558.79-.623 1.476-1.39 2.018-2.262" fill="#FFF"/></g></svg></a>
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
