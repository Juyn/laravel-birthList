@extends('layouts.landing')

@section('content')
   <div class="countdown">
      <div class="teasing">
         <h1>Something BIG is coming !</h1>
         <h2>Explusion de "Mini Nous" prévue dans</h2>
         <div class="row col-md-8 offset-2">
            <div class="countdown-item col-sm-3 col-xs-6">
               <div id="countdown-months" class="countdown-number">00</div>
               <div class="countdown-label">mois</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
               <div id="countdown-days" class="countdown-number">00</div>
               <div class="countdown-label">jours</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
               <div id="countdown-hours" class="countdown-number">00</div>
               <div class="countdown-label">heures</div>
            </div>
            <div class="countdown-item col-sm-3 col-xs-6">
               <div id="countdown-minutes" class="countdown-number">00</div>
               <div class="countdown-label">minutes</div>
            </div>
         </div>
         <a href="{{ route('product.index') }}"><button class="button  arrow">Accéder à la liste de naissance</button></a>
      </div>
   </div>


   <script>
       function countdown(endDate) {
           let days, hours, minutes, seconds, months;
           endDate = new Date(endDate).getTime();

           if (isNaN(endDate)) {
               return;
           }

           setInterval(calculate, 1000);

           function calculate() {
               let startDate = new Date();
               startDate = startDate.getTime();

               let timeRemaining = parseInt((endDate - startDate) / 1000);

               if (timeRemaining >= 0) {
                   months = parseInt(timeRemaining / 2628000);
                   timeRemaining = (timeRemaining % 2628000);

                   days = parseInt(timeRemaining / 86400);
                   timeRemaining = (timeRemaining % 86400);

                   hours = parseInt(timeRemaining / 3600);
                   timeRemaining = (timeRemaining % 3600);

                   minutes = parseInt(timeRemaining / 60);
                   timeRemaining = (timeRemaining % 60);

                   seconds = parseInt(timeRemaining);

                   document.getElementById("countdown-months").innerHTML = parseInt(months, 10);
                   document.getElementById("countdown-days").innerHTML = parseInt(days, 10);
                   document.getElementById("countdown-hours").innerHTML = ("0" + hours).slice(-2);
                   document.getElementById("countdown-minutes").innerHTML = ("0" + minutes).slice(-2);
                   // document.getElementById("seconds").innerHTML = ("0" + seconds).slice(-2);
               } else {
                   return;
               }
           }
       }

       countdown('12/13/2018 00:00:00 PM');
   </script>
@endsection
