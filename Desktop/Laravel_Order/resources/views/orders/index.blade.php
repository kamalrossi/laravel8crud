@extends('base')

@section('main')
<div>
    <a style="margin: 19px;" href="{{ route('orders.create')}}" class="btn btn-primary">New order</a>
</div> 
<div class="row">
 
<div class="col-sm-12">
    <h1 class="display-3">Orders</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->first_name}} </td>
            <td>
                <a href="{{ route('orders.edit',$order->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('orders.destroy', $order->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<div class="col-sm-12">

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div>
@endif
</div>
</div>

@endsection