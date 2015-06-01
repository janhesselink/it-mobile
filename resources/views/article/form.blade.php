<div class="form-group">
    {!! Form::label('name', 'Naam:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Prijs:') !!}
    {!! Form::input('number', 'price', '0', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('brand', 'Merk:') !!}
    {!! Form::text('brand', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Opslaan', ['class' => 'btn btn-primary form-control']) !!}
</div>