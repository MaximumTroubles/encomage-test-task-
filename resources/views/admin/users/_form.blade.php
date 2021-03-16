<div class="form-group">
    {!! Form::label('first_name', 'Ввдите имя:' ) !!}
    {!! Form::text('first_name', null, ['class'=>'form-control' . ($errors->has('first_name') ? ' is-invalid' : '')]) !!}
    @error('first_name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('last_name', 'Ввдите фамиилию:' ) !!}
    {!! Form::text('last_name', null, ['class'=>'form-control' . ($errors->has('last_name') ? ' is-invalid' : '')]) !!}
    @error('last_name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('email', 'E-mail :' ) !!}
    {!! Form::tel('email', null, ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>




<button class="btn btn-success">Save</button>
