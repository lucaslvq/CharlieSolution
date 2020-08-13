<form action="{{ route('customers.search') }} " class="d-flex justify-content-center mr-2">
    <div class="form-group mb-0 mr-1">
        <input type="text" name="q" class="form-control" placeholder="Vous cherchez un client ?">
    </div>
    <button type="submit" class="btn btn-info">Rechercher <i class="fa fa-search" aria-hidden="true"></i></button>
</form>