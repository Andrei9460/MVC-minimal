<h1>Шаблон блейд блог</h1>

@foreach($Blog as $post)
    <p>
        <b>{{ $post['ID'] }}</b><br>
        {{ $post['NAME'] }}
    </p>
    @endforeach