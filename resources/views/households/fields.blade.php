{{ csrf_field() }}
<!-- Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department', 'Department:') !!}
    {!! Form::select('department', $department, null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix hidden-xs"></div>

<div class="clearfix hidden-xs"></div>
<!-- Last Name Field -->
<div class="form-group col-sm-6">
   {!! Form::label('last_name', 'Last Name:') !!}
   {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix hidden-xs"></div>

<div class="row">
    <div class="col-sm-12">
    @foreach ($people as $person)
        <!-- BEGIN PERSON -->
        <div class="form-group">
            <div class="col-sm-6 col-md-4">
                <h3>{!! $person->first_name !!} @if ($person->relationship)
                - {!! $relationship[$person->relationship] !!}
            @endif </h3>
                <div class='btn-group-vertical'>
                    @if ($person->email)
                    <a href="mailto:{!! $person->email !!}" class='btn btn-default'><i class="fa fa-envelope"></i> Email {!! $person->first_name !!}</a>
                    @endif
                    @if ($person->phone_number)
                    <a href="mailto:{!! $person->phone_number !!}" class='btn btn-default'><i class="fa fa-phone"></i> Call {!! $person->first_name !!}</a>
                    @endif
                    <a href="{{ url("/people/$person->id/edit") }}" class="btn btn-default"><i class="fa fa-pencil"></i> Edit {!! $person->first_name !!}</a>
                </div>
            </div>
        </div>
        <!-- END PERSON -->
    @endforeach
    </div>
</div>
<div class="col-sm-12">
    <div class="form-group"><a href="{{ url("/new-person/$household->id") }}" class="btn btn-success btn-lg"><i class="fa fa-plus"></i> Add Person</a></div>
</div>

<!-- Family Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
   {!! Form::label('family_notes', 'Family Notes:') !!}
   {!! Form::textarea('family_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Address1 Field -->
<div class="form-group col-sm-6">
   {!! Form::label('address1', 'Address1:') !!}
   {!! Form::text('address1', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix hidden-xs"></div>
<!-- Address2 Field -->
<div class="form-group col-sm-6">
   {!! Form::label('address2', 'Address2:') !!}
   {!! Form::text('address2', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix hidden-xs"></div>
<!-- City Field -->
<div class="form-group col-md-3 col-sm-6">
   {!! Form::label('city', 'City:') !!}
   {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix visible-sm"></div>
<!-- State Field -->
<div class="form-group col-md-1 col-sm-6">
   {!! Form::label('state', 'State:') !!}
   {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>
<div class="clearfix visible-sm"></div>
<!-- Zip Field -->
<div class="form-group col-md-2 col-sm-6">
   {!! Form::label('zip', 'Zip:') !!}
   {!! Form::text('zip', null, ['class' => 'form-control']) !!}
</div>

<!-- User Field -->
   {!! Form::hidden('user', $user) !!}
<div class="clearfix hidden-xs"></div>
<!-- Plan To Visit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan_to_visit', 'Plan To Visit:') !!}
    {!! Form::input('date', 'plan_to_visit', $household->plan_to_visit, ['class' => 'form-control datepicker']) !!}
</div>

<!-- Interested In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('interested_in', 'Interested In:') !!}
    {!! Form::text('interested_in', null, ['class' => 'form-control']) !!}
</div>

<!-- First Contacted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_contacted', 'First Contacted:') !!}
    {!! Form::input('date', 'first_contacted', $household->first_contacted, ['class' => 'form-control datepicker']) !!}
</div>

<!-- Point Of Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('point_of_contact', 'Point Of Contact:') !!}
    {!! Form::text('point_of_contact', null, ['class' => 'form-control']) !!}
</div>

<!-- User Field -->
    {!! Form::hidden('user', $user) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
   {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
   <a href="{!! route('households.index') !!}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')
    <script>
    $(function() {
        $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
@endsection

@section('styles')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
