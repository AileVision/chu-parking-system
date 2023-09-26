@extends('layouts.template')

@section('content')
    <div class="row g-4 settings-section">
      <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
    
          <div class="app-card-body">
            <form class="settings-form" action="{{ route('motos.update', $moto) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="mb-3">
                <label for="setting-input-1" class="form-label">Immatric. Moto</label>
                <input type="text" class="form-control" id="setting-input-1" value="{{ $moto->immatriculation }}" 
                name="immatriculation" placeholder="Ex: TG1234 S">
                @error('immatriculation')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="setting-input-2" class="form-label">Tél. du propiétaire</label>
                  <input type="number" class="form-control" id="setting-input-2" value="{{ $moto->tel_proprietaire }}" 
                  placeholder="Ex: 228 00 00 00 00" name="tel_proprietaire">
                  @error('tel_proprietaire')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
              <button type="submit" class="btn app-btn-primary" >Modifier</button>
            </form>
          </div><!--//app-card-body-->
    
        </div><!--//app-card-->
      </div>
    </div><!--//row-->
@endsection