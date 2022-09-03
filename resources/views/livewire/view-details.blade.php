


<div>
    <title>j-SENDMAIL</title>
    <form method="POST" wire:submit.prevent="update">
        <div class="mt-3">
        
       </div>
       <br>
       <br>
    <div class="row">
        <div class="col-12 col-xl-8">
            @if($showSavedAlert)
            <div class="alert alert-success" role="alert">
              
            </div>
            @endif
            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">General information</h2>
                <br>
 
                <br>
                
                    
                 
                <form wire:submit.prevent=" mount" action="#" method="POST"> 
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">Nom</label>
                                <input wire:model="state.first_name" class="form-control" id="first_name" type="text"
                                    placeholder="Enter your first name" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Prénom</label>
                                <input wire:model="state.last_name" class="form-control" id="last_name" type="text"
                                    placeholder="Also your last name" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input wire:model="state.email" class="form-control" id="email" type="email"
                                    placeholder="name@company.com" disabled>
                            </div>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div>   
                           
                           <button wire:click.prevent="cancel()" class="btn btn-danger">retour</button>
                       </div>
                     
                         
                    </form>    

                    </div>                     
                </div>



             <div class="col-12 col-xl-4">
                <div class="row">

                    <div class="col-12 mb-4">

                       </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12" style="float: center">

                        <div class="card card-body border-0 shadow"style="float: right;margin-left: 600px;">
                            <h2 class="h5 mb-4" >Authorisation</h2>
                            <div class="d-flex align-items-right">
                                <div class="me-3">
                                    <!-- Avatar -->
                                </div>
<form>
                                <div class="file-field">
                                    <div class="d-flex justify-content-xl-center ms-xl-3">
                                        <div class="d-flex">
                                            <div class="d-md-block text-left">

                                                @foreach ( $per as $permission)
                                                <div class="form-check">

                                                 <input class="form-check-input" type="checkbox" wire:model="permiss" value="{{$permission->id }}"{{$permission->id? 'checked':''}}  checked>

                                                    {{$permission->permission_libele }}
                                                </label>


                                                 {{-- <input class="form-check-input" type="checkbox" name="authorisation[]" value="true"
                                                 < class="form-check-label" for="flexCheckChecked">
                                                     {{$permission->permission_libele }} --}}

                                               </div>

                                                @endforeach
                                            </form>
                                             <div class="mb-3"><button class="btn btn-primary" type="submit"value="Ok"  wire:click.prevent="inserpermission">envoyer</button>

                                           <div class="mb-3"style="float: right"> <button wire:click.prevent="deletepermission" class="btn btn-danger">supprimer</button></div>
                                               <!--permission: {{var_export($permiss)}}--> 

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
    </div>

