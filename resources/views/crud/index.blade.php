@extends('crud.main')

@section('main-content')

<div class="container" >
    <div class="jumbotron">
        <h1>Contacts List</h1>
        <h3>Add Your Contacts here</h3>
    </div>
    @if(Session::has('message'))
    <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button type="Add New" class="btn btn-primary"> <a href="{{ route('phonebook.create') }}" data-toggle="modal" data-target="#addModal" class="btn btn-default btn-sm" style="text-decoration: none;"><i class="glyphicon glyphicon-plus"></i> Add New</a></button>
        </div>
        
        <div class="container-new" ><div class="item">
            <table class="">
                <thead>
                    <tr>
                        <th>P_key</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>E-mail</th>
                        <th>Links</th>
                        <th>Notes</th>
                        <th>Company</th>
                        <th style="width:200px;">Action</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($students as $student )
                    <tr>
                        <td>{{ $student->id }}</td>
                        {{-- @foreach($phone as $att) --}}
                            {{-- @foreach($att as $pht) --}}
                                {{-- <td>{{ $pht->mobile1 }}</td> --}}
                                {{-- <td>{{ $pht->mobile2 }}</td> --}}
                                {{-- <td>{{ $pht->mobile3 }}</td> --}}
                            {{-- @endforeach --}}
                        {{-- @endforeach --}}
                        {{-- <td>{{ $phone->firstwhere('mobile1',)}}</td> --}}
                        {{-- @for ($i = 0; $i < 3; $i++) --}}
                        {{-- @foreach ($phone as $user) --}}
                            {{-- <td>{{ $phone[0]->mobile1 }}</td> --}}
                            {{-- <td>{{ $phone[0]->mobile2 }}</td> --}}
                            {{-- <td>{{ $phone[0]->mobile3 }}</td> --}}
                        {{-- <td>{{ $phone[$i]->mobile2 }}</td> --}}
                        {{-- <td>{{ $phone[$i]->mobile3 }}</td> --}}
                        {{-- @endforeach --}}
                        {{-- @endfor --}}
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->links }}</td>
                        <td>{{ $student->notes }}</td>
                        <td>{{ $student->company }}</td>
                        <td>
                            <form method="post" action="{{ route('phonebook.destroy',$student->id) }}" class="delete_form" >
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="Edit" class="btn btn-primary">
                                    <a href="{{ route('phonebook.edit',$student->id) }}" class="btn btn-xs btn-primary" style="text-decoration: none;">Edit</a>
                                </button>

                                <button type="View" class="btn btn-primary">
                                    <a href="{{ route('phonebook.show',$student->id) }}" class="btn btn-xs btn-success" style="text-decoration: none;">View</a>
                                </button>


                                <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are You Sure? Want to Delete It.');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="pull-right">
                {{ $students->links() }}
                {{-- {{ $phones->links() }} --}}
            </p>
            <table class="">
                <thead>
                    <tr>
                        <th>P_key</th>
                        <th>f_key</th>
                        <th>Phone</th>
                        {{-- <th>Phone</th> --}}
                        {{-- <th>Phone</th> --}}
                    </tr>
                </thead>
                <tbody >
                    
                        {{-- @foreach($phone as $att) --}}
                            {{-- @foreach($att as $pht) --}}
                                {{-- <td>{{ $pht->mobile1 }}</td> --}}
                                {{-- <td>{{ $pht->mobile2 }}</td> --}}
                                {{-- <td>{{ $pht->mobile3 }}</td> --}}  
                            {{-- @endforeach --}}
                        {{-- @endforeach --}}
                        {{-- <td>{{ $phone->firstwhere('mobile1',)}}</td> --}}
                        {{-- @for ($i = 0; $i < 3; $i++) --}}
                    @foreach ($phone as $phn )
                    <tr>
                            <td>{{ $phn->id }}</td>
                            <td>{{ $phn->st_id }}</td>
                            <td>{{ $phn->mobile }}</td>
                            {{-- <td>{{ $phn->mobile2 }}</td> --}}
                            {{-- <td>{{ $phn->mobile3 }}</td> --}}
                    </tr>
                    @endforeach

                        {{-- <td>{{ $phone[$i]->mobile2 }}</td> --}}
                        {{-- <td>{{ $phone[$i]->mobile3 }}</td> --}}
                        {{-- @endfor --}}
                        
                </tbody>
            </table>
        </div></div>
</div>


@endsection