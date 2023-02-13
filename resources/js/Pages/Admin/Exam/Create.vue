<template>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tambah Ujian</h1>
                <br />
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <Link
                                    href="/admin/lesson"
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
                        <h5><i class="fa fa-bookmark"></i> Tambah Ujian</h5>
                        <hr />
                        <form @submit.prevent="submit">
                            <div class="mb4">
                                <label for="title">Nama Ujian</label>
                                <input
                                    type="text"
                                    placeholder="Masukkan Nama Ujian"
                                    class="form-control"
                                    v-model="form.title"
                                />
                                <div class="invalid-feedback">
                                    {{ errors.title }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="lesson">Kelas</label>
                                        <select
                                            v-model="form.classroom_id"
                                            id="lesson"
                                            class="form-select"
                                        >
                                            <option
                                                v-for="classrooms in classroom"
                                                :key="classrooms.id"
                                                :value="classrooms.id"
                                            >
                                                {{ classrooms.title }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="lesson"
                                            >Mata Pelajaran</label
                                        >
                                        <select
                                            v-model="form.lesson_id"
                                            id="lesson"
                                            class="form-select"
                                        >
                                            <option
                                                v-for="lessons in lesson"
                                                :key="lessons.id"
                                                :value="lessons.id"
                                            >
                                                {{ lessons.title }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="description">Deskripsi</label>
                                <Editor
                                    api-key="tym8sv917r013htcr07qbxet8nmp7axloc18omawdb22nvay"
                                    v-model="form.description"
                                    :init="{
                                        menubar: false,
                                        plugins: 'lists link image emoticons',
                                        toolbar:
                                            'styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image emoticons',
                                    }"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<script>
import Layout from "../../../Layouts/Layout.vue";
import Editor from "@tinymce/tinymce-vue";

export default {
    components: {
        Editor,
    },
    layout: Layout,
    props: {
        errors: Object,
        classroom: Object,
        lesson: Object,
    },
    data() {
        return {
            form: {
                title: "",
                lesson_id: "",
                classroom_id: "",
                description: "",
                duration: "",
                random_question: "",
                random_answer: "",
                show_answer: "",
            },
        };
    },
    methods: {
        submit() {},
    },
};
</script>
