@csrf
<div class="form-group">
    <label>Nombre</label>
    <input class="form-control" type="text"  name="name"
        value="{{isset($client)? $client->name : ''}}">
</div>

<div class="form-group">
    <label>Direccion</label>
    <textarea name="direction" class="form-control">
      {{isset($client)? $client->direction : ''}}</textarea>
</div>

<div class="form-group">
    <label>Telefono</label>
    <input type="tel" name="phone" class="form-control" value=" {{isset($client)? $client->phone : ''}}">
</div>



