@csrf
<div class="form-group">
    <label>Fecha Estimada</label>
    <input class="form-control" type="text" id="datepicker" name="estimated">
</div>

<div class="form-group">
    <label>CLiente</label>
    <select name="fk_id_client">
        @foreach(App\http\Models\Client::asMap() as $key=>$client)
            <option value="{{$key}}">{{$client}}</option>
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


