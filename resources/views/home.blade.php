@extends('layouts.landing')

@section('content')
   <div class="countdown col-xs-12">
      <div class="teasing">
         <h1 class="d-none d-sm-block">Ca y est !</h1>
          <h2><strong>Kyllian </strong> est né le 29/11/18</h2>
         <a href="{{ route('product.index') }}" class="button arrow">Accéder à la liste de naissance</a>
      </div>
   </div>
@endsection
