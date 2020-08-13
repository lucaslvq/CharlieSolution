@extends('customers.layout')
@section('content')

<h2 class="text-center mb-5">Modification du matériel</h2>
<br>
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br />
    @endif

    <form action="{{ route('customers.update', $material->id_mat) }}" method="POST" name="update_customers">

        @csrf
        @method('PATCH')

        <div class="row justify-content-md-center">
            <div class="col-xs-12 ">
                <!-- START : NAV -->
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-customers-info-tab" data-toggle="tab" href="#nav-customers-info" role="tab" aria-controls="nav-customers-info-tab" aria-selected="true">Information client</a>
                        <a class="nav-item nav-link" id="nav-info-chantier-tab" data-toggle="tab" href="#nav-info-chantier" role="tab" aria-controls="nav-info-chantier" aria-selected="false">Information sur le chantier</a>
                        <a class="nav-item nav-link" id="nav-info-material-tab" data-toggle="tab" href="#nav-info-material" role="tab" aria-controls="nav-info-material" aria-selected="false">Information sur le matériel</a>
                        <a class="nav-item nav-link" id="nav-other-tab" data-toggle="tab" href="#nav-other" role="tab" aria-controls="nav-other" aria-selected="false">Autres</a>
                    </div>
                </nav>
                <!-- END : NAV -->
                <!-- START : CONTENT TAB -->
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <!-- START : -->
                    <div class="tab-pane fade show active" id="nav-customers-info" role="tabpanel" aria-labelledby="nav-customers-info-tab">
                        <!-- INFO IDENTIFICATION -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Identification</strong>
                                <input type="text" name="identification" class="form-control" placeholder="Aucune identification n'a été renseigner." value="{{ $material->identification }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('identification') }}</span>
                            </div>
                        </div>
                        <!-- INFO AFFILIATE -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>ID Affilié</strong>
                                <input type="text" name="id_affiliate" class="form-control" placeholder="Aucune ID Affilié n'a été renseigner." value="{{ $material->id_affiliate }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('id_affiliate') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- START : -->
                    <div class="tab-pane fade" id="nav-info-chantier" role="tabpanel" aria-labelledby="nav-info-chantier-tab">
                        <!-- INFO ID CHANTIER -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Chantier numéro</strong>
                                <input type="text" name="id_chantier" class="form-control" placeholder="Aucun numéro de chantier n'a été renseigner." value="{{ $material->id_chantier }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('id_chantier') }}</span>
                            </div>
                        </div>
                        <!-- INFO ID SITE -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>ID Site</strong>
                                <input type="text" name="id_site" class="form-control" placeholder="Aucun id de site n'a été renseigner." value="{{ $material->id_site }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('id_site') }}</span>
                            </div>
                        </div>
                        <!-- INFO SITE -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Site</strong>
                                <input type="text" name="site" class="form-control" placeholder="Aucun nom de site n'a été renseigner." value="{{ $material->site }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('site') }}</span>
                            </div>
                        </div>
                        <!-- INFO REGION -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Région</strong>
                                <input type="text" name="region" class="form-control" placeholder="Aucune région n'a été renseigner." value="{{ $material->region }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('region') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- END : -->
                    <!-- START : -->
                    <div class="tab-pane fade" id="nav-info-material" role="tabpanel" aria-labelledby="nav-info-material-tab">
                        <!-- INFO ID MATERIAL -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Matériel numéro </strong>
                                <input type="text" name="id_mat" class="form-control" placeholder="Aucune identification n'a été renseigner." value="{{ $material->id_mat }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('id_mat') }}</span>
                            </div>
                        </div>
                        <!-- INFO SERIAL NUMBER -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Numéro de série</strong>
                                <input type="text" name="serial_number" class="form-control" placeholder="Aucun numéro de série n'a été renseigner." value="{{ $material->serial_number }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('serial_number') }}</span>
                            </div>
                        </div>
                        <!-- INFO LOST -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Matériel perdu ?</strong>
                                <input type="text" name="lost" class="form-control" placeholder="Aucune information sur le matériel perdu n'a été renseigner." value="{{ $material->lost }}">
                                <span class="text-danger">{{ $errors->first('lost') }}</span>
                            </div>
                        </div>
                        <!-- INFO STATUS -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Status</strong>
                                <input type="text" name="status" class="form-control" placeholder="Aucune information sur le status n'a été renseigner." value="{{ $material->status }}">
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>
                        <!-- INFO CONTROL -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Contrôle du matériel</strong>
                                <input type="text" name="control_place" class="form-control" placeholder="Aucun contrôle n'a été renseigner." value="{{ $material->control_place }}">
                                <span class="text-danger">{{ $errors->first('control_place') }}</span>
                            </div>
                        </div>
                        <!-- INFO COMPLETED -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Matériel complet </strong>
                                <input type="text" name="completed" class="form-control" placeholder="Aucune information sur le matériel n'a été renseigner." value="{{ $material->completed }}">
                                <span class="text-danger">{{ $errors->first('completed') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- END : -->
                    <!-- START : -->
                    <div class="tab-pane fade" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
                        <!-- INFO OBSERVATION -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Observation</strong>
                                <input type="text" name="observation" class="form-control" placeholder="Aucune observation n'a été renseigner." value="{{ $material->observation }}">
                                <span class="text-danger">{{ $errors->first('observation') }}</span>
                            </div>
                        </div>
                        <!-- INFO CREATED -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Crée le </strong>
                                <input type="text" name="created_at" class="form-control" placeholder="" value="{{ $material->created_at }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('created_at') }}</span>
                            </div>
                        </div>
                        <!-- INFO UPDATED -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Mis à jour le</strong>
                                <input type="text" name="updated_at" class="form-control" placeholder="" value="{{ $material->updated_at }}" disabled="disabled">
                                <span class="text-danger">{{ $errors->first('updated_at') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- END : -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-info">Modifier</button>
                    </div>
                </div>
                <!-- END : CONTENT TAB -->
            </div>
        </div>
    </form>
</div>
@endsection