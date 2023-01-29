@extends('crud.main')

@section('main-content')

<div class="container" style="text-align: center;">
    <div class="jumbotron">
        <h1>Contacts List</h1>
        <h3>Add Your Contacts here</h3>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3>Create New Contact</h3>
        </div>
        <div class="panel-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('phonebook.store') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Phone no.1</label>
                            <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile1" id="email1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Phone no.2</label>
                            <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile2" id="email2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Phone no.3</label>
                            <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile3" id="email3">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Address</label>
                            <input type="text" class="form-control" placeholder="Enter your address" name="address" id="address">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">E-mail</label>
                            <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Links</label>
                            <input type="text" class="form-control" placeholder="Enter your social links" name="links" id="links">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Notes</label>
                            <input type="text" class="form-control" placeholder="Enter your notes" name="notes" id="notes">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Company</label>
                            <input type="text" class="form-control" placeholder="Enter your company" name="company" id="company">
                        </div>
                    </div>
                </div>
                <form method="get" action="{{'student'}}">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="Back" class="btn btn-primary">
                </form>
                <a href="{{ route('phonebook.index') }}" class="btn btn-danger">Back</a>

                </button>
            </form>
        </div>
    </div>  
</div>

@endsection