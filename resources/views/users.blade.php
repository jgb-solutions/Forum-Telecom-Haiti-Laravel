<div ng-controller="UsersController">
    <p>
        <button
            class="btn btn-info"
            data-toggle="modal"
            href='#users-modal'>
                <i class="fa fa-users"></i> Voir Les Participants
        </button>
    </p>
    <div class="modal fade" id="users-modal">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <button  ng-click="getUsers()">get them</button>
                    <h4 class="modal-title text-center">
                        Participants inscrits à l'événement
                    </h4>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" role="form">
                        <div class="form-group">
                            <input
                                type="search"
                                class="form-control"
                                placeholder="Tapez le nom du participant">
                        </div>
                    </form>

                    <p>On a rien trouvé pour ce nom.</p>

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
                <div class="modal-footer"  hidden="true">
                </div>
            </div>
        </div>
    </div>
</div>