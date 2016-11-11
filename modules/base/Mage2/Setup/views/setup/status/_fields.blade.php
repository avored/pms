
{!! Form::text('name', 'Status Name',['autofocus' => true,'class' => 'form-control']) !!}
{!! Form::select('belongs_to', 'Status Belongs To',$statusBelongsToOptions) !!}