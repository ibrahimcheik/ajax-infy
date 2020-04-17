<div class="form-group">
  <select id="select-person" class="form-control" name="select-person">
    <option value="0">Amasou Moussa 0</option>
    <option value="1">Ibrahim Issaka 1</option>
    <option value="2">Mahamadou Song 2</option>
    <option value="3">Hafizatou 3</option>
    <option value="4">test personne 4</option>
    <option value="5">person 5</option>
    <option value="6">person 6</option>
    <option value="7">person 7</option>
    <option value="8">person 8</option>

  </select>
</div>
<div class="form-group">
  <input id="field" class="form-control" type="text" name="" value="">
</div>
<div class="form-group">
  <input id="field" class="form-control" type="text" name="" value="">
</div>
<div class="form-group">
  <input type="radio" name="foo" value="Yes" /> Yes
  <input type="radio" name="foo" value="No" /> No
  <input type="radio" name="foo" value="Maybe" /> Maybe
</div>
<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', 'Age:') !!}
    {!! Form::number('age', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('people.index') }}" class="btn btn-secondary">Cancel</a>
</div>
