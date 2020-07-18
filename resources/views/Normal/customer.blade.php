@extends('master')


@section('section-01')
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($customers as $key => $customer)


        <tr>
            <th scope="row">{{ $key++ }}</th>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td> <a href="{{ url('/edit/'.$customer->id).'/customer'}}" class="btn btn-default">edit</a>
              <a href="{{ url('/delete/'.$customer->id).'/customer'}}" class="btn btn-default">delete</a></td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
