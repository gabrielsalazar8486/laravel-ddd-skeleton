<template>
    <div class="container">
        <div class=" center-login-med row ">
            <form @submit.prevent="submit" class="col-lg-7 col-md-9 col-sm-11 row-login text-center">
                <div>
                    <img src="@/assets/images/logo2_SF_1.svg" class="img-fluid mb-5">
                    <div class="div-text mb-5">
                        <h4 class="font-italic font-weight-bold text-re"><b class="clr-text">Inicio de Sesión</b></h4>
                    </div>
                    <div class="input-group mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text "><img src="@/assets/images/icons/@.svg"><br></span>
                        </div>
                        <input type="email" name="username" required class="form-control "
                               placeholder="Dirección de correo electrónico"
                               aria-label="Username" aria-describedby="basic-addon1" v-model="username">
                    </div>
                    <div class="input-group mb-5">
                        <div class="input-group-prepend">
                            <span class="input-group-text "><img src="@/assets/images/icons/key.svg"></span>
                        </div>
                        <input type="password" name="password" required class="form-control " aria-label="Username"
                               aria-describedby="basic-addon1"
                               placeholder="Contraseña" v-model="password">
                    </div>
                    <button type="submit" class="btn btn-block btn-sm font-weight-bold linear-btn mb-3 text-white"
                            :disabled="sending">
                        Ingresar
                    </button>
                    <a class="btn btn-block  btn-sm mb-3 mt-4 btn-outline-info-med" href="#">Registrar
                        Empresa</a>
                    <div v-show="errorMessage" class="alert alert-danger" role="alert">
                        <p v-text="errorMessage"></p>
                    </div>
                    <div class="div-text pt-3">
                        <router-link class="olvidar-clave" :to="{name: 'auth.recovery'}">¿Olvidáste tu contraseña?
                        </router-link>
                    </div>
                    <div class="pt-5">
                        <p class="by mb-0">Diseñado y Desarrollado por &nbsp;<a class="olvidar-clave"
                                                                                href="https://medine.dev/"
                                                                                target="_blank">MEDINE</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script lang="ts">
import {Component, Vue} from 'vue-property-decorator';

@Component
export default class Login extends Vue {
    username = '';
    password = '';
    sending = false;
    errorMessage = '';

    submit() {
        this.sending = true;
        this.$store.dispatch('retrieveToken', {
            username: this.username,
            password: this.password
        }).then(() => {
            this.$router.push({name: 'home'});
        }).catch(error => {
            console.log(error)
            this.errorMessage = error.response.data;
        }).finally(() => this.sending = false)
    }

    logout() {
        this.$store.dispatch('destroyToken')
    }
}
</script>

<style scoped>

</style>
