<div>
    <title>Volt Laravel Dashboard - creation d'un courrier</title>
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Volt</a></li>
                <li class="breadcrumb-item active" aria-current="page">Forms</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">courrier</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
            <div>
                <a href="/documentation/components/forms/index.html" class="btn btn-outline-gray" target="_blank"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <form wire:submit.prevent="store" action="#" method="POST">
                            <div class="mb-4">
                                <label for="courrier_libele">libele du courrier</label>
                                <input type="text" class="form-control"  wire:model="state.courrier_libele"id="courrier_libele" aria-describedby="courrier_libele"placeholder="libele" required>
                                <small id="courrier_libele" class="form-text text-muted"></small>
                                @error('courrier_libele') <span class="text-danger">{{ $message }}</span> @enderror
                              </div>
                        </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="courrier_date_arrive">date d'arrivee</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </span>
                                 <input data-datepicker="" class="form-control" wire:model="state.courrier_date_arrive" id="courrier_date_arrive" type="date" placeholder="date arrivee" required>
                                 @error('courrier_date_arrive') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('emeteur-list') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    Ajouter
                                </a> <label class="my-1 me-2" for="emeteur_id">noms de l'emeteur</label>
                                <select class="form-select" wire:model="state.emeteur_id" id="emeteur_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($emet as $value)
                                    <option value="{{$value->id}}">{{$value->emeteur_noms}}</option>
                                    @endforeach
                                </select>
                                @error('emeteur_id') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div class="mb-3">
                                <a href="{{ route('live-table') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    Ajouter
                                </a> <label class="my-1 me-2" for="user_id">noms du destinataire</label>
                                <select class="form-select" wire:model="state.user_id" id="user_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                 @foreach ($dest as $value)
                                    <option value="{{$value->id}}">{{$value->first_name}}</option>
                                  @endforeach
                                </select>
                                @error('user_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <!-- Form -->
                            <div class="mb-3">
                                <a href="{{ route('emplacement-list') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                                    <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                    Ajouter
                                </a> <label class="my-1 me-2" for="emplacement_id">noms de l'emplacement</label>
                                <select class="form-select" wire:model="state.emplacement_id" id="emplacement_id" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach ($empla as $value)
                                    <option value="{{$value->id}}">{{$value->emplacement_noms}}</option>
                                    @endforeach
                                </select>
                                @error('emplacement_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 mb-lg-5">
                        <div class="col-lg-3 col-md-6">

                            </div>
                            <!-- Checkboxes -->
                        </form>
                        <div class="mb-3"><button class="btn btn-primary" type="submit"value="Ok"  wire:click.prevent="store">envoyer</button>
                        <!-- End of Form -->
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
