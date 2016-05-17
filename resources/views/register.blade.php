<section id="inscription" class="content-section noselect" ng-controller="RegistrationController">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div ng-hide="doneProcessing">
                    <h2 class="text-center">S'inscrire au Forum <br>
                        <small><small>
                            <!-- <span>
                                @{{ registered }}
                            </span><br> -->
                            Uitilisez la forme pour vous inscrire.
                        </small></small>
                    </h2>

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <form
                                method="POST"
                                role="form" novalidate
                                name="regForm"
                                ng-submit="processRegistrationForm()"
                                class="regForm">
                                <div
                                    class="form-group"
                                    ng-class="{'has-error':regForm.firstname.$invalid && regForm.firstname.$touched, 'has-success':regForm.firstname.$valid}">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="firstname"
                                        placeholder="Prénom"
                                        ng-model="user.firstname"
                                        ng-required="true"
                                        ng-minlength="3"
                                        ng-focus="inputFocus">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.firstname.$invalid && regForm.firstname.$touched">
                                        Vous devez entrer votre prénom
                                    </div>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.firstname.$invalid &&
                                        regForm.firstname.$error.minlength">
                                        Votre prénom doit être supérieur à 3 caractères
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':regForm.lastname.$invalid && regForm.lastname.$touched, 'has-success':regForm.lastname.$valid}">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="lastname"
                                        placeholder="Votre nom"
                                        ng-model="user.lastname"
                                        ng-required="true"
                                        ng-minlength="3">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.lastname.$invalid && regForm.lastname.$touched">
                                        Vous devez entrer votre votre nom
                                    </div>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.lastname.$invalid &&
                                        regForm.lastname.$error.minlength">
                                        Votre nom doit être supérieur à 3 caractères
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':regForm.email.$invalid && regForm.email.$touched, 'has-success':regForm.email.$valid}">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="E-mail"
                                        ng-model="user.email"
                                        ng-required="true">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.email.$invalid && regForm.email.$touched">
                                        Vous devez entrer un e-mail valide
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':regForm.telephone.$invalid && regForm.telephone.$touched, 'has-success':regForm.telephone.$valid}">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="telephone"
                                        name="telephone"
                                        placeholder="Numéro de téléphone"
                                        ng-model="user.telephone"
                                        ng-required="true"
                                        ng-minlength="8">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.telephone.$invalid && regForm.telephone.$touched">
                                        Vous devez entrer un numéro de téléphone valide
                                    </div>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.telephone.$invalid &&
                                        regForm.telephone.$error.minlength">
                                        Votre numéro de téléphone doit être supérieur à 8 caractères
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':regForm.activite.$invalid && regForm.activite.$touched, 'has-success':regForm.activite.$valid}">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="activite"
                                        placeholder="Secteur d'activité"
                                        ng-model="user.activite">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.activite.$invalid && regForm.activite.$touched">
                                        Vous devez entrer votre secteur d'activité
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':regForm.school.$invalid && regForm.school.$touched, 'has-success':regForm.school.$valid}">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="school"
                                        placeholder="Ecole Professionnelle ou Université"
                                        ng-model="user.school">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.school.$invalid && regForm.school.$touched">
                                        Vous devez entrer votre école professionnelle ou université
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input
                                            type="checkbox"
                                            name="confirmation"
                                            ng-model="user.confirm"
                                            ng-required="true">
                                            Je confirme que ces informations sont correctes.
                                    </label>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="regForm.confirmation.$invalid && regForm.confirmation.$touched">
                                        Vous devez confirmer que ces informations sont correctes
                                    </div>
                                </div>
                                <p>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        ng-disabled="regForm.$invalid"
                                        ng-hide="formProcessing">
                                            <i class="fa fa-user"></i> S'inscrire
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-info"
                                        ng-show="formProcessing">Inscription en cours
                                            <i class="fa fa-spinner fa-spin"></i>
                                        </span>
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

                <div ng-show="doneProcessing" class="text-center">
                    <h3 class="text-success">
                        Félicitations! Inscription réussie.<br><br>
                        <small><small>
                            Veuillez consulter votre e-mail. vous avez reçu un e-mail de confirmation. <br>
                            <span ng-bind="registered">
                                @{{ registered }}
                            </span>
                        </small></small>
                    </h3>
                    <p>
                        <button
                            class="btn btn-info"
                            ng-click="newRegistrationProcess()">
                            Nouvelle inscription
                        </button>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>