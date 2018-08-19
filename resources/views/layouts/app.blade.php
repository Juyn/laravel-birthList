<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1815339-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ setting('site.title') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    @if (Auth::check())
        @include('partials.nav')
    @else
        @include('partials.nav_not_logged_in')

    @endif
    <main class="py-4">
        @yield('content')
    </main>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
                @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

        $('.itemModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var title = button.data('title');
            var id = button.data('id');
            var link = button.data('link');
            var modal = $(this);
            modal.find('.modal-title').text("Réserver le cadeau  " + title);
            modal.find('.modal-body input.productId').val(id)
            modal.find('.modal-body .externalLinkProduct').attr('href', link)
        });
        $("#itemModal").on('hidden.bs.modal', function () {
            $(this).data('bs.modal', null);
        });
        $(document).ready(function() {
            $('.filters a').click(function handler() {
                $(this).unbind('click');
                $(this).toggleClass(['active', 'badge-secondary', 'badge-primary']);
                var filters =  [];

                $('.filters a.active').each(function() {
                    filters.push($(this).data('id'));
                });

                var e = this;
                $.ajax({
                    url: "",
                    type: "get",
                    data: {filters: filters},
                    success: function(response) {
                        $('.listing').stop().fadeOut('fast').hide().html(response.html).fadeIn('slow');
                    },
                    complete: function () {
                        $(e).bind('click', handler);
                    }
                });
            });
        });
    });
</script>
</body>
</html>


