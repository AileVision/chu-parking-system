@extends('layouts.template')

@section('content')
    <div class="row g-4 settings-section">
      <div class="col-12 col-md-8">
        <div class="app-card app-card-settings shadow-sm p-4">
    
          <div class="app-card-body">
            <form class="settings-form" action="{{ route('entree.store') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="setting-input-1" class="form-label"></label>
                <input type="text" class="form-control" id="setting-input-1" value="{{ old('immatriculation') }}" 
                name="immatriculation" placeholder="Ex: TG1234 S">

              </div>
              <div class="mb-3">
                  <label for="setting-input-2" class="form-label">Tél. du propiétaire</label>
                  <input type="number" class="form-control" id="setting-input-2" value="{{ old('tel_proprietaire') }}" 
                  placeholder="Ex: 228 00 00 00 00" name="tel_proprietaire">
              </div>

              <button type="submit" class="btn app-btn-primary" >Enregister</button>
            </form>
          </div><!--//app-card-body-->
    
        </div><!--//app-card-->
      </div>
      
      <div class="col-12 col-md-4">
        <h3 class="section-title">Infos</h3>
        <div class="section-intro">Veuillez remplir les champs ci-dessous pour enregistrer votre moto.</a></div>
      </div>

    </div><!--//row-->
@endsection