@extends('layouts.template')

@section('content')
    <div class="row g-4 settings-section">
      <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
          <h4>Confirmer la sortie pour le client : {{ $moto->immatriculation }}</h4>
          <div class="app-card-body">
           {{-- Un formulaire qui recupère la date et l'heure actuelle --}}
           <form action="{{ route('sorties.store') }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Moto ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $moto->id }}" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Numero du ticket</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $entree->ticket_number }}" readonly>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date/heure de sorite</label>
                <input type="datetime" class="form-control" id="exampleFormControlInput1" name="srotie_datetime" value="{{ now() }}" disabled>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Total à payer (cfa)</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="total_amount" value="{{ $total_amount }}" disabled>
              </div>
              <button type="submit" class="btn app-btn-primary" >Confirmer</button>
          </form>
          </div><!--//app-card-body-->
        </div><!--//app-card-->
      </div>
    </div><!--//row-->
@endsection