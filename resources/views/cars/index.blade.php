@extends('layouts.master')
@section('title') Cars @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partials.error')
                    @include('layouts.partials.alert')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{trans('translate.Cars Table')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{trans('translate.Client Name')}}</th>
                                    <th>{{trans('translate.Client Surname')}}</th>
                                    <th>{{trans('translate.Licence Number')}}</th>
                                    <th>{{trans('translate.Chassis Number')}}</th>
                                    <th>{{trans('translate.Year')}}</th>
                                    <th>{{trans('translate.Model')}}</th>
                                    <th>{{trans('translate.Manufacturer')}}</th>
                                    <th>{{trans('translate.Registration Date')}}</th>
                                    <th>
                                        <a href="{{route('cars.new')}}" class="btn btn-outline-secondary btn-sm edit"
                                           title="new">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{$car->client->name}}</td>
                                        <td>{{$car->client->surname}}</td>
                                        <td>{{$car->licence_number}}</td>
                                        <td>{{$car->chassis_number}}</td>
                                        <td>{{$car->year}}</td>
                                        <td>{{$car->model}}</td>
                                        <td>{{$car->manufacturer}}</td>
                                        <td>{{$car->registration_date}}</td>
                                        <td colspan="2" style="width: 100px">
                                            <a href="{{route('cars.update',$car['car_id'])}}"
                                               class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="{{route('cars.delete',$car['car_id'])}}"
                                               class="btn btn-outline-secondary btn-sm trash" title="Trash">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            {{$cars->links()}}
        </div><!-- /.container-fluid -->
    </section>
@endsection
