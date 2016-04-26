<section id="inscription" class="content-section noselect" ng-app="forumTelecomHaiti" ng-controller="RegistrationController">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                 <h2 class="text-center">S'inscrire au Forum <br>
                    <small>Uitilisez la forme pour vous inscrire.</small>
                </h2>

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <form
                            method="POST"
                            role="form" novalidate
                            name="regForm"
                            ng-submit="processForm()">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="firstname"
                                    placeholder="Prénom"
                                    ng-model="user.firstname"
                                    ng-required="true">
                                <div
                                    class="text-center text-danger"
                                    ng-show="regForm.firstname.$invalid && regForm.firstname.$touched">
                                    Vous devez entrer votre prénom
                                </div>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="lastname"
                                    placeholder="Votre nom"
                                    ng-model="user.lastname"
                                    ng-required="true">
                                <div
                                    class="text-center text-danger"
                                    ng-show="regForm.lastname.$invalid && regForm.lastname.$touched">
                                    Vous devez entrer votre votre nom
                                </div>
                            </div>
                            <div class="form-group">
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
                            <div class="form-group">
                                <input
                                    type="number"
                                    class="form-control"
                                    id="telephone"
                                    name="telephone"
                                    placeholder="Numéro de téléphone"
                                    ng-model="user.telephone"
                                    ng-required="true">
                                <div
                                        class="text-center text-danger"
                                        ng-show="regForm.telephone.$invalid && regForm.telephone.$touched">
                                    Vous devez entrer un numéro de téléphone valide
                                </div>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="activite"
                                    placeholder="Secteur d'activité"
                                    ng-model="user.activite"
                                    ng-required="true">
                                <div
                                    class="text-center text-danger"
                                    ng-show="regForm.activite.$invalid && regForm.activite.$touched">
                                    Vous devez entrer votre nom complet ou celui de votre entreprise
                                </div>
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="school"
                                    placeholder="Ecole Professionnelle ou Université"
                                    ng-model="user.school"
                                    ng-required="true">
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
                            </div>
                            <p>
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                    ng-disabled="regForm.$invalid">S'inscrire
                                </button>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>