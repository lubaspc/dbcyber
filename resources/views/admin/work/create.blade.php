@csrf
<div class="form-group">
    <label>Fecha Estimada</label>
    <input class="form-control" type="date" id="datepicker" name="date_estimated">
</div>

<div class="form-group">
    <label>Cliente</label>
    <select name="fk_id_client" class="form-control" >
        @foreach(App\http\Models\Client::asMap() as $key=>$client)
            <option value="{{$key}}" >{{$client}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Modelo</label>
    <input type="text" name="brand" class="form-control">
</div>

<div class="form-group">
    <label>tipo de equipo</label>
    <input type="text" name="typeTeam" class="form-control">
</div>


<div class="form-group">
    <label>Reparacion</label>
    <select name="fk_id_repair" class="form-control" >
        @foreach(App\http\Models\repairs::all() as $repair)
            <option value="{{$repair->id}}" >{{$repair->description.' '.$repair->cost}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Costo Final (opcional)</label>
    <input type="number" name="budget" class="form-control">
</div>
