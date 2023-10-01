@extends('layouts.template')

@section('content')
<div class="container-xl">
		    
    <div class="row g-4 mb-4">
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Entrées</h4>
                    <div class="stats-figure"> {{ $totalEntrees }}cfa</div>
                    <div class="stats-meta text-success">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                        </svg> 20%</div>
                </div><!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div><!--//app-card-->
        </div><!--//col-->
        
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Sorties</h4>
                    <div class="stats-figure">{{ $totalSorties }}cfa</div>
                    <div class="stats-meta text-success">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg> 5% </div>
                </div><!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div><!--//app-card-->
        </div><!--//col-->
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Sorties en attentes</h4>
                    <div class="stats-figure">23</div>
                    <div class="stats-meta">
                        Open</div>
                </div><!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div><!--//app-card-->
        </div><!--//col-->
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Tickets annulés</h4>
                    <div class="stats-figure">6</div>
                    <div class="stats-meta">New</div>
                </div><!--//app-card-body-->
                <a class="app-card-link-mask" href="#"></a>
            </div><!--//app-card-->
        </div><!--//col-->
    </div><!--//row-->

    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">						    
            <a class="btn app-btn-primary" href="{{ route('motos.create') }}">
                Ajouter une moto
            </a>
        </div>
        <div class="col-auto">
             <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <form class="table-search-form row gx-1 align-items-center">
                            <div class="col-auto">
                                <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn app-btn-secondary">Recherche</button>
                            </div>
                        </form>
                        
                    </div><!--//col-->
                    <div class="col-auto">
                        
                        <select class="form-select w-auto" >
                              <option selected value="option-1">All</option>
                              <option value="option-2">This week</option>
                              <option value="option-3">This month</option>
                              <option value="option-4">Last 3 months</option>
                              
                        </select>
                    </div>
                    <div class="col-auto">						    
                        <a class="btn app-btn-secondary" href="#">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                            OK
                        </a>
                    </div>
                </div><!--//row-->
            </div><!--//table-utilities-->
        </div><!--//col-auto-->
    </div><!--//row-->

    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Tous</a>
        <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Payés</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">En attente</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Suprimés</a>
    </nav>	

    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-2">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">N° ID</th>
                                    <th class="cell">Immatriculation</th>
                                    <th class="cell">Contact</th>
                                    <th class="cell">Date</th>
                                    <th class="cell">Status</th>
                                    {{-- <th class="cell">Montant</th> --}}
                                    {{-- <th class="cell">Durée</th> --}}
                                    <th class="cell" colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($motos as $moto)
                                <tr>
                                    <td class="cell">{{ $moto->id }}</td>
                                    <td class="cell"><span class="truncate">{{ $moto->immatriculation }}</span></td>
                                    <td class="cell">{{ $moto->tel_proprietaire }}</td>
                                    <td class="cell">{{ $moto->created_at }}</td>
                                    <td class="cell"><span class="badge bg-success">Payé</span></td>
                                    {{-- <td class="cell">$259.35</td> --}}
                                    {{-- <td class="cell">10h36</td> --}}
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('motos.show', $moto) }}">Ticket entrée</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('sorties.create', $moto) }}">Ticket sortie</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="{{ route('motos.edit', $moto) }}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                    <td class="cell"><form action="{{ route('motos.destroy', $moto->id) }}" method="post">
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
            <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précedent</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav><!--//app-pagination-->
            
        </div><!--//tab-pane-->
        
        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        
                        <table class="table mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">N° Ticket</th>
                                    <th class="cell">Immatriculation</th>
                                    <th class="cell">Contact</th>
                                    <th class="cell">Date</th>
                                    <th class="cell">Status</th>
                                    <th class="cell">Durée</th>
                                    <th class="cell "></th>
                                    <th class="cell ">Actions</th>
                                    <th class="cell "></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell">#15346</td>
                                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
                                    <td class="cell">John Sanders</td>
                                    <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                    <td class="cell">$259.35</td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Voir</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Modif</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Supr</a></td>
                                </tr>
                                
                                <tr>
                                    <td class="cell">#15344</td>
                                    <td class="cell"><span class="truncate">Pellentesque diam imperdiet</span></td>
                                    <td class="cell">Teresa Holland</td>
                                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">01:16 AM</span></td>
                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                    <td class="cell">$123.00</td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Voir</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Modif</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Supr</a></td>
                                </tr>
                                
                                <tr>
                                    <td class="cell">#15343</td>
                                    <td class="cell"><span class="truncate">Vestibulum a accumsan lectus sed mollis ipsum</span></td>
                                    <td class="cell">Jayden Massey</td>
                                    <td class="cell"><span class="cell-data">15 Oct</span><span class="note">8:07 PM</span></td>
                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                    <td class="cell">$199.00</td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Voir</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Modif</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Supr</a></td>
                                </tr>
                            
                                
                                <tr>
                                    <td class="cell">#15341</td>
                                    <td class="cell"><span class="truncate">Morbi vulputate lacinia neque et sollicitudin</span></td>
                                    <td class="cell">Raymond Atkins</td>
                                    <td class="cell"><span class="cell-data">11 Oct</span><span class="note">11:18 AM</span></td>
                                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                                    <td class="cell">$678.26</td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Voir</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Modif</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Supr</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->		
            </div><!--//app-card-->
        </div><!--//tab-pane-->
        
        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">N° Ticket</th>
                                    <th class="cell">Immatriculation</th>
                                    <th class="cell">Contact</th>
                                    <th class="cell">Date</th>
                                    <th class="cell">Status</th>
                                    <th class="cell">Durée</th>
                                    <th class="cell "></th>
                                    <th class="cell ">Actions</th>
                                    <th class="cell "></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cell">#15345</td>
                                    <td class="cell"><span class="truncate">Consectetur adipiscing elit</span></td>
                                    <td class="cell">Dylan Ambrose</td>
                                    <td class="cell"><span class="cell-data">16 Oct</span><span class="note">03:16 AM</span></td>
                                    <td class="cell"><span class="badge bg-warning">Pending</span></td>
                                    <td class="cell">$96.20</td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Voir</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Modif</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Supr</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->		
            </div><!--//app-card-->
        </div><!--//tab-pane-->
        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">N° Ticket</th>
                                    <th class="cell">Immatriculation</th>
                                    <th class="cell">Contact</th>
                                    <th class="cell">Date</th>
                                    <th class="cell">Status</th>
                                    <th class="cell">Durée</th>
                                    <th class="cell "></th>
                                    <th class="cell ">Actions</th>
                                    <th class="cell "></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td class="cell">#15342</td>
                                    <td class="cell"><span class="truncate">Justo feugiat neque</span></td>
                                    <td class="cell">Reina Brooks</td>
                                    <td class="cell"><span class="cell-data">12 Oct</span><span class="note">04:23 PM</span></td>
                                    <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                    <td class="cell">$59.00</td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Voir</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Modif</a></td>
                                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Supr</a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div><!--//table-responsive-->
                </div><!--//app-card-body-->		
            </div><!--//app-card-->
        </div><!--//tab-pane-->
    </div><!--//tab-content-->

</div><!--//container-fluid-->
@endsection