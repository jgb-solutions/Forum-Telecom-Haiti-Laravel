@extends('layouts.default')

@section('menu')

@stop

@section('title')
@stop

@section('content')

<section id="inscription" class="content-section noselect" ng-controller="RegistrationController">
    <div class="container">
        <h2 class="text-center"> Participants inscrits à l'événement</h2>
        <div class="row">
            <div class="col-sm-7">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Secteur Activité</th>
                                <th>Ecole Professionnelle ou Université</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->activite }}</td>
                                <td>{{ $user->school }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="text-center">
                        {{ $users->links() }}
                    </div>
            </div>
            <div class="col-sm-5" ng-controller="UsersController">
                <form>
                    <div class="form-group">
                        <input
                            type="search"
                            class="form-control"
                            placeholder="Tapez pour rechercher"
                            ng-model="name"
                            ng-change="search()">

                            <p class="text-center" ng-show="loading">
                                <br>
                                <i class="fa fa-gear fa-spin fa-3x"></i>
                            </p>
                    </div>
                </form>

                <table class="table table-hover" ng-hide="hide">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Secteur Activité</th>
                            <th>Ecole Profess. ou Uni.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="user in users">
                            <td>@{{ user.firstname }}</td>
                            <td>@{{ user.lastname }}</td>
                            <td>@{{ user.activite }}</td>
                            <td>@{{ user.school }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@stop