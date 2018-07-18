<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('title', 'Título', ['class' => 'control-label']) !!}
            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('description', 'Descrição')!!}
        {!! Form::textarea('description',$post->description,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}
    </div>
    
    
</div>
<div class="modal-footer">
    {!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
</div>