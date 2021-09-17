@if(session()->has('mesaj'))

    <div class="container-fluid">
        <div style="text-align: center; font-weight: bold;" class="alert alert-{{session('mesaj_tur')}} alert-dismissible" role="alert">{{session('mesaj')}}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        </div>
    </div>

@endif

