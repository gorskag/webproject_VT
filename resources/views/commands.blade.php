@extends('layouts.static')

@section('header')
    <link rel="stylesheet" href="../css/commands.css">
    <title>Commands ⏐ Rizumu</title>
@endsection

@section('content')
@if(!empty($commandData))
<div class="container">
    <div class="row bg-light border border-primary rounded p-4">
        <div class="content text-dark">
            <div class="content-header">
                <h1>Commands</h1>
                <p class="command-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repudiandae rem iste suscipit esse, neque dolore saepe. Praesentium odio, quae aliquam quibusdam libero dolores qui blanditiis, aut quam saepe ipsum?</p>
            </div>
            <div class="content-body table-responsive-md"> 
                <h2>Command list</h1>

                <table class="table text-center text-dark align-middle">
                    <thead class="table-primary text-dark table-bordered">
                        <tr>
                            <th class="py-2">Command</th>
                            <th class="py-2">Shortcuts</th>
                            <th class="py-2">Parameters</th>
                            <th class="py-2">Description</th>
                            <th class="rootUser py-2">Operations</th>
                        </tr>
                    </thead>
                    <tbody class="table-bordered table-hover">
                        @foreach($commandData as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->shortcut}}</td>
                            <td>{{$row->parameters}}</td>
                            <td>{{$row->description}}</td>
                            <td class="rootUser">
                                <a href="/commands-edit/{{$row->id}}" class="btn bg-light text-dark btn-sm"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
    <h3 class="text-dark">Data not found</h3>
@endif
@endsection

@section('scripts')
<script>
    $(function() {
        $('.rootUser')
            .hide();
    });
</script>
@endsection