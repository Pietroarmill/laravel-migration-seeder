<h1>Treni:</h1>

<ul>
  @foreach ($trains as $train)
    <li>
      <div class="biglietto">
        <h1>Nome: {{ $train->azienda }}</h1>

        <div class="da-a">
          <span>da: {{ $train->stazione_di_partenza }} a: {{ $train->stazione_di_arrivo }}</span>
        </div>

        <div class="partenza">
          partenza: {{ $train->orario_di_partenza }}
        </div>

        <div class="arrivo">
          arrivo: {{ $train->orario_di_arrivo }}
        </div>
        
        <div>
          <span>codice treno: {{ $train->codice_treno }}</span> - <span>numero carrozza: {{ $train->numero_carrozza }}</span>
        </div>

        @if ($train->in_orario)
          <span>disponibile</span>
        @else 
          <span>non è disponibile</span>      
        @endif
      </div>
    </li>
  @endforeach
</ul>