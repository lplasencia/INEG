@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div style="align-items: center; justify-content: center;" class="row">
    <!-- left column -->
    <div class="col-md-10">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">PERFIL DE USUARIO</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('profile.update',$profile->id) }}">
          @method('put') @csrf
          <div class="card-body">
            <div style="align-items: center; justify-content: center;" class="row mt-1">
              <div class="col-md-5">
                <label for="nombre">Nombres :</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{$profile->nombre}}" placeholder="Ingrese Nombres">
                @error('nombre')
                  <div class="form-control-feedback" style="color:red">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <label for="apellido">Apellidos :</label>
                <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{$profile->apellido}}" placeholder="Ingrese Apellidos">
                @error('apellido')
                  <div class="form-control-feedback" style="color:red">{{ $message }}</div>
                @enderror
              </div>
            </div>
            
            <div style="align-items: center; justify-content: center;" class="row mt-4">
              <div class="col-md-7">
                <label for="direccion">Direccion :</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{$profile->direccion}}" placeholder="Ingrese Direccion">
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                <label for="telefono">Telefono :</label>
                <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" value="{{$profile->telefono}}" placeholder="Ingrese Telefono">
                @error('telefono')
                  <div class="form-control-feedback" style="color:red">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div style="align-items: center; justify-content: center;" class="row mt-4">
              <div class="col-md-11">
                <label for="exampleInputFile">Foto :</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Eliga Archivo</label>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- /.card-body -->

          <div style="align-items: center; justify-content: center;" class="card-footer">
            <div class="row mt-1">
              <div style="text-align: center;" class="col-md-12">
                <a type="button" href="{{ route('cancelarProfile') }}" class="btn btn-danger btn">Cancelar</a>
                <button style="margin-left: 50px" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (left) -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection