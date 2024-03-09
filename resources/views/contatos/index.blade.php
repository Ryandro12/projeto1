<div>
    <h3> Essa é a Nova visão</h3>
    @foreach ($contatos as $contatos)
        <p>{{ $contatos['tema'] }}</p>
        <p>{{ $contatos['titulo'] }}</p>
    @endforeach
</div>
