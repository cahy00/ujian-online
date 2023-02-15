<template>
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <Link
                        href="/admin/"
                        :class="{
                            active: $page.url.startsWith('/admin/dashboard'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </Link>
                    <div class="sb-sidenav-menu-heading">Modul</div>
                    <Link
                        href="/admin/lesson"
                        :class="{
                            active: $page.url.startsWith('/admin/lesson'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        Mata Pelajaran
                    </Link>
                    <Link
                        class="nav-link"
                        :class="{
                            active: $page.url.startsWith('/admin/classroom'),
                        }"
                        href="/admin/classroom"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-columns"></i>
                        </div>
                        Kelas
                    </Link>
                    <Link
                        href="/admin/student"
                        :class="{
                            active: $page.url.startsWith('/admin/student'),
                        }"
                        class="nav-link"
                    >
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        Siswa
                    </Link>
                    <div class="sb-sidenav-menu-heading">Exam</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-chart-area"></i>
                        </div>
                        Ujian
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        Ujian Session
                    </a>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
// import Link from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
};
</script>
