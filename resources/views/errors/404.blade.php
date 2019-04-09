@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card notFound ">
            <div class="text-center">
                <h1>AAAAAAAAAAAAAAHHH ! <br/>Tu m'a trouvé !</h1><br>
                <p>Par contre, tu as aussi trouvé une page d'erreur 404, ce qui veut dire que la page que tu cherchais ne se trouve plus ici, ou n'a jamais existé !</p>
            </div>
            <img src="{{asset('images/404.png') }}" alt="Page not found" >
        </div>
    </div>
@endsection