@csrf
<div class="form-group">
    <label>Tipo de usuario</label>
    <input class="form-control" type="number"  name="type_usr"
        value="{{isset($user)? $user->type_usr : ''}}">
</div>

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="name" class="form-control"
           value="{{isset($user)? $user->name : ''}}">
</div>

<div class="form-group">
    <label>Correo</label>
    <input type="email" name="email" class="form-control" value=" {{isset($user)? $user->email : ''}}">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="pass" class="form-control">
</div>


