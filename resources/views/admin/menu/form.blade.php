<div class="form-group row" align="right" >
    <label  for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
    </div>
</div>
<div class="form-group row" align="right" >
    <label for="url" class="col-lg-3 col-form-label requerido">Url</label>
    <div class="col-lg-8">
      <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}" required/>
    </div>
</div>
<div class="form-group row" align="right" >
    <label for="icono" class="col-lg-3 col-form-label ">Icono</label>
    <div class="col-lg-8">
      <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}"/>
    </div>
</div>