@extends('layouts.app_admin')
@section('content')
    <body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">{{ __('List Bills') }}
            @if(session('mes_del'))
                <p class="alert alert-success">{{session('mes_del')}}</p>
            @endif
        </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <form action="{{Route('searchCategory')}}" class="d-none d-sm-inline form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" name="key" class="form-control bg-light small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('Payment') }}</th>
                            <th scope="col">{{ __('Total')}}</th>
                            <th scope="col">{{ __('Status') }}</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bills as $bill)
                            <tr>
                                <th scope="row">{!! $bill->id !!}</th>
                                <td>{!! $bill->payment !!}</td>
                                <td>{!! $bill->total !!}</td>
                                <td>{!! $bill->status !!}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection

