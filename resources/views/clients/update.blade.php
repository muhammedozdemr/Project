@extends('layouts.master')
@section('title') Anasayfa @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-10 offset-1">
                    @include('layouts.partials.error')
                    @include('layouts.partials.alert')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{trans('translate.Edit Customer Information')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('clients.update',$entry->client_id)}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Name')}}</label>
                                    <input type="text" name="name" value="{{$entry->name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Surname')}}</label>
                                    <input type="text" name="surname" value="{{$entry->surname}}" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">{{trans('translate.Submit')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
