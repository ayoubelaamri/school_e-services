@extends('layouts.app2')

@section('content')

<br></br>
    <br></br>
    <br></br>
    <div class="container">
        <h1>Ajouter une filiere :</h1>
        <form method='POST' action="{{ url('save_fil') }}">

            {{ csrf_field() }}

            Departement : <select class="form-control" id="input2" name="departement" required>
                        <option selected hidden="">choisir une departement</option>
                        @foreach($dep as $element)
                            <option>{{ $element->titre }}</option>
                        @endforeach
            </select></br>
            Nom de la filiere : <input type="text" name="titre" class="form-control mb-2 mr-sm-2" />
            Chef de la filiere : <select class="form-control" id="input2" name="chef" required>
                        <option selected hidden>choisir un chef de filiere</option>
                        @foreach($prof as $element)
                            <option>{{ $element->name }}</option>
                        @endforeach
            </select></br>
            Description : <textarea class="form-control" id="input3" placeholder="Entre la description de la departement" name="description" rows="4"></textarea></br>
            <input type="submit" name="submit" value="Ajouter" class="btn btn-primary"/>
        </form>
    </div>
    <br></br>
    <br></br>

    @endsection