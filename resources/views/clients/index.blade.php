@extends('layouts.master')
@section('title') Clients @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-md-10 offset-1">
                    @include('layouts.partials.error')
                    @include('layouts.partials.alert')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{trans('translate.Clients Table')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{trans('translate.Name')}}</th>
                                    <th>{{trans('translate.Surname')}}</th>
                                    <th>{{trans('translate.Created At')}}</th>
                                    <th>
                                        <a href="{{route('clients.new')}}" class="btn btn-outline-secondary btn-sm edit" title="new">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->surname}}</td>
                                    <td>{{$client->created_at}}</td>
                                    <td colspan="2" style="width: 100px">
                                        <a href="{{route('clients.update',$client['client_id'])}}" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{route('clients.delete',$client['client_id'])}}" class="btn btn-outline-secondary btn-sm trash" title="Trash">
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
            {{$clients->links()}}
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
