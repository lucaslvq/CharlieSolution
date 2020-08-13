@extends('customers.layout')
@section('content')

<a class="icon_return" href="{{ route('customers.index')}}"><i class="fas fa-arrow-circle-left"></i> RETOUR</a>
<!-- START -->
<div class="box">
    <h2 class="text-center mb-5">Matériel du client</h2>
    <div class="container">
        <div class="row">
            @foreach($data as $material)
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="fas fa-tools fa-3x mb-2" aria-hidden="true"></i>
                    <div class="title">
                        <h4>Matériel n°{{ $material->id_mat }}</h4>
                    </div>
                    <a href="{{ route('customers.edit', $material->id_mat)}}" class="btn btn-info d-flex justify-content-center mt-3">Modifier</a>
                    <form action="{{ route('customers.destroy', $material->id_mat)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger justify-content-center mt-3" type="submit">Supprimer</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- END -->
@endsection