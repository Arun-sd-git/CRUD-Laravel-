@extends('crud.main')

@section('main-content')

<div class="container" style="text-align: center;">
    <div class="jumbotron">
        <h1>Contacts List</h1>
        <p>Add Your Contacts here</p>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            Edit Contact
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
            {{-- ++++++++++++++++++++++++++++++++++++++ --}}
            <form action="{{ route('phonebook.update',$student->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Phone no.</label>
                            <input type="text" value="{{ $phone->mobile }}" class="form-control" placeholder="Mobile Number" name="mobile" id="email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Phone no.</label>
                            <input type="text" value="{{ $phone->mobile }}" class="form-control" placeholder="Mobile Number" name="mobile" id="email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mobile">Phone no.</label>
                            <input type="text" value="{{ $phone->mobile }}" class="form-control" placeholder="Mobile Number" name="mobile" id="email">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Name</label>
                            <input type="text" value="{{ $student->name }}" class="form-control" placeholder="Contacts Name" name="name" id="name">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Address</label>
                            <input type="text" value="{{ $student->address }}" class="form-control" placeholder="Contacts address" name="address" id="address">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">E-mail</label>
                            <input type="email" value="{{ $student->email }}" class="form-control" placeholder="Contacts email" name="email" id="email">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Links</label>
                            <input type="text" value="{{ $student->links }}" class="form-control" placeholder="Contacts links" name="links" id="links">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Notes</label>
                            <input type="text" value="{{ $student->notes }}" class="form-control" placeholder="Contacts notes" name="notes" id="notes">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="mobile">Company</label>
                            <input type="text" value="{{ $student->company }}" class="form-control" placeholder="Contacts company" name="company" id="company">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <button type="Back" class="btn btn-success"> <a href="{{ route('phonebook.index') }}" class="btn btn-danger" style="text-decoration: none;">Back</a>
                </button>
            </form>
        </div>
    </div>
</div>

@endsection