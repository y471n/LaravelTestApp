			<div class="form-group">
				{!! Form::label('name', 'Name:') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
				
			<div class="form-group">
				{!! Form::label('name', 'Description:') !!}
				{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			</div>
		
			<div class="form-group">
				{!! Form::label('launched_on', 'Launched On:') !!}
				{!! Form::input('date', 'launched_on', $camera->launched_on->format('Y-m-d'), ['class' => 'form-control']) !!}
			</div>

            <div class="form-group">
                {!! Form::label('tag_list', 'Tags:') !!}
                {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
            </div>

			<!-- Temporarily -->
			{!! Form::hidden('category_id', 1) !!}

			<div class="form-group">
				{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control' ]) !!}
			</div>


            <script>

                $('#tag_list').select2({
                    placeholder: 'Choose a tag'
                });

            </script>
