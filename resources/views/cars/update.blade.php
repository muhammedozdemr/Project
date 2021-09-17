@extends('layouts.master')
@section('title') Edit The Car @endsection
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
                            <h3 class="card-title">{{trans('translate.Edit The Car')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('cars.update',$entry->car_id)}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Client Name')}}</label>
                                    <select class="form-control" name="client_id">
                                        @foreach($clients as $client)
                                            <option value="{{ $client->client_id }}" {{ ($client->client_id) ? 'selected': '' }}>{{$client->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Licence Number')}}</label>
                                    <input type="text" name="licence_number" value="{{$entry->licence_number}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Chassis Number')}}</label>
                                    <input type="text" name="chassis_number" value="{{$entry->chassis_number}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Year')}}</label>
                                    <input type="text" name="year" value="{{$entry->year}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Model')}}</label>
                                    <input type="text" name="model" value="{{$entry->model}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Manufacturer')}}</label>
                                    <input type="text" name="manufacturer" value="{{$entry->manufacturer}}"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{trans('translate.Registration Date')}}</label>
                                    <input type="date" name="registration_date" value="{{$entry->registration_date}}"
                                           class="form-control">
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
