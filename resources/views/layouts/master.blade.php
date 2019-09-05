<!DOCTYPE html>
<html>
<head>

  <title>{{ 'vecmocon technologies' }}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ ('practice.scss')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Roboto+Condensed&display=swap" rel="stylesheet">

</head>
<body style="background: #e6e6ff;">
@yield('content')
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>







{{-- 
<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Lora:700&display=swap" rel="stylesheet">
<style> .fontclass { font-family: 'Dosis', 'sans-serif'; } </style>

construct a string $fontstr
for every config('site.pref.layout.webfont') as $fontname@
  if not first font then $fontstr += '|'
  $fontstr += $fontname
  for every $weight in $fontname
    if this is first $weight then $fontstr += ':' else (if not the last weight) $fontstr += ','
  end for
end for

<link href..... {{ $fontstr }} ...>

$fontcss
$i=0
<style>
  for every font 
    $i++
    $fontcss += '.F'+ $i + '{' + config('site.pref.layout.webfont.font.family') + ';}'
  end for
 </style>

 --}}