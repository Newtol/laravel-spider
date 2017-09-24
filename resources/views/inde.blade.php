{{ Form::open() }}
    <p>
        查询学号:{{ Form::text('text') }}
    </p>
    <p>
        提交：{{ Form::submit('submit') }}
    </p>
{{ Form::close() }}