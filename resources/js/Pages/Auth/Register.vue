<template>
    <div class="card-header">
        <h3 class="text-center font-weight-light my-4">Create Account</h3>
    </div>
    <div class="card-body">
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input
                            class="form-control"
                            id="inputFirstName"
                            type="text"
                            placeholder="Enter your first name"
                        />
                        <label for="inputFirstName">First name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input
                            class="form-control"
                            id="inputLastName"
                            type="text"
                            placeholder="Enter your last name"
                        />
                        <label for="inputLastName">Last name</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input
                    class="form-control"
                    id="inputEmail"
                    type="email"
                    placeholder="name@example.com"
                />
                <label for="inputEmail">Email address</label>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input
                            class="form-control"
                            id="inputPassword"
                            type="password"
                            placeholder="Create a password"
                        />
                        <label for="inputPassword">Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input
                            class="form-control"
                            id="inputPasswordConfirm"
                            type="password"
                            placeholder="Confirm password"
                        />
                        <label for="inputPasswordConfirm"
                            >Confirm Password</label
                        >
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid">
                    <a class="btn btn-primary btn-block" href="login.html"
                        >Create Account</a
                    >
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small">
            <Link href="/login">Have an account? Go to login</Link>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Layout from "../../Layouts/Auth.vue";

export default {
    layout: Layout,
    components: { Link },
};
</script>
