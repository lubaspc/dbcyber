@csrf
<div class="form-group">
    <label>Costo Final (opcional)</label>
    <input type="number" name="budget" class="form-control"
           value="{{isset($up)? $updat->budget : ''}}">
</div>

<div class="form-group">
    <label>Descipcion</label>
    <input type="text" name="description" class="form-control"
           value="{{isset($up)? $updat->description : ''}}">
</div>


