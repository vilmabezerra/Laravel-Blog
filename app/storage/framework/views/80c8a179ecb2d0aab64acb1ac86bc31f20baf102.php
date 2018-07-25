<!-- Form used to request Post Creation -->
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo Form::label('title', 'Título', ['class' => 'control-label']); ?>

            <?php echo Form::text('title',null,['class'=>'form-control']); ?>

        </div>
    </div>
    <div class="form-group col-md-12">
        <?php echo Form::label('description', 'Descrição'); ?>

        <?php echo Form::textarea('description',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]); ?>

    </div>
    
    
</div>
<div class="modal-footer">
    <?php echo Form::submit('Publicar', ['class'=>'btn btn-primary']); ?>

</div>