@extends('layouts.master')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Produtos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active"> Lista de Produtos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
        <div class="col-lg-6">
          
            <div class="card card-primary card-outline" method="post">
              <div class="card-body">
                <h5 class="card-title">Lista de Produtos</h5><br>
                <!--table of products -->
                <table class="table table-bordered">
                     <thead>

                     
                     <tr>
                    <th>#SL</th>
                    <th>#Name</th>
                    <th>#alterar</th>
                    </tr>
                    </table>
              </thead>
              <tbody>
                @if($produtos)
                @foreach($produtos as $key => $produto)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$produto->name ?? ''}}</td>
                    <td>alterar</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
           
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  
@endsection