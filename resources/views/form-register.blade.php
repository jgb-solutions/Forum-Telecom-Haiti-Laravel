<section id="inscription" class="content-section noselect" ng-app="forumTelecomHaiti" ng-controller="RegistrationController">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                 <h2 class="text-center">S'inscrire au Forum <br>
                    <small>Uitilisez la forme pour vous inscrire.</small>
                    <small><pre>@{{ user }}</pre></small>
                </h2>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <form method="POST" role="form" novalidate name="regForm">
                            <div class="form-group">
                                Vous êtes un(e):
                                <label class="radio-inline">
                                    <input
                                        type="radio"
                                        name="typeInscription"
                                        id="inlineRadio1"
                                        value="individuel"
                                        ng-model="user.typeInscription"
                                        ng-required="true"> Individuel
                                </label>
                                <label class="radio-inline">
                                    <input
                                        type="radio"
                                        name="typeInscription"
                                        id="inlineRadio2"
                                        value="entreprise"
                                        ng-model="user.typeInscription"
                                        ng-required="true"> Entreprise
                                </label>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Entrez votre nom complet"
                                    ng-model="user.name"
                                    ng-required="true">
                                <div
                                    class="text-center text-danger"
                                    ng-show="regForm.name.$invalid && regForm.name.$touched">
                                    Vous devez entrer votre nom complet
                                </div>
                            </div>
                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Entrez votre e-mail"
                                    ng-model="user.email"
                                    ng-required="true">
                                <div
                                    class="text-center text-danger"
                                    ng-show="regForm.email.$invalid && regForm.email.$touched">
                                    Vous devez entrer un e-mail valide
                                </div>
                            </div>
                            <div class="form-group">
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="telephone"
                                    name="telephone"
                                    placeholder="Entrez votre numéro de téléphone"
                                    ng-model="user.telephone"
                                    ng-required="true">
                                <div
                                        class="text-center text-danger"
                                        ng-show="regForm.telephone.$invalid && regForm.telephone.$touched">
                                    Vous devez entrer un numéro de téléphone valide
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea
                                    name="description"
                                    id="description"
                                    name="description"
                                    class="form-control"
                                    rows="3"
                                    required="required"
                                    placeholder="Décrivez-vous ou votre entreprise en quelques mots."
                                    ng-model="user.description"
                                    ng-required="true"></textarea>
                                <div
                                    class="text-center text-danger"
                                    ng-show="regForm.description.$invalid && regForm.description.$touched">
                                    Vous devez vous décrire ou votre entreprise en quelque mots.
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input
                                        type="checkbox"
                                        name="confirmation"
                                        ng-model="user.confirm">
                                        Je confirme que ces informations sont correctes.
                                </label>
                            </div>
                            <p>
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                    ng-disabled="!user.confirm || regForm.$invalid">S'inscrire
                                </button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>