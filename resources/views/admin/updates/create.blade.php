@csrf
<input type="hidden" name="fk_id_work" value="{{$work}}">
<div class="form-group">
    <label>Reparacion</label>
    <select name="fk_id_repair" class="form-control" >
        @foreach(App\http\Models\repairs::all() as $repair)
            <option value="{{$repair->id}}" >{{$repair->description.' '.$repair->cost}}</option>
        @endforeach
    </select>
</div>
@include('admin.updates._form')

