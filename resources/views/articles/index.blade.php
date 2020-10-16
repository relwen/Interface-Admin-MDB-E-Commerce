@extends('layouts.app')

@section('content')


    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" target="_blank">ARTICLES</a>
            <span>/</span>
            <span>Nos articles</span>
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Rechercher" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form>

        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">


        </div>
        <!--Grid column-->


      </div>
      <!--Grid row-->








      <div class="wrapper-editor">

  <div class="block my-4">
    <div class="d-flex justify-content-center">
      <p class="h5 text-primary createShowP">0 colonne sélectionnée</p>
    </div>
  </div>

  <div class="row d-flex justify-content-center modalWrapper">
    <div class="modal fade addNewInputs" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="modalAdd"
      aria-hidden="true">



{{-- FORMULAIRE DE REMPLISSAGE --}}
      <form enctype="multipart/form-data" action="{{ route('article.store') }}" method="POST">

        @csrf
        

        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold text-primary ml-5">Ajouter un article</h4>
            <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <input type="text" id="inputName" name="libelle" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputName">Libellé article</label>
            </div>

            <select name="categorie" class="custom-select custom-select-sm">

              @foreach($categories as $data)
                <option value="{{ $data->id }}">{{ $data->libelle_categorie }}</option>
              @endforeach


            </select>

            <div class="md-form mb-5">
              <input type="text" id="inputPrice" name="price" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputAge">Prix unitaire</label>
            </div>


            <div class="md-form mb-5">
              <input type="text" id="inputStock" name="stock" class="form-control validate">
              <label data-error="wrong" data-success="right" for="inputStock">Quantité en stock</label>
            </div>


            <div class="file-field input-field">
                <div class="btn red">
                  <span class="white-text">PHOTO</span>
                  <input type="file" name="avatar">
                </div>
            </div>




          </div>
          <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
            <button type="submit" class="btn btn-outline-primary btn-block ">Ajouter article
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
          </div>
        </div>
      </div>



      </form>
      

    </div>

    <div class="text-center">
      <a href="" class="btn btn-info btn-rounded btn-sm" data-toggle="modal" data-target="#modalAdd">Add<i
          class="fas fa-plus-square ml-1"></i></a>
    </div>

    <div class="modal fade modalEditClass" id="modalEdit" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold text-secondary ml-5">Edit form</h4>
            <button type="button" class="close text-secondary" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <input type="text" id="formNameEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formNameEdit">Name</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formPositionEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formPositionEdit">Position</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formOfficeEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formOfficeEdit">Office</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formAgeEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formAgeEdit">Age</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formDateEdit" class="form-control datepicker">
              <label data-error="wrong" data-success="right" for="formDateEdit">Date</label>
            </div>

            <div class="md-form mb-5">
              <input type="text" id="formSalaryEdit" class="form-control validate">
              <label data-error="wrong" data-success="right" for="formSalaryEdit">Salary</label>
            </div>


          </div>
          <div class="modal-footer d-flex justify-content-center editInsideWrapper">
            <button class="btn btn-outline-secondary btn-block editInside" data-dismiss="modal">Edit
              form
              <i class="fas fa-paper-plane-o ml-1"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

{{--     <div class="text-center buttonEditWrapper">
      <button class="btn btn-info btn-rounded btn-sm buttonEdit" data-toggle="modal" data-target="#modalEdit"
        disabled>Edit<i class="fas fa-pencil-square-o ml-1"></i></a>
    </div>
 --}}
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDelete"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold ml-5 text-danger">Delete</h4>
            <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <p class="text-center h4">Voulez vous vraiment supprimer ?</p>

          </div>
          <div class="modal-footer d-flex justify-content-center deleteButtonsWrapper">
            <button type="button" class="btn btn-danger btnYesClass" id="btnYes" data-dismiss="modal">Oui</button>
            <button type="button" class="btn btn-primary btnNoClass" id="btnNo" data-dismiss="modal">Non</button>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="text-center">
      <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal" disabled data-target="#modalDelete"
        disabled>Delete<i class="fas fa-times ml-1"></i>
      </a>
    </div> --}}
  </div>

  <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">Libelle

        </th>
        <th class="th-sm">Catégorie

        </th>
        <th class="th-sm">Prix

        </th>
        <th class="th-sm">Stock

        </th>
        <th class="th-sm">Image
        </th>

        <th class="th-sm">Action
        </th>
        
      </tr>
    </thead>
    <tbody>

      @foreach($articles as $data)

          <tr>
                <td>{{ $data->libelle_article }}</td>
                <td>
                    {{ $data->categories->libelle_categorie }}

                </td>
                <td>{{ $data->prix_article }}</td>
                <td>{{ $data->stock_article }}</td>
                <td><img src="/img/{{ $data->img1_article }}" width="70px"></td>
                
                <td>
                  <a href="" class="btn btn-sucess btn-sm btn-rounded">Voir</a>
                  {{-- <a href="" class="btn btn-sucess btn-sm btn-rounded">Editer</a> --}}
                  {{-- <button class="btn btn-danger btn-sm btn-rounded buttonDelete" data-toggle="modal"  data-target="#modalDelete">Delete<i class="fas fa-times ml-1"></i></td> --}}



                                      <form id="destroy-form-{{$data->id}}" method="POST" action="{{route('article.destroy',$data->id)}}" style="display: inline-block;">

                                          <input type="hidden" name="id_article">

                                          @method('DELETE')
                                          @csrf
                                          <a class= "waves-effect waves-light btn btn-danger btn-sm btn-rounded" data-position="bottom" data-tooltip="Supprimer" onclick="if(confirm('Voulez vous supprimer cette classe?')) {event.preventDefault();
                                                   document.getElementById('destroy-form-{{$data->id_article}}').submit();}">Supprimer</a>
                                                        
                                      </form>


            </tr>

      @endforeach

    </tbody>

  </table>
</div>




@stop