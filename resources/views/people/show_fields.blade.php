<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $person->nom }}</p>
</div>

<!-- Prenom Field -->
<div class="form-group">
    {!! Form::label('prenom', 'Prenom:') !!}
    <p>{{ $person->prenom }}</p>
</div>

<!-- Age Field -->
<div class="form-group">
    {!! Form::label('age', 'Age:') !!}
    <p>{{ $person->age }}</p>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{{ $person->date }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $person->description }}</p>
</div>

