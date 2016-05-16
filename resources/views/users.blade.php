@extends('layouts.default')

@section('content')

<section id="inscription" class="content-section noselect" ng-controller="RegistrationController">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
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
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telephone }}</td>
                                    <td>{{ $user->activite }}</td>
                                    <td>{{ $user->school }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <p class="text-center">
                            {{ $users->links() }}
                        </p>
                </div>

            </div>
        </div>
    </div>
</section>

@stop