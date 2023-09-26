@extends('layouts.template')

@section('content')
    <div class="col-12 col-lg-8">
        <div class="app-card app-card-stats-table h-100 shadow-sm">
            <div class="app-card-header p-3">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <h4 class="app-card-title">List des engins</h4>
                    </div><!--//col-->
                    <div class="col-auto">
                        <div class="card-header-action">
                            <a href="#">View report</a>
                        </div><!--//card-header-actions-->
                    </div><!--//col-->
                </div><!--//row-->
            </div><!--//app-card-header-->
            <div class="app-card-body p-3 p-lg-4">
                <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th class="meta">#</th>
                                <th class="meta stat-cell">Immatric.</th>
                                <th class="meta stat-cell">Tel proprietaire</th>
                                <th class="meta stat-cell colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($motos as $moto)
                                <tr>
                                    <td class="meta">{{ $moto->id }}</td>
                                    <td class="stat-cell">{{ $moto->immatriculation }}</td>
                                    <td class="stat-cell">{{ $moto->tel_proprietaire }}</td>
                                    <td class="stat-cell "><a class="btn-sm" href="{{ route('motos.show', $moto->id) }}"><i class="fa-regular fa-eye"></i></a></td>
                                    <td class="stat-cell"><a class="btn-sm" href="{{ route('motos.edit', $moto->id) }}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                    <td class="stat-cell">
                                        <form action="{{ route('motos.destroy', $moto->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-sm border-0 bg-transparent"><i class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div><!--//col-->
@endsection