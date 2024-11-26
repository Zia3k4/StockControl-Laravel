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
              <li class="breadcrumb-item active">Create</li>
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
                <h5 class="card-title">Crie novo Produto</h5><br>

                <!-- form start -->
              <form role="form" action="{{route('Produtos.store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="codigodoproduto">Id do Produto</label>
                    <input type="text" id=codigo class="form-control" placeholder="ID do Produto" name="codigo" required >
                </div>
                  <!--CRIAR O ID DO CODIGO NOS OUTROS ARQUIVO >

                <-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- /.form end   -->
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
           
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  
@endsection