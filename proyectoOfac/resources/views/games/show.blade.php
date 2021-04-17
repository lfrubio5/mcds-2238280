@extends('layouts.app')

@section('title', 'Show Game')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('home') }}"><i class="fas fa-clipboard-list"></i> Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('games') }}"><i class="fas fa-gamepad"></i> Module Games</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-plus"></i> Add Game</li>
            </ol>
            </nav>
            <div class="card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-search"></i> 
                        Show Game
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Name:</th>
                            <td>{{ $game->name }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <img src="{{ asset($game->image) }}" width="180px" class="img-thumbnail rounded-circle">
                            </td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{ $game->description }}</td>
                        </tr>
                        <tr>
                            <th>Category:</th>
                            <td>{{ $categories->name }}</td>
                        </tr>
                        <tr>
                            <th>Important Game:</th>
                            <td>
                                @if($game->slider == 1 || $game->slider == 0)
                                <button class="btn btn-sm btn-danger">No</button>
                                @else
                                    <button class="btn  btn-sm btn-success">Yes</button>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>creator user:</th>
                            <td>{{ $user->fullname }}</td>
                        </tr>
                        <tr>
                            <th>Price:</th>
                            <td>{{ "$ ".$game->price }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection