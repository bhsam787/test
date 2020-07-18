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
            <td>
              <a href="{{ route('customer.show',$customer->id)}}" class="btn btn-danger">view</a>
              <a href="{{ route('customer.edit',$customer->id)}}" class="btn btn-success">edit</a>
              <form class="" action="{{ route('customer.destroy',$customer->id)}}" method="post" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-info">delete</button></td>
              </form>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
