

<!-- Modal -->
<div id="personModal" class="modal fade" role="dialog">
  <div class="modal-dialog" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        {{-- <h4 class="modal-title">Add Record of person </h4> --}}
      </div>
      <div class="modal-body">
        <form class="form" id="form-person" name="form-personne" action="" method="post">
          <!-- Nom Field -->
          <div class="form-group col-sm-6">
              {{-- {!! Form::label('nom', 'Nom:') !!} --}}
              {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
          </div>

          <!-- Prenom Field -->
          <div class="form-group col-sm-6">
              {{-- {!! Form::label('prenom', 'Prenom:') !!} --}}
              {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'Prenom']) !!}
          </div>

          <!-- Age Field -->
          <div class="form-group col-sm-6">
              {{-- {!! Form::label('age', 'Age:') !!} --}}
              {!! Form::number('age', null, ['class' => 'form-control', 'placeholder' => 'Age']) !!}
          </div>

          <!-- Date Field -->
          <div class="form-group col-sm-6">
              {{-- {!! Form::label('date', 'Date:') !!} --}}
              {!! Form::text('date', null, ['class' => 'form-control','id'=>'date', 'placeholder' => 'Date de naissance']) !!}
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
              {{-- {!! Form::label('description', 'Description:') !!} --}}
              {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
          </div>

          <!-- Submit Field -->
          <div class="form-group col-sm-12">
              {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
              <a href="{{ route('people.index') }}" class="btn btn-secondary">Cancel</a>
          </div>
          
          @csrf
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
