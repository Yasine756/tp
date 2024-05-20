
    <h1>{{ $cours->title }}</h1>
    <p>{{ $cours->description }}</p>
    <p>Durée : {{ $cours->durée }} minutes</p>
    <p>Niveau de difficulté : {{ $cours->contenut}}</p>

    <h2>Leçons</h2>
    <ul>
        @foreach ($cours->lecons as $lecon)
            <li>
                <h3>{{ $lecon->title }}</h3>
                <p>{{ $lecon->description }}</p>
                
                <p>{{ $lecon->contenut}}</p>
            </li>
        @endforeach
    </ul>

    <h2>Évaluations</h2>
    <ul>
        @foreach ($cours->evaluations as $evaluation)
            <li>
                <h3>{{ $evaluation->title }}</h3>
                <p>{{ $evaluation->description }}</p>
                <p>Nombre de questions : {{ $evaluation->nbr_question }}</p>
            </li>
        @endforeach
    </ul>
