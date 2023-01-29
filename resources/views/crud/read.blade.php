@extends('crud.main')

@section('main-content')

<div class="container" style="text-align: center;">
    <div class="jumbotron">
        <h1>Contacts List</h1>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            View contact Details
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?php 
                        $i=1;
                        ?>
                        @foreach($phone as $phn)
                        <label for="mobile">Phone no.{{$i++}}</label>
                        <input type="text" disabled value="{{$phn->mobile}}" class="form-control" placeholder="Enter mobile number" name="mobile1" id="email1">
                        <br>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="mobile">Name</label>
                        <input type="text" disabled value="{{ $student->name }}" class="form-control" placeholder="Enter your name" name="name" id="name">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="mobile">Address</label>
                        <input type="text" disabled value="{{ $student->address }}" class="form-control" placeholder="Enter your address" name="address" id="address">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="mobile">E-mail</label>
                        <input type="email" disabled value="{{ $student->email }}" class="form-control" placeholder="Enter your email" name="email" id="email">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="mobile">Links</label>
                        <input type="text" disabled value="{{ $student->links }}" class="form-control" placeholder="Enter your links" name="links" id="links">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="mobile">Notes</label>
                        <input type="text" disabled value="{{ $student->notes }}" class="form-control" placeholder="Enter your notes" name="notes" id="notes">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="mobile">Company</label>
                        <input type="text" disabled value="{{ $student->company }}" class="form-control" placeholder="Enter your company" name="company" id="company">
                    </div>
                </div>
            </div>
            <button type="Back" class="btn btn-primary">
            <a href="{{ route('phonebook.index') }}" class="btn btn-danger" style="text-decoration: none;">Back</a>

            </button>
        </div>
    </div>
</div>

@endsection