@extends('layouts.default')

@section('content')

<section id="inscription" class="content-section noselect" ng-controller="RegistrationController">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div>
                    <h2 class="text-center"> Participants inscrits à l'événement</h2>

                            <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>E-mail</th>
                                    <th>Téléphone</th>
                                    <th>Secteur Activité</th>
                                    <th>Ecole Professionnelle ou Université</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="user in users">
                                    <td>@{{ user.firstname + ' ' + user.lastname }}</td>
                                </tr>
                            </tbody>
                        </table>
                </div>

            </div>
        </div>
    </div>
</section>

@stop