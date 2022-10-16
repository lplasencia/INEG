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
        <form>
          <div class="card-body">
            <div style="align-items: center; justify-content: center;" class="row mt-1">
              <div class="col-md-5">
                <label for="nombre">Nombres :</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$profile->nombre}}" placeholder="Ingrese Nombres">
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <label for="apellido">Apellidos :</label>
                <input type="text" class="form-control" id="apellido" name="nombre" value="{{$profile->apellido}}" placeholder="Ingrese Apellidos">
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
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$profile->telefono}}" placeholder="Ingrese Telefono">
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

          <div class="card-footer">
            <div style="align-items: center; justify-content: center;" class="row mt-1">
              <a type="button" href="{{ route('cancelarProfile') }}" class="btn btn-danger btn">Cancelar</a>
              <button style="margin-left: 50px" type="submit" class="btn btn-primary">Submit</button>
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