<template>
    <div class="card-header">
        <h3 class="text-center font-weight-light my-4">Login</h3>
    </div>
    <div class="card-body">
        <form @submit.prevent="submit">
            <div class="form-floating mb-3">
                <input
                    class="form-control"
                    id="inputEmail"
                    type="email"
                    placeholder="name@example.com"
                    v-model="form.email"
                />
                <label for="inputEmail">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    class="form-control"
                    id="inputPassword"
                    type="password"
                    placeholder="Password"
                    v-model="form.password"
                />
                <label for="inputPassword">Password</label>
            </div>
            <div
                class="d-flex align-items-center justify-content-between mt-4 mb-0"
            >
                <a class="small" href="password.html">Forgot Password?</a>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small">
            <Link href="/register">Need an account? Sign up!</Link>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Layout from "../../Layouts/Auth.vue";
import { Inertia } from "@inertiajs/inertia";

export default {
    layout: Layout,
    components: { Link },
    data() {
        return {
            form: {
                email: "",
                password: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post("/login", {
                email: this.form.email,
                password: this.form.password,
            });
        },
    },
};
</script>
