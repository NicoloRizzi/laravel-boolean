@extends('layouts.main')

@section('main-content')
<div class="student-filter">
    <select name="filter" id="filter">
        {{-- PRINTING VALUE FROM ARRAY GENDER --}} 
        @foreach ($genders as $gender)
        <option value="{{ $gender }}">
            @if($gender == 'm') Uomo @elseif ($gender == 'f') Donna @else Tutti @endif
        </option>
        @endforeach
    </select>
</div>
<h1>I nostri ex studenti su LinkedIn</h1>
<div class="students">
    @foreach($students as $student)
<a href="{{ route('student.show', ['slug' => $student['slug']]) }}" class="student">
        <header>
        <img class="img-student" src="{{ $student['img'] }}" alt="{{ $student['nome'] }}">
            <div class="info">
            <h3>{{ $student['nome'] }} ({{ $student['eta']}} anni)</h3>
            <h4>
                Assunt{{ ($student['genere'] == 'm') ? 'o' : 'a' }} da {{ $student['azienda'] }} come {{$student['ruolo']}}
            </h4>
            </div>
        </header>
    <p>{{ $student['descrizione'] }}</p>
    </a>
    @endforeach
</div>

@include('shared.handlebars.student')

@endsection