<section id="contact" class="content-section" ng-controller="ContactController">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                 <div ng-hide="doneProcessing">
                    <h2 class="text-center ">
                        Contactez-nous <br>
                        <small>
                            <a class="light" href="mailto:info@forumtelecomhaiti.com">info@forumtelecomhaiti.com</a>
                        </small>
                    </h2>

                   <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <form
                                method="POST"
                                role="form" novalidate
                                name="contactForm"
                                ng-submit="processContactForm()"
                                class="contact">
                                <div
                                    class="form-group"
                                    ng-class="{'has-error':contactForm.firstname.$invalid && contactForm.firstname.$touched, 'has-success':contactForm.firstname.$valid}">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="firstname"
                                        placeholder="Prénom"
                                        ng-model="contact.firstname"
                                        ng-required="true"
                                        ng-minlength="6"
                                        ng-focus="inputFocus">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.firstname.$invalid && contactForm.firstname.$touched">
                                        Vous devez entrer votre prénom
                                    </div>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.firstname.$invalid &&
                                        contactForm.firstname.$error.minlength">
                                        Votre prénom doit être supérieur à 6 caractères
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':contactForm.lastname.$invalid && contactForm.lastname.$touched, 'has-success':contactForm.lastname.$valid}">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="lastname"
                                        placeholder="Nom"
                                        ng-model="contact.lastname"
                                        ng-required="true"
                                        ng-minlength="6">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.lastname.$invalid && contactForm.lastname.$touched">
                                        Vous devez entrer votre votre nom
                                    </div>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.lastname.$invalid &&
                                        contactForm.lastname.$error.minlength">
                                        Votre nom doit être supérieur à 6 caractères
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':contactForm.email.$invalid && contactForm.email.$touched, 'has-success':contactForm.email.$valid}">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="E-mail"
                                        ng-model="contact.email"
                                        ng-required="true">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.email.$invalid && contactForm.email.$touched">
                                        Vous devez entrer un e-mail valide
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':contactForm.telephone.$invalid && contactForm.telephone.$touched, 'has-success':contactForm.telephone.$valid}">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="telephone"
                                        name="telephone"
                                        placeholder="Sujet"
                                        ng-model="contact.telephone"
                                        ng-required="true"
                                        ng-minlength="6">
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.telephone.$invalid && contactForm.telephone.$touched">
                                        Vous devez entrer un sujet
                                    </div>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.telephone.$invalid &&
                                        contactForm.telephone.$error.minlength">
                                        Votre sujet doit être supérieur à 6 caractères
                                    </div>
                                </div>
                                <div class="form-group"
                                    ng-class="{'has-error':contactForm.activite.$invalid && contactForm.activite.$touched, 'has-success':contactForm.activite.$valid}">
                                    <textarea
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="message"
                                        placeholder="Message"
                                        ng-model="contact.message"
                                        ng-required="true"
                                        ng-minlength="50"></textarea>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.message.$invalid && contactForm.message.$touched">
                                        Vous devez écrire votre message
                                    </div>
                                    <div
                                        class="text-center text-danger"
                                        ng-show="contactForm.message.$invalid &&
                                        contactForm.message.$error.minlength">
                                        Votre message doit être supérieur à 50 caractères
                                    </div>
                                </div>
                                <p>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                        ng-disabled="contactForm.$invalid">
                                        <span ng-hide="formProcessing">
                                            <i class="fa fa-envelope"></i> Envoyer</span>
                                        <span ng-show="formProcessing">Envoie en cours...</span>
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                <div>
                <div ng-show="doneContacting" class="text-center">
                    <h3 class="text-success">
                        Félicitations! Votre message a été envoyé.<br><br>
                        <small>
                            Nous vous contacterons sous-peu si nécessaire.
                        </small>
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