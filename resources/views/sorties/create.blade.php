@extends('layouts.template')

@section('content')
    <div class="row g-4 settings-section">
        <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
                <h4>Ajouter une moto</h4>
                <div class="app-card-body">
                    <form action="{{ route('sorties.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <input type="text" hidden name="user_id" class="form-control" id="userId" value="{{ $user->id }}">
                              @error('user_id')
                              <span class="text-danger">{{ $message }}</span>
                              @enderror
                        </div>

                        <div class="mb-3">
                            <label for="motoId" class="form-label">Moto ID</label>
                            <input type="text" name="moto_id" class="form-control" id="motoId"
                                value="{{ $moto->id }}">

                            @error('moto_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ticketNumber" class="form-label">Numero du ticket</label>

                            <input type="text" name="ticket_number" class="form-control" id="ticketNumber"
                                value="{{ $entree->ticket_number }}">

                            @error('ticket_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sortieDatetime" class="form-label">Date/heure de sortie</label>

                            <input type="datetime-local" name="sortie_datetime" class="form-control" id="sortieDatetime"
                                name="sortie_datetime" value="{{ now()->format('Y-m-d\TH:i') }}">

                            @error('sortie_datetime')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="totalAmount" class="form-label">Total à payer (cfa)</label>

                            <input type="number" name="total_amount" class="form-control" id="totalAmount"
                                name="total_amount" value="{{ $total_amount }}">
                            @error('total_amount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn app-btn-primary">Confirmer</button>
                    </form>
                </div><!--//app-card-body-->

            </div><!--//app-card-->
        </div>
    </div><!--//row-->
@endsection
{{-- <div class="row g-4 settings-section">
  <div class="col-12 col-md-8">
    <div class="app-card app-card-settings shadow-sm p-4">
      <h4>Confirmer la sortie pour le client : {{ $moto->immatriculation }}</h4>
      <div class="app-card-body"> --}}
{{-- <form action="{{ route('sorties.store') }}" method="post">
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
      </form> --}}





{{-- <form action="{{ route('sorties.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="motoId" class="form-label">Moto ID</label>
          <input type="text" class="form-control" id="motoId" value="{{ $moto->id }}" readonly>
        </div>
        <div class="mb-3">
          <label for="ticketNumber" class="form-label">Numero du ticket</label>
          <input type="text" class="form-control" id="ticketNumber" value="{{ $entree->ticket_number }}" readonly>
        </div>
        <div class="mb-3">
          <label for="sortieDatetime" class="form-label">Date/heure de sortie</label>
          <input type="datetime-local" class="form-control" id="sortieDatetime" name="sortie_datetime" value="{{ now()->format('Y-m-d\TH:i') }}">
        </div>
        <div class="mb-3">
          <label for="totalAmount" class="form-label">Total à payer (cfa)</label>
          <input type="number" class="form-control" id="totalAmount" name="total_amount" value="{{ $total_amount }}" disabled>
        </div>
        <button type="submit" class="btn app-btn-primary">Confirmer</button>
      </form>
      
      </div><!--//app-card-body-->
    </div><!--//app-card-->
  </div>
</div><!--//row--> --}}
