@extends('layouts.layoutbase')
@section('body')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="" method="POST" accept-charset="utf-8">
          <legend>Casilla: </legend>
          <div class="form-group">
            <input type="number" name="mac" value="">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
@stop