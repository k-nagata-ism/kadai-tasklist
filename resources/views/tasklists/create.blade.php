     <div class="row">
        <div class="col-xs-6">
            
        {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
            
            
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
            <div class="form-group">
                {!! Form::label('content', 'メッセージ:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
                
            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>