@props(["comentario"])
<div>
    <h2><strong>{{ $comentario->user->name }}</strong> dijo:</h2>
    <p>{{ $comentario->contenido }}</p>
</div>