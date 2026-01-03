<!DOCTYPE html>
<html>
<head>
    <title>Perulangan Blade</title>
</head>
<body>

    <h2>1. Perulangan For (1 s.d 10)</h2>
    @for ($i = 1; $i <= 10; $i++)
        {{ $i }}<br>
    @endfor

    <hr>

    <h2>2. Perulangan While (1 s.d 10)</h2>
    @php
        $i = 1;
    @endphp

    @while ($i <= 10)
        {{ $i }}<br>
        @php $i++; @endphp
    @endwhile

    <hr>

    <h2>3. Perulangan Foreach (Nilai Mahasiswa)</h2>
    @foreach ($nilai as $n)
        Nilai: {{ $n }}<br>
    @endforeach

</body>
</html>
