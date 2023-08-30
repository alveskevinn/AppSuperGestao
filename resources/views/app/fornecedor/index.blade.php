<h3>Fornecedores</h3>
{{-- Comentario para php --}}
@php

@endphp


@for($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        CNPJ: {{$fornecedores[$i]['cnpj']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        DDD: {{$fornecedores[$i]['ddd'] ?? 'Não informado'}}
        <hr>
        
@endfor
