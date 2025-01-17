<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Brushwood
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20131025

-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>О клиенте {{ $client->name }} </title>
    <meta name="description" content="О клиенте {{ $client->name }} "/>
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700"
          rel="stylesheet"/>
    <link href="/css/default.css" rel="stylesheet"/>
    <link href="/css/fonts.css" rel="stylesheet"/>
    <link href="/css/app.css" rel="stylesheet"/>
</head>

<body>
@extends ('layout')
@section('content')
    <div id="page-wrapper">{{ $client->name }}</div>
    <div id="wrapper">
	<article class="prose lg:prose-xl p-2 m-3 bg-indigo-200 rounded">
		 {{ $client->about}}
	</article>
        <div>
            @foreach ($client->tags as $tag)
                <a href="{{ route('clients.index', ['tag' => $tag->name ] ) }}"
                   class="bg-yellow-500 text-gray-100 m-2 p-2 w-1/6 rounded-lg">
                    {{ $tag->name }}
                </a>
            @endforeach
        </div>

        <div id="ctrl-buttons" class="ml-4">
<!--
            <button
                class="border border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-gray-800 rounded px-4 py-2">
                <a id="update" href="{{$client->id}}/edit" class="">Изменить</a>
						</button>

            <!--     Destroy client -->
            <form class="inline p-0 m-0" id="delete-form-{{$client->name}}"
                  action="{{ route('client.destroy', $client) }}"
                  method="POST">

									@csrf @method('DELETE')
									<button
											id="deleteClient"
											class="border border-red-500 text-red-500 hover:bg-red-500 hover:text-gray-200 rounded px-4 py-2"
											type="submit">Удалить клиента</button>
            </form>
-->
        </div>
    </div>
@endsection
</body>
