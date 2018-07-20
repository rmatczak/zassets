@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Choose panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                        <form action="http://zassets.devo/app/assets">
                            <input type="submit" value="Operator" class="btn btn-info form-control" />
                        </form>
                        </div>
                        <div class="col-md-6">
                        <form action="http://zassets.devo/admin/users">
                            <input type="submit" value="Administrator" class="btn btn-danger form-control" />
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
