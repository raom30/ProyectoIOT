@extends('layout.layout')

@section('users')
<div class="row">
    <div class="col-md-12 text-center">
    	<h1><i class="fas fa-users"></i> Configuración de Usuarios</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center table-responsive">
        <table class="table table-striped" data-toggle="dataTable" data-form="deleteForm">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Email</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->roles[0]->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                <form method="post" action="{{ url('cambiarRol') }}" enctype="multipart/form-data">
                @csrf 
            	  <div class="form-group row">
            	  	<div class="col-md-4">
                    <label for="rol">Cambiar Roles</label>
                   </div>
                   <div class="col-md-4"> 
                    <select class="form-control" id="rol" name="rol">
                     @foreach($roles as $role)
                      <option value="{{ $role->id }}">{{ $role->name }}</option>
                     @endforeach 
                    </select>
                    </div>
                    <input type="hidden" value="{{ $user->id }}" name="uid" id="uid" >
                  <div class="col-md-4">
                 	 <button type="submit" class="btn btn-primary"><i class="fas fa-exchange-alt"></i></button>
                  </div>
                  </div>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>    	
    </div>
</div>

@endsection