@extends('layouts.app')


@section('content')


              <!--Modal Form Login with Avatar Demo-->
              <div class="modal fade" id="addCategorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                  <!--Content-->
                  <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header">
                      <img src="{{ asset('img/logo.png') }}" class="rounded-circle img-responsive"
                        alt="Avatar photo">
                    </div>
                    <!--Body-->
                    

                    <form action="{{ route('categorie.store') }} " method="POST">
                        @csrf

                        <div class="modal-body text-center mb-1">

                        <h5 class="mt-1 mb-2">Nouveau catégorie</h5>

                        <div class="md-form ml-0 mr-0">
                          <input type="text" type="text" name="categorie" id="form1" class="form-control ml-0">
                          <label for="form1" class="ml-0">Libellé catégorie</label>
                        </div>

                        <div class="text-center mt-4">
                          <button type="submit" class="btn btn-green">AJOUTER
                            <i class="fas fa-add-in-alt ml-1"></i>
                          </button>
                        </div>
                      </div>

                    </form>



                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!--Modal Form Login with Avatar Demo-->





<br><br><br><br>


                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCategorie">Ajouter
                    </button>

  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">No id

        </th>
        <th class="th-sm">Catégorie

        </th>

        <th class="th-sm">Action
        </th>
        
      </tr>
    </thead>
    <tbody>

      @foreach($categories as $data)

          <tr>
                <td>{{ $data->id_categorie }}</td>
                <td>{{ $data->libelle_categorie }}</td>
                
                <td>
                  <a href="" class="btn btn-sucess btn-sm btn-rounded">Voir</a>
                  <a href="" class="btn btn-sucess btn-sm btn-rounded">Editer</a>
                  {{-- <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal"  data-target="#modalDelete">Delete<i class="fas fa-times ml-1"></i></td> --}}


            </tr>

      @endforeach

    </tbody>

  </table>







@stop
