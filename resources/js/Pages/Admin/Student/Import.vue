<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tambah Siswa</h1>
                <br />
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <Link
                                    href="/admin/student"
                                    class="btn btn-primary"
                                    ><i
                                        class="fa fa-angle-left"
                                        aria-hidden="true"
                                    ></i>
                                    Kembali</Link
                                >
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5><i class="fa fa-bookmark"></i> Tambah Siswa</h5>
                        <hr />
                        <form @submit.prevent="submit">
                            <div class="mb-4">
                                <label for="">File Import</label>
                                <input
                                    type="file"
                                    class="form-control"
                                    :class="{ 'is-invalid': errors.file }"
                                    @input="form.file = $event.target.files[0]"
                                />
                                <div
                                    v-if="errors.file"
                                    class="invalid-feedback"
                                >
                                    {{ errors.file }}
                                </div>
                                <div v-if="errors[0]" class="invalid-feedback">
                                    {{ errors[0] }}
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-md btn-primary border-0 shadow me-2"
                            >
                                Simpan
                            </button>
                            <button
                                type="reset"
                                class="btn btn-md btn-warning border-0 shadow"
                            >
                                Reset
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <Footer />
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
import Footer from "../../../Components/Footer.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import Swal from "sweetalert2";

export default {
    components: {
        Footer,
        Link,
    },
    layout: Layout,
    props: {
        errors: Object,
    },
    data() {
        return {
            form: {
                file: "",
            },
        };
    },
    methods: {
        submit() {
            Inertia.post(
                "/admin/student/import",
                {
                    file: this.form.file,
                },
                {
                    onSuccess: () => {
                        Swal.fire({
                            title: "Success!",
                            text: "Import Siswa Berhasil Disimpan!.",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    },
                }
            );
        },
    },
};
</script>
