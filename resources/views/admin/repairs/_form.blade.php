@csrf
<div class="form-group">
    <label>Duracion en horas</label>
    <input class="form-control" type="time"  name="duration"
           placeholder="00:00:00"
        value="{{isset($repair) && isset($up)? $repair->duration : ''}}">
</div>

<div class="form-group">
    <label>Costo</label>
    <input type="number" name="cost" class="form-control"
           value="{{isset($repair)  && isset($up)? $repair->cost : ''}}">
</div>

<div class="form-group">
    <label>Descripcion</label>
    <textarea name="description" class="form-control"> {{isset($repair)  && isset($up) ? $repair->description : ''}}</textarea>
</div>



